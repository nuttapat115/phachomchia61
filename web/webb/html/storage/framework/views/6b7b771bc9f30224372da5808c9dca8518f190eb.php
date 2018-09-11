<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sweetalert::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลนักศึกษาใหม่</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('addUserData')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <label for="sit" class="col-md-4 col-form-label text-md-right">ที่นั่ง</label>

                                <div class="col-md-6">
                                    <select class="SitSelect form-control<?php echo e($errors->has('sit') ? ' is-invalid' : ''); ?>" name="sit" id="sit" required>
                                        <?php $__currentLoopData = $sit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sits): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sits->sit); ?>"><?php echo e($sits->sit); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="studentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา</label>

                                <div class="col-md-6">
                                    <input id="studentID" type="text" class="form-control<?php echo e($errors->has('studentID') ? ' is-invalid' : ''); ?>" name="studentID" value="<?php echo e(old('studentID')); ?>" required>

                                    <?php if($errors->has('studentID')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('studentID')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required >

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ภาควิชา (ตัวย่อภาษาอังกฤษ)</label>

                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control<?php echo e($errors->has('department') ? ' is-invalid' : ''); ?>" name="department" value="<?php echo e(old('department')); ?>" required >

                                    <?php if($errors->has('department')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('department')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        			เพิ่มข้อมูล
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>