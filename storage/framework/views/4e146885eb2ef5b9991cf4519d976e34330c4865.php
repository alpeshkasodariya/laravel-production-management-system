<!DOCTYPE html>
<html lang="">
    <?php

    use Jenssegers\Agent\Agent;

$agent = new Agent();
    ?>
    <?php echo $__env->make('layouts.front-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .navbar {
            background-color: #fffaf0!important;
    color: black;
        }
        .navbar-light .navbar-nav .nav-link {
            color:black!important;
            font-size:15px;
            font-weight: bold;
                text-align: center;
        }
       .ordertitle {
             text-align: CENTER;
    padding: 2%;
    font-size: 4em;
    color: #fef8f0;
    font-weight: bold;
        }
        .full-page>.content {
    padding-bottom: 150px;
     padding-top:  0px;  
}
    </style>
    <body class="maga-custom">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"><img src='<?php echo e(url('/')); ?>/public/uploads/ll.jpeg'
                                                                    alt="logo" style="width: 75px;background-color: maroon;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  margin_right">
                    <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item"><a href="<?php echo e(URL::to('me-admin/dashboard')); ?>" class="nav-link">Dashboard</a>
                    <li class="nav-item"><a href="<?php echo e(URL::to('me-admin/logout')); ?>" class="nav-link">Logout</a>
                    <?php else: ?>
                    <li class="nav-item"><a href="<?php echo e(URL::to('me-admin/login')); ?>" class="nav-link">Login</a>
                        </li>
                    
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <div class="wrapper wrapper-full-page">
            <div class="full-page">
                <h1 class="ordertitle"> Sweet Order</h1>
                <div class="content">
                    <div class="container">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <?php echo $__env->yieldPushContent('js'); ?>
                <?php echo $__env->make('layouts.front-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

</body>
</html>
<?php /**PATH /Volumes/AlpeshJetDrive/C-Card/MAMP/order/resources/views/layouts/front.blade.php ENDPATH**/ ?>