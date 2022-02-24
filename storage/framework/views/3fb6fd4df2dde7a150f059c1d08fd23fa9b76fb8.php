<?php
    use App\Models\WebsiteSetting;
use App\Models\Theme;
        $websetting=WebsiteSetting::first();
        $themeSetting=Theme::get();
        $fixedPages = DB::table('fixedpage')->where('status','=',1)->limit(5)->latest('id')->get();
?>

<footer class=" footer bg-dark">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 col-12 position-relative p-3">
                <img src="<?php echo e($websetting->logowhite); ?>" class="footer-logo img-fluid " alt="">

                <div class="d-flex justify-content-center">
                    <div class="">
                        <div class="row text-center">
                            <?php if($themeSetting[0]->apps==1): ?>
                                <div class="d-flex justify-content-between">
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://apps.apple.com/us/developer/yah%C5%9Fi-medya/id1495158559?l=tr"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="<?php echo e(asset('icon/Iphone.png')); ?>"></a>
                                    </p>
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://play.google.com/store/apps/developer?id=Yah%C5%9Fi+Medya&hl=tr&gl=US"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="<?php echo e(asset('icon/Android.png')); ?>"></a>
                                    </p>
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://appgallery.huawei.com/app/C104177315"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="<?php echo e(asset('icon/Huawei.png')); ?>"></a>
                                    </p>
                                </div>
                            <?php endif; ?>
                            <?php if($themeSetting[0]->subscription==1): ?>
                                <div class="d-flex justify-content-center">
                                    <div class="col-md-3 text-center">
                                        <img src="<?php echo e(asset('image/aa.png')); ?>" width="100"
                                             data-original="<?php echo e(asset('image/aa.png')); ?>"
                                             class="footer-logo mt-4 img-fluid lazyload text-center " alt="">
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <img src="<?php echo e(asset('image/iha.png')); ?>" width="100"
                                             data-original="<?php echo e(asset('image/iha.png')); ?>"
                                             class="footer-logo mt-4 img-fluid lazyload text-center " alt="">
                                    </div>
                                    <p class="text-white mt-2">Gazetekale.com, Anadolu Ajansı ve İhlas Haber Ajansı
                                        abonesidir.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <ul class="list-unstyled">
                    <div class="footer-baslik"><h3>Kurumsal </h3></div>
                    <?php $__currentLoopData = $fixedPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pages): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('Open.fixedPage',$pages->id)); ?>"
                               style="max-height: 20px;color:white!important;"
                               class="footer-link"><?php echo e($pages->title); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></ul>
            </div>
            <div class="col-md-5 col-12">
                <div class="footer-baslik"><h3>Hakkımızda </h3></div>
                <p>
                    <?php echo e($websetting->about); ?>

                    <br>
                    Adres: <?php echo e($websetting->adress); ?>

                    <br>
                    E-Posta: <?php echo e($websetting->email); ?>

                    <br>
                    Telefon: <?php echo e($websetting->phone); ?>

                    <br>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center text-light py-3">© 2021 Copyright:
       <a href="https://yahsisoft.com/"> <img width="85" class="img-fluid lazyload d-inline-flex" data-src="<?php echo e(asset('image/yahsisoft.png')); ?>"></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script
        src="<?php echo e(asset('frontend/assets/node_modules/owl.carousel/dist/owl.carousel.min.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/assets/js/jquery.newsTicker.js')); ?>"></script>
    
    

    <script>
        new WOW().init();
    </script>
</footer>
<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/footer.blade.php ENDPATH**/ ?>