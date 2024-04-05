<aside class="main-sidebar">
  <section class="sidebar">
     <ul class="sidebar-menu">
        <li class="treeview {{request()->is('admin') ? 'active' : ''}}">
           <a href="{{ url('admin')}}">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/settings') ? 'active' : ''}}">
           <a href="{{ url('/admin/settings')}}">
           <i class="fa fa-sliders"></i> <span>Website Settings</span>
           </a>
        </li>
        <li class="treeview {{ request()->is('admin/size') ||
                              request()->is('admin/color') ||
                              request()->is('admin/country') ||
                              request()->is('admin/shippingcost') ||
                              request()->is('admin/toplevelcategory') ||
                              request()->is('admin/midlevelcategory') ||
                              request()->is('admin/endlevelcategory') ? 'active' : ''}}">
           <a href="">
           <i class="fa fa-cogs"></i>
           <span>Shop Settings</span>
           <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
           </span>
           </a>
           <ul class="treeview-menu">
              <li><a href="{{ url('/admin/size')}}"><i class="fa fa-circle-o"></i> Size</a></li>
              <li><a href="{{ url('/admin/color')}}"><i class="fa fa-circle-o"></i> Color</a></li>
              <li><a href="{{ url('/admin/country')}}"><i class="fa fa-circle-o"></i> Country</a></li>
              <li><a href="{{ url('/admin/shippingcost')}}"><i class="fa fa-circle-o"></i> Shipping Cost</a></li>
              <li><a href="{{ url('/admin/toplevelcategory')}}"><i class="fa fa-circle-o"></i> Top Level Category</a></li>
              <li><a href="{{ url('/admin/midlevelcategory')}}"><i class="fa fa-circle-o"></i> Mid Level Category</a></li>
              <li><a href="{{ url('/admin/endlevelcategory')}}"><i class="fa fa-circle-o"></i> End Level Category</a></li>
           </ul>
        </li>
        <li class="treeview {{request()->is('admin/productmanagement') ? 'active' : ''}}">
           <a href="{{ url('/admin/productmanagement')}}">
           <i class="fa fa-shopping-bag"></i> <span>Product Management</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/ordermanagement') ? 'active' : ''}}">
           <a href="{{ url('/admin/ordermanagement')}}">
           <i class="fa fa-sticky-note"></i> <span>Order Management</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/managesliders') ? 'active' : ''}}">
           <a href="{{ url('/admin/managesliders')}}">
           <i class="fa fa-picture-o"></i> <span>Manage Sliders</span>
           </a>
        </li>
        <!-- Icons to be displayed on Shop -->
        <li class="treeview {{request()->is('admin/services') ? 'active' : ''}}">
           <a href="{{ url('/admin/services')}}">
           <i class="fa fa-list-ol"></i> <span>Services</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/faq') ? 'active' : ''}}">
           <a href="{{ url('admin/faq')}}">
           <i class="fa fa-question-circle"></i> <span>FAQ</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/registeredcustomer') ? 'active' : ''}}">
           <a href="{{ url('/admin/registeredcustomer')}}">
           <i class="fa fa-user-plus"></i> <span>Registered Customer</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/pagesettings') ? 'active' : ''}}">
           <a href="{{ url('/admin/pagesettings')}}">
           <i class="fa fa-tasks"></i> <span>Page Settings</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/socialmedia') ? 'active' : ''}}">
           <a href="{{ url('/admin/socialmedia')}}">
           <i class="fa fa-globe"></i> <span>Social Media</span>
           </a>
        </li>
        <li class="treeview {{request()->is('admin/subscriber') ? 'active' : ''}}">
           <a href="{{ url('/admin/subscriber')}}">
           <i class="fa fa-hand-o-right"></i> <span>Subscriber</span>
           </a>
        </li>
     </ul>
  </section>
</aside>