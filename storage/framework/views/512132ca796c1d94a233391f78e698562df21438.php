<?php $__env->startSection('content'); ?>
    <div class="col-md-10 text-center ml-auto mr-auto">
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="card card-login card-white">
                <img src='<?php echo e(url('/')); ?>/public/uploads/logo.png'/> 
                <div class="card-header">
                    
                    <h1 class="card-title"><?php echo e(__('Log in')); ?></h1>
                    
                </div>
                <div class="card-body">
                    <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" value="admin@admin.com">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="input-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="<?php echo e(__('Password')); ?>" name="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" value="admin123">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Login')); ?></button>
                    
                     
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/AlpeshJetDrive/C-Card/MAMP/order/resources/views/auth/login.blade.php ENDPATH**/ ?>