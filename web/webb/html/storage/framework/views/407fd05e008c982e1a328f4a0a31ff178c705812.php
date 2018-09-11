<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sweetalert::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="cover blur-in box blurred-bg tinted" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>
<div class="container" style="z-index: 90;position: relative;">
    <div class="row justify-content-center">
        <div>
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="" class="logoInLogin">
        </div>

        <div class="col-md-8">
                <div class="card-body title_font" style="text-align: center;font-size: 20px;margin: -25px 0px;">
                    <span>ตรวจสอบที่นั่งด้วยรหัสนักศึกษา 11 หลัก</span>
                </div>
                <div class="card-body" style="text-align: center">
                    <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>" style="display: inline-flex">
                        <?php echo csrf_field(); ?>

                        <div>
                            <div class="col-md" style="text-align: center;margin: 0px auto">
                                <input id="studentID" type="text" class="form-control<?php echo e($errors->has('studentID') ? ' is-invalid' : ''); ?>" name="studentID" value="<?php echo e(old('studentID')); ?>" placeholder="61XXXXXXXX" required autofocus style="border-radius: 50px;text-align: center">

                                
                                    
                                        
                                    
                                
                            </div>
                        </div>

                        <input id="password" type="hidden" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" value="1234567890" required>

                        
                            
                                <button type="submit" class="btn btn-primary" style="border-radius: 25px;width: 80px;">
                                    <?php echo e(__('Login')); ?>

                                </button>
                            
                        
                    </form>
                </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>