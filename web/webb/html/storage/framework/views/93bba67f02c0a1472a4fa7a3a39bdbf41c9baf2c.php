<?php $__env->startSection('content'); ?>
    <div class="cover blur-in box blurred-bg tinted" style="z-index: 1;background-color: rgba(255, 255, 255,0.9);top: 0px;"></div>

    <div class="jumbotron vertical-center" style="z-index: 90;margin: -24px 0px;position: relative;background-color: transparent">
        <div class="container" style="z-index: 90;position: relative;">
            <div class="xx" style="text-align: right">
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="padding: 10px 40px;background-color: white;border-radius: 15px;margin-right: 1.25rem;">Logout <span class="glyphicon glyphicon-log-out"></span></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <div class="h-100 row justify-content-center">

                <div class="col-md">
                    <div class="card-body" style="text-align: center">
                        <div class="content_center" style="background-color: white;border-radius: 15px;padding: 20px">
                            <div class="row">
                                <div class="col-md">
                                    <nav id="fullsized_image_holder">
                                        
                                        <img src="data:image/png;base64, <?php echo base64_encode(QrCode::format('png')->merge('https://raw.githubusercontent.com/nuttapat115/phachomchia61/master/web/web%20phachomchia61/public/img/qttestlogo2.jpg', .0, true)->errorCorrection('H')->size(300)->generate(Auth::user()->studentID )); ?> " class="qrlogo">
                                        
                                    </nav>
                                    <nav style="margin: 0px 40px;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-md">
                                                <a class = "btn btn-success" style="width: 100%;border-radius: 20px" href="data:image/png;base64, <?php echo base64_encode(QrCode::format('png')->merge('https://raw.githubusercontent.com/nuttapat115/phachomchia61/master/web/web%20phachomchia61/public/img/qttestlogo2.jpg', .0, true)->errorCorrection('H')->size(500)->generate(Auth::user()->studentID )); ?> " download>Save qr</a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md" style="text-align: left;">
                                    <div class="xxx" style="margin: 105px 0px">
                                        <nav style="margin: 5px 0px">
                                            SIT : <span style="color: red"><?php echo e($sit); ?></span>
                                        </nav>
                                        <nav id="nameRes" style="margin: 5px 0px">
                                            NAME : <span style="color: green"><?php echo e(Auth::user()->name); ?></span>
                                        </nav>
                                        <nav style="margin: 5px 0px">
                                            ID : <span style="color: black;"><?php echo e(Auth::user()->studentID); ?></span>
                                        </nav>
                                        <nav id="depRes" style="margin: 5px 0px">
                                            DEPARTMENT : <?php echo e(Auth::user()->department); ?>                                        
					</nav>
                                        <nav style="margin: 10px 0px">
                                            <div class="row">
                                                <div class="col-md" style="margin: 5px 0px">
                                                    <button type = "button" class = "btn btn-secondary" style="width: 100%;border-radius: 20px" onclick="window.location.href = '<?php echo e(route('stage')); ?>'">Check Sit</button>
                                                </div>
                                                <div class="col-md" style="margin: 5px 0px">
                                                    <button type = "button" class = "btn btn-secondary" style="width: 100%;border-radius: 20px" onclick="window.location.href = '<?php echo e(route('history')); ?>'">History</button>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
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