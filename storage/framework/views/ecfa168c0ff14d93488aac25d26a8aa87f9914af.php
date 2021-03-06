<!-- Main sidebar -->
<?php
use App\Models\Comments;
use Carbon\Carbon;
$photo=DB::table('users')->where('id','=',Auth::user()->id)->get();
        $commentsBadge=count(Comments::where('status', 0)->get());
?>

<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="/<?php echo e($photo[0]->profile_photo_path); ?>" width="38"
                                         height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold"><?php echo e(Auth::user()->name); ?></div>
                        <div class="font-size-xs opacity-50">
                            <?php echo e(Auth::user()->email); ?>

                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item-header d-lg-none">
                <a href="<?php echo e(route('cacheClean')); ?>" class="badge bg-success ml-md-3 mr-md-auto ">??nbellek Temizle</a>
                </li>
                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#kategori" class="nav-link"><i class="icon-copy" id="kategori"></i>
                        <span>Kategoriler</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('categories')); ?>" class="nav-link active">Kategori</a></li>
                        <li class="nav-item"><a href="<?php echo e(route('subcategories')); ?>" class="nav-link">Alt Kategori</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#bolge" class="nav-link"><i class="icon-copy"></i> <span>B??lge Y??netimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('district')); ?>" class="nav-link active">B??lgeler</a></li>
                        <li class="nav-item"><a href="<?php echo e(route('subdistrict')); ?>" class="nav-link">Alt B??lgeler</a></li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#bolge" class="nav-link"><i class="icon-copy"></i> <span>Haberler</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('add.post')); ?>" class="nav-link active">Haber Ekle</a></li>
                        <li class="nav-item"><a href="<?php echo e(route('all.post')); ?>" class="nav-link">T??m Haberler</a></li>

                    </ul>
                </li>



                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>??ha Bot Ayar??</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('setting.settingindex')); ?>" class="nav-link "><i
                                    class="icon-list"></i> <span>Bot Ayarlar??</span></a></li>
                        <li class="nav-item"><a href="<?php echo e(route('addpage.iha')); ?>" class="nav-link
"><i
                                    class="icon-list"></i> <span>Haber Ekle</span></a></li>

                        

                    </ul>
                </li>


                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>AA Bot Ayar??</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('anadoluajans.settingindex')); ?>" class="nav-link "><i
                                    class="icon-list"></i> <span>Bot Ayarlar??</span></a></li>
                        <li class="nav-item"><a href="<?php echo e(route('anadoluajans.index')); ?>" class="nav-link
"><i
                                    class="icon-list"></i> <span>Haber Ekle</span></a></li>

                        

                    </ul>
                </li>


                <li class="nav-item nav-item-submenu">
                    <a href="#photogaleri" class="nav-link"><i class="icon-gear"></i> <span>Galeri</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('galeri.categories')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Foto Galeri Kategori</span></a></li>
                        <li class="nav-item"><a href="<?php echo e(route('photo.galery')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Foto Galeri</span></a></li>
                        

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>Reklam Y??netimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('list.add')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Reklam Alanlar??</span></a></li>
                        

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#ads" class="nav-link"><i class="icon-gear"></i> <span>K????e Yazarlar?? Y??netimi</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="<?php echo e(route('list.authorsposts')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>K????e Yaz??lar??</span></a></li>
                        <li class="nav-item"><a href="<?php echo e(route('list.authors')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Yazarlar</span></a></li>

                        

                    </ul>
                </li>





                <li class="nav-item">
                    <a href="<?php echo e(route('egazete.index')); ?>" class="nav-link">
                        <i class="icon-stack2"></i>
                        <span>E Gazete</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('comments.index')); ?>" class="nav-link">
                        <i class="icon-comment"></i>Yorumlar
                        <span class="badge badge-light ml-2"> <?php echo e($commentsBadge); ?></span>
                    </a>
                </li>  <li class="nav-item" >
                    <a href="<?php echo e(route('notification.index')); ?>" class="nav-link">
                        <i class="icon-bubble-notification"></i>
                        <span>Bildirim G??nder

                            </span>
                    </a>
                </li>




                <li class="nav-item nav-item-submenu">
                    <a href="#settings" class="nav-link"><i class="icon-user"></i> <span>Kullan??c?? ????lemleri</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="<?php echo e(route('user.index')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Kullan??c??lar</span></a></li>



                    </ul>
                </li>






                <li class="nav-item nav-item-submenu">
                    <a href="#settings" class="nav-link"><i class="icon-gear"></i> <span>Ayarlar</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="<?php echo e(route('social.setting')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Sosyal Medya Ayarlar??</span></a></li>
                        <li class="nav-item"><a href="<?php echo e(route('seo.setting')); ?>" class="nav-link">SEO Ayarlar??</a></li>
                        <li class="nav-item"><a href="<?php echo e(route('website.setting')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Genel Ayarlar</span></a></li>
<li class="nav-item"><a href="<?php echo e(route('theme.index')); ?>" class="nav-link active"><i
                                    class="icon-list"></i> <span>Tema Ayarlar??</span></a></li>
                    </ul>
                </li>


            </ul>


        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/admin/body/sidebar.blade.php ENDPATH**/ ?>