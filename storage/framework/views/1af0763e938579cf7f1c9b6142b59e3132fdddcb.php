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
             <img src='<?php echo e(url('/')); ?>/public/uploads/logo.png'/> 
        </div>
        <ul class="nav">
            <li>
                  <a href="<?php echo e(URL::to('/')); ?>"><i class="tim-icons icon-world"></i> Home</a>
                </li>
                 
               
            <li <?php if($pageSlug == 'dashboard'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p><?php echo e(__('Dashboard')); ?></p>
                </a>
            </li> 
            <?php if(Auth::check() && Auth::user()->user_type=='admin'): ?>
             <li>
                <a data-toggle="collapse" href="#user" aria-expanded="true">
                    <i class="tim-icons icon-single-02" ></i>
                    <span class="nav-link-text" ><?php echo e(__('Users')); ?></span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse <?php if($pageSlug == 'user'): ?> show <?php endif; ?>" id="user">
                    <ul class="nav pl-4">
                    <li <?php if($pageSlug == 'customer'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/user')); ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Manage Users
                        </a>
                    </li>
                    <li <?php if($pageSlug == 'user/create'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/user/create')); ?>">
                            <i class="fa fa-angle-double-right"></i>
                            Add User
                        </a>
                    </li>
                    </ul>
                </div>
            </li>
            <li <?php if($pageSlug == 'mahatma'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(URL::to('me-admin/mahatma')); ?>">
                   <i class="tim-icons icon-badge" ></i>
                     <p><?php echo e(__('All Centers')); ?></p>
                </a> 
            </li> 
            <li <?php if($pageSlug == 'order'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(URL::to('me-admin/order')); ?>">
                   <i class="tim-icons icon-pencil" ></i>
                     <p><?php echo e(__('All Orders')); ?></p>
                </a> 
            </li>
            <li <?php if($pageSlug == 'production'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(URL::to('me-admin/production')); ?>">
                   <i class="tim-icons icon-cloud-upload-94" ></i>
                     <p><?php echo e(__('All Productions')); ?></p>
                </a> 
            </li>
            <li <?php if($pageSlug == 'delivery'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(URL::to('me-admin/delivery')); ?>">
                   <i class="tim-icons icon-settings" ></i>
                     <p><?php echo e(__('All delivery')); ?></p>
                </a> 
            </li>
            <li <?php if($pageSlug == 'kachomal'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(URL::to('me-admin/kachomal')); ?>">
                   <i class="tim-icons icon-settings" ></i>
                     <p><?php echo e(__('All Kachomal')); ?></p>
                </a> 
            </li>
            
            <li>
                    <a href="<?php echo e(route('logout')); ?>"><i class="tim-icons icon-button-power"></i> Log out</a>
                   
                </li> 
             
            <!--<li>
                <a data-toggle="collapse" href="#order" aria-expanded="true">
                    <i class="tim-icons icon-pencil" ></i>
                    <span class="nav-link-text" ><?php echo e(__('Orders')); ?></span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse <?php if($pageSlug == 'order'): ?> show <?php endif; ?>" id="order">
                    <ul class="nav pl-4">
                    <li <?php if($pageSlug == 'order'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/order')); ?>">
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
                    <span class="nav-link-text" ><?php echo e(__('Productions')); ?></span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse <?php if($pageSlug == 'production'): ?> show <?php endif; ?>" id="production">
                    <ul class="nav pl-4">
                    <li <?php if($pageSlug == 'order'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/production')); ?>">
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
                    <span class="nav-link-text" ><?php echo e(__('Delivery')); ?></span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse <?php if($pageSlug == 'delivery'): ?> show <?php endif; ?>" id="delivery">
                    <ul class="nav pl-4">
                    <li <?php if($pageSlug == 'order'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/delivery')); ?>">
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
                    <span class="nav-link-text" ><?php echo e(__('Reports')); ?></span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse <?php if($pageSlug == 'reports' || $pageSlug == 'deathreports' || $pageSlug == 'admissionsreports'): ?> show <?php endif; ?>" id="reports">
                    <ul class="nav pl-4">
                    <li <?php if($pageSlug == 'reports'): ?> class="active " <?php endif; ?>>
                        <a href="<?php echo e(URL::to('me-admin/reports')); ?>">
                            <i class="fa fa-angle-double-right"></i>
                            All Reports
                        </a>
                    </li>
                      
                    </ul>
                </div>
            </li>-->
              
            
              
               <?php endif; ?>
          
        </ul>
    </div>
</div>
<?php /**PATH /Volumes/AlpeshJetDrive/C-Card/MAMP/order/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>