{{-- start header --}}

@include('client_layout.header')

{{-- end header --}}


{{-- start content --}}

@yield('content')

{{-- end content --}}

{{-- start footer --}}

@include('client_layout.footer')

{{-- end footer --}}



<script src="{{ asset('frontend/assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="{{ asset('frontend/assets/js/megamenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.animate.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/rating.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap-touch-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/js/select2.full.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password must be matching')
        } else {
            input.setCustomValidity('');
        }
    }
</script>

<script>
    function confirmDelete() {
        return confirm("Sure you want to delete this data?");
    }
    $(document).ready(function() {
        advFieldsStatus = $('#advFieldsStatus').val();

        $('#paypal_form').hide();
        $('#stripe_form').hide();
        $('#bank_form').hide();

        $('#advFieldsStatus').on('change', function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if (advFieldsStatus == '') {
                $('#paypal_form').hide();
                $('#stripe_form').hide();
                $('#bank_form').hide();
            } else if (advFieldsStatus == 'PayPal') {
                $('#paypal_form').show();
                $('#stripe_form').hide();
                $('#bank_form').hide();
            } else if (advFieldsStatus == 'Stripe') {
                $('#paypal_form').hide();
                $('#stripe_form').show();
                $('#bank_form').hide();
            } else if (advFieldsStatus == 'Bank Deposit') {
                $('#paypal_form').hide();
                $('#stripe_form').hide();
                $('#bank_form').show();
            }
        });
    });


    $(document).on('submit', '#stripe_form', function() {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            // name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('pk_test_0SwMWadgu8DwmEcPdUPRsZ7b');

    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html(
                '<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' +
                response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5ae370d7227d3d7edc24cb96/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
