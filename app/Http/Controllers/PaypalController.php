<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Shippingcost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Traits\PayPalAPI;

class PaypalController extends Controller
{
    public function paypal()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $order = new Order();

        $shippingcountry = Shippingcost::where('country_id', Session::get('customer')->cust_country)->first();
        $shippingcost = $shippingcountry->amount;
        $cartTotalPrice = Session::get('cart')->totalPrice;
        $paidAmount = $shippingcost + $cartTotalPrice;

        $order->cust_name = Session::get('customer')->cust_name;
        $order->cust_email = Session::get('customer')->cust_email;
        $order->cust_order = serialize($cart);
        $order->cust_transactionid = "tr_id_" . time();
        $order->cust_paidamount = $paidAmount;
        $order->cust_paymentmethod = "Paypal";
        $order->cust_paymentid = "cust_id_" . time();

        Session::put('order', $order);

        // Préparation des données pour setExpressCheckout
        // $checkoutData = $this->checkoutData();

        //Initialization :
        $provider = new PayPalClient;
        // Override Configuration : You can override PayPal API configuration by calling setApiCredentials method:
        $provider->setApiCredentials(config('paypal'));
        // Get Access Token : After setting the PayPal API configuration, you need to get access token before performing any API calls
        $paypalToken = $provider->getAccessToken();
        // Change Currency :
        $provider->setCurrency('EUR');

        $response = $provider->createOrder(
            [
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel')
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "EUR",
                            "value" => $paidAmount
                        ]
                    ]
                ]
            ]
        );

        // dd($response);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] == 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    private function checkoutData()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $data['items'] = [];

        foreach ($cart->items as $item) {
            $itemDetails = [
                'name' => $item['product_name'],
                'price' => $item['product_price'],
                'qty' => $item['qty']
            ];

            $data['items'][] = $itemDetails;
        }

        $checkoutData = [
            'items' => $data['items'],
            'return_url' => url('/paymentSuccessPaypal'),
            'cancel_url' => url('/cart'),
            'invoice_id' => uniqid(),
            'invoice_description' => "order description",
            'total' => Session::get('cart')->totalPrice
        ];

        return $checkoutData;
    }

    public function success(Request $request)
    {
        try {

            //Initialization :
            $provider = new PayPalClient;
            // Override Configuration : You can override PayPal API configuration by calling setApiCredentials method:
            $provider->setApiCredentials(config('paypal'));
            // Get Access Token : After setting the PayPal API configuration, you need to get access token before performing any API calls
            $paypalToken = $provider->getAccessToken();
            $response = $provider->capturePaymentOrder($request->token);

            // dd($response);

            Session::get('order')->save();

            Session::forget('cart');
            Session::forget('topCart');

            if (isset($response['status']) && $response['status'] == 'COMPLETED') {
                return view('client.paymentsuccess');

            }

        } catch (\Exception $e) {
            return redirect('/cart')->with('status', $e->getMessage());
        }

    }

    public function cancel()
    {
        return "Payment is cancelled";
    }
}
