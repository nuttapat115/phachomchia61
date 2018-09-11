<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sweetalert::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="cover blur-in box blurred-bg tinted" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>

    <div class="jumbotron vertical-center" style="z-index: 90;margin: -24px 0px;position: relative;background-color: transparent">
        <div class="container" style="z-index: 90;position: relative;">
            <div class="xx" style="text-align: right">
                <button style="padding: 10px 40px;background-color: white;border-radius: 15px;margin-right: 1.25rem;">
                    ADMINISTRATOR
                </button>
            </div>
            <div class="h-100 row justify-content-center">

                <div class="col-md">
                    <div class="card-body" style="text-align: center">
                        <div class="content_center" style="background-color: white;border-radius: 15px;padding: 50px 0px;">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" action="<?php echo e(route('adminlogincheck')); ?>" aria-label="<?php echo e(__('login')); ?>" style="display: inline-flex">
                                        <?php echo csrf_field(); ?>

                                        <div>
                                            <div class="col" style="text-align: center;margin: 0px auto">
                                                
                                                <input id="studentID" type="text" class="form-control<?php echo e($errors->has('studentID') ? ' is-invalid' : ''); ?>" name="studentID" required autofocus style="border-radius: 50px;text-align: center">

                                                <?php if($errors->has('studentID')): ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($errors->first('studentID')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
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
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>