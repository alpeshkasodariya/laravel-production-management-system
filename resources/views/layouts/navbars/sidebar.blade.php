<div class="sidebar">
    <style>
     .sidebarimg {  
    width: 50px;
    display: block;
    float: left;
    padding-right: 20px;
}
    </style>
    <div class="sidebar-wrapper">
         <div class="logo"> 
             <img src='{{ url('/') }}/public/uploads/logo.png'/> 
        </div>
        <ul class="nav">
            <li>
                  <a href="{{ URL::to('/') }}"><i class="tim-icons icon-world"></i> Home</a>
                </li>
                 
               
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li> 
            @if (Auth::check() && Auth::user()->user_type=='admin')
             <li>
                <a data-toggle="collapse" href="#user" aria-expanded="true">
                    <i class="tim-icons icon-single-02" ></i>
                    <span class="nav-link-text" >{{ __('Users') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'user') show @endif" id="user">
                    <ul class="nav pl-4">
                    <li @if ($pageSlug == 'customer') class="active " @endif>
                        <a href="{{ URL::to('me-admin/user') }}">
                            <i class="fa fa-angle-double-right"></i>
                            Manage Users
                        </a>
                    </li>
                    <li @if ($pageSlug == 'user/create') class="active " @endif>
                        <a href="{{ URL::to('me-admin/user/create') }}">
                            <i class="fa fa-angle-double-right"></i>
                            Add User
                        </a>
                    </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'mahatma') class="active " @endif>
                <a href="{{ URL::to('me-admin/mahatma') }}">
                   <i class="tim-icons icon-badge" ></i>
                     <p>{{ __('All Centers') }}</p>
                </a> 
            </li> 
            <li @if ($pageSlug == 'order') class="active " @endif>
                <a href="{{ URL::to('me-admin/order') }}">
                   <i class="tim-icons icon-pencil" ></i>
                     <p>{{ __('All Orders') }}</p>
                </a> 
            </li>
            <li @if ($pageSlug == 'production') class="active " @endif>
                <a href="{{ URL::to('me-admin/production') }}">
                   <i class="tim-icons icon-cloud-upload-94" ></i>
                     <p>{{ __('All Productions') }}</p>
                </a> 
            </li>
            <li @if ($pageSlug == 'delivery') class="active " @endif>
                <a href="{{ URL::to('me-admin/delivery') }}">
                   <i class="tim-icons icon-settings" ></i>
                     <p>{{ __('All delivery') }}</p>
                </a> 
            </li>
            <li @if ($pageSlug == 'kachomal') class="active " @endif>
                <a href="{{ URL::to('me-admin/kachomal') }}">
                   <i class="tim-icons icon-sound-wave" ></i>
                     <p>{{ __('All Kachomal') }}</p>
                </a> 
            </li>
            <li @if ($pageSlug == 'kachomalstock') class="active " @endif>
                <a href="{{ URL::to('me-admin/kachomalstock') }}">
                   <i class="tim-icons icon-bag-16" ></i>
                     <p>{{ __('All Kachomal Stock') }}</p>
                </a> 
            </li>
            <li @if ($pageSlug == 'kachomaldeliver') class="active " @endif>
                <a href="{{ URL::to('me-admin/kachomaldeliver') }}">
                   <i class="tim-icons icon-app" ></i>
                     <p>{{ __('Deliver Kachomal') }}</p>
                </a> 
            </li>
            <li>
                    <a href="{{ route('logout') }}"><i class="tim-icons icon-button-power"></i> Log out</a>
                   
                </li> 
             
            <!--<li>
                <a data-toggle="collapse" href="#order" aria-expanded="true">
                    <i class="tim-icons icon-pencil" ></i>
                    <span class="nav-link-text" >{{ __('Orders') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'order') show @endif" id="order">
                    <ul class="nav pl-4">
                    <li @if ($pageSlug == 'order') class="active " @endif>
                        <a href="{{ URL::to('me-admin/order') }}">
                            <i class="fa fa-angle-double-right"></i>
                            All Orders
                        </a>
                    </li>
                     
                    </ul>
                </div>
            </li>
            
            <li>
                <a data-toggle="collapse" href="#production" aria-expanded="true">
                    <i class="tim-icons icon-cloud-upload-94" ></i>
                    <span class="nav-link-text" >{{ __('Productions') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'production') show @endif" id="production">
                    <ul class="nav pl-4">
                    <li @if ($pageSlug == 'order') class="active " @endif>
                        <a href="{{ URL::to('me-admin/production') }}">
                            <i class="fa fa-angle-double-right"></i>
                            All Productions
                        </a>
                    </li>
                     
                    </ul>
                </div>
            </li>
            
            <li>
                <a data-toggle="collapse" href="#delivery" aria-expanded="true">
                    <i class="tim-icons icon-settings" ></i>
                    <span class="nav-link-text" >{{ __('Delivery') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'delivery') show @endif" id="delivery">
                    <ul class="nav pl-4">
                    <li @if ($pageSlug == 'order') class="active " @endif>
                        <a href="{{ URL::to('me-admin/delivery') }}">
                            <i class="fa fa-angle-double-right"></i>
                            All Delivery
                        </a>
                    </li>
                     
                    </ul>
                </div>
            </li>
            
            <!--<li>
                <a data-toggle="collapse" href="#reports" aria-expanded="true">
                    <i class="tim-icons icon-sound-wave" ></i>
                    <span class="nav-link-text" >{{ __('Reports') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'reports' || $pageSlug == 'deathreports' || $pageSlug == 'admissionsreports') show @endif" id="reports">
                    <ul class="nav pl-4">
                    <li @if ($pageSlug == 'reports') class="active " @endif>
                        <a href="{{ URL::to('me-admin/reports') }}">
                            <i class="fa fa-angle-double-right"></i>
                            All Reports
                        </a>
                    </li>
                      
                    </ul>
                </div>
            </li>-->
              
            
              
               @endif
          
        </ul>
    </div>
</div>
