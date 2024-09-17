
<?php $__env->startSection('title'); ?>
    <title>Kcnews - Tin tức mới</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-6">
                            <div class="row gutter--15">
                                <?php $__currentLoopData = $f_f_e; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f_f_e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xs-6 col-xss-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="<?php echo e(route('bai-viet',['slug'=>$f_f_e->slug])); ?>" class="thumb"><img
                                                        src="public/uploads/tintuc/<?php echo e($f_f_e->hinhanh); ?>"alt="" ></a>

                                                <a href="<?php echo e(url('category/'.$f_f_e->tintucCategory->slug)); ?>" class="cat"><?php echo e($f_f_e->tintucCategory->title); ?></a>


                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $f_f_e->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <li><a href="#"><?php echo e($f_f_e->ngayduyet); ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$f_f_e->slug])); ?>"
                                                                class="btn-link"><?php echo e($f_f_e->title); ?></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php $__currentLoopData = $t_s_f; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t_s_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-larger">
                                            <div class="post--img">
                                                <a href="<?php echo e(route('bai-viet',['slug'=>$t_s_f->slug])); ?>" class="thumb"><img
                                                        src="public/uploads/tintuc/<?php echo e($t_s_f->hinhanh); ?>" style="height:200px" alt=""></a>

                                                <a href="<?php echo e(url('category/'.$f_f_e->tintucCategory->slug)); ?>"
                                                    class="cat"><?php echo e($t_s_f->tintucCategory->title); ?></a>

                                                <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $t_s_f->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="#"><?php echo e($t_s_f->ngayduyet); ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$t_s_f->slug])); ?>"
                                                                class="btn-link"><?php echo e($t_s_f->title); ?></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Post Item Start -->
                            <?php $__currentLoopData = $e_t_z; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e_t_z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="<?php echo e(route('bai-viet',['slug'=>$e_t_z->slug])); ?>" class="thumb"><img
                                                src="public/uploads/tintuc/<?php echo e($e_t_z->hinhanh); ?>" alt=""></a>

                                        <a href="<?php echo e(url('category/'.$e_t_z->tintucCategory->slug)); ?>" class="cat"><?php echo e($e_t_z->tintucCategory->title); ?></a>

                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map
                                            </p>

                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                                    data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($u->id == $e_t_z->tacgia): ?>
                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="#"><?php echo e($e_t_z->ngayduyet); ?></a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$e_t_z->slug])); ?>"
                                                        class="btn-link"><?php echo e($e_t_z->title); ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- World News Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Tin thế giới</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php $__currentLoopData = $the_gioi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$tg->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($tg->hinhanh); ?>"
                                                                alt=""></a>

                                                        <a href="<?php echo e(url('category/'.$tg->tintucCategory->slug)); ?>"
                                                            class="cat"><?php echo e($tg->tintucCategory->title); ?></a>


                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $tg->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($tg->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$tg->slug])); ?>"
                                                                        class="btn-link"><?php echo e($tg->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $the_gioi2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $the_gioi2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->

                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$the_gioi2->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($the_gioi2->hinhanh); ?>"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $the_gioi2->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($the_gioi2->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$the_gioi2->slug])); ?>"
                                                                        class="btn-link"><?php echo e($the_gioi2->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $the_gioi3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $the_gioi3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->

                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$the_gioi3->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($the_gioi3->hinhanh); ?>"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $the_gioi3->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($the_gioi3->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$the_gioi3->slug])); ?>"
                                                                        class="btn-link"><?php echo e($the_gioi3->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>

                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- World News End -->

                            <!-- Technology Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Công nghệ</h2>

                           
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $cong_nghe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cong_nghe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$cong_nghe->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($cong_nghe->hinhanh); ?>"
                                                                alt=""></a>
                                                        <a href="<?php echo e(url('category/'.$cong_nghe->tintucCategory->slug)); ?>"
                                                            class="cat"><?php echo e($cong_nghe->tintucCategory->title); ?></a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $cong_nghe->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($cong_nghe->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$cong_nghe->slug])); ?>"
                                                                        class="btn-link"><?php echo e($cong_nghe->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $cong_nghe2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cong_nghe2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$cong_nghe2->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($cong_nghe2->hinhanh); ?>"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $cong_nghe2->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($cong_nghe2->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$cong_nghe2->slug])); ?>"
                                                                        class="btn-link"><?php echo e($cong_nghe2->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>

                               
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Technology End -->

                            <!-- Ad Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Advertisement Start -->
                                <div class="ad--space">
                                    <a href="https://masterisehomes.com/the-rivus/?utm_source=adtima&utm_medium=impression&utm_campaign=rivus-adtima-impression-phase1-na-cpd-8B115F30-mastheadtoppc">
                                        <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/728X90_banner2.png" alt=""
                                            class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->
                            </div>
                            <!-- Ad End -->

                            <!-- Finance Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Giáo dục</h2>

                      
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <?php $__currentLoopData = $giao_duc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giao_duc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-md-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet',['slug'=>$giao_duc->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($giao_duc->hinhanh); ?>"
                                                                alt=""></a>
                                                        <a href="<?php echo e(url('properti/'.$giao_duc->tintucProperti->slug)); ?>"
                                                            class="cat"><?php echo e($giao_duc->tintucProperti->title); ?></a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-star-o"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $giao_duc->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($giao_duc->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$giao_duc->slug])); ?>"
                                                                        class="btn-link"><?php echo e($giao_duc->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>
                                                <?php $__currentLoopData = $giao_duc2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giao_duc2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="col-xs-6">
                                                        <!-- Post Item Start -->
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="<?php echo e(route('bai-viet',['slug'=>$giao_duc2->slug])); ?>" class="thumb"><img
                                                                        src="public/uploads/tintuc/<?php echo e($giao_duc2->hinhanh); ?>"
                                                                        alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($u->id == $giao_duc2->tacgia): ?>
                                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a href="#"><?php echo e($giao_duc2->ngayduyet); ?></a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a
                                                                                href="<?php echo e(route('bai-viet',['slug'=>$giao_duc2->slug])); ?>"
                                                                                class="btn-link"><?php echo e($giao_duc2->title); ?></a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Post Item End -->
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                    <li class="col-xs-12">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>

                                                    <?php $__currentLoopData = $giao_duc3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giao_duc3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="col-xs-6">
                                                        <!-- Post Item Start -->
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="<?php echo e(route('bai-viet',['slug'=>$giao_duc3->slug])); ?>" class="thumb"><img
                                                                        src="public/uploads/tintuc/<?php echo e($giao_duc3->hinhanh); ?>"
                                                                        alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($u->id == $giao_duc3->tacgia): ?>
                                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a href="#"><?php echo e($giao_duc3->ngayduyet); ?></a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a
                                                                                href="<?php echo e(route('bai-viet',['slug'=>$giao_duc3->slug])); ?>"
                                                                                class="btn-link"><?php echo e($giao_duc3->title); ?></a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Post Item End -->
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    </ul>

                                   
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Finance End -->

                            <!-- Politics Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Thể thao</h2>

                                
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php $__currentLoopData = $the_thao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thethao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($thethao->hinhanh); ?>"
                                                            alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$thethao->tintucProperti->slug)); ?>" class="cat"><?php echo e($thethao->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($u->id == $thethao->tacgia): ?>
                                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($thethao->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>"
                                                                    class="btn-link"><?php echo e($thethao->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $the_thao2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thethao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($thethao->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $thethao->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($thethao->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>"
                                                                    class="btn-link"><?php echo e($thethao->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $the_thao3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thethao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($thethao->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $thethao->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($thethao->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$thethao->slug])); ?>"
                                                                    class="btn-link"><?php echo e($thethao->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                              
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Politics End -->

                            <!-- Sports Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Khoa học</h2>

                          
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $khoa_hoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khoahoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$khoahoc->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($khoahoc->hinhanh); ?>"
                                                            alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$khoahoc->tintucProperti->slug)); ?>" class="cat"><?php echo e($khoahoc->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $khoahoc->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($khoahoc->ngayduyet); ?></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$khoahoc->slug])); ?>"
                                                                    class="btn-link"><?php echo e($khoahoc->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $khoa_hoc2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khoahoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$khoahoc->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($khoahoc->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $thethao->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($khoahoc->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$khoahoc->slug])); ?>"
                                                                    class="btn-link"><?php echo e($khoahoc->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Sports End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <?php echo $__env->make('frontend.manager.mainsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Main Sidebar End -->
            </div>

            <!-- Main Content Start -->
            <div class="main--content pd--30-0">
                <!-- Post Items Title Start -->
                <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">Audio &amp; Videos</h2>

                
                </div>
                <!-- Post Items Title End -->

                <!-- Post Items Start -->
                <div class="post--items post--items-4" data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                        <?php $__currentLoopData = $video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-md-8">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1 post--type-video post--title-large">
                                <div class="post--img">
                                    <a href="<?php echo e($video->video); ?>" class="thumb"><img
                                            src="public/uploads/tintuc/<?php echo e($video->hinhanh); ?>"
                                            alt=""></a>
                                    <a href="<?php echo e(url('properti/'.$video->tintucProperti->slug)); ?>" class="cat"><?php echo e($video->tintucProperti->title); ?></a>
                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                   
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $video->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="#"><?php echo e($video->ngayduyet); ?></a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$video->slug])); ?>"
                                                    class="btn-link"><?php echo e($video->title); ?></a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->

                            <!-- Divider Start -->
                            <hr class="divider hidden-md hidden-lg">
                            <!-- Divider End -->
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-md-4">
                            <ul class="nav">
                                <?php $__currentLoopData = $video2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a href="<?php echo e($video->video); ?>" class="thumb"><img
                                                    src="public/uploads/tintuc/<?php echo e($video->hinhanh); ?>"
                                                    alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($u->id == $video->tacgia): ?>
                                                        <li><a href="#"><?php echo e($u->name); ?></a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="#"><?php echo e($video->ngayduyet); ?></a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$video->slug])); ?>"
                                                            class="btn-link"><?php echo e($video->title); ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>

                    
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <!-- Advertisement Start -->
            <div class="ad--space pd--30-0">
                <a href="https://burine.vn/">
                    <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/970x90_banner_burine.png" alt="" class="center-block">
                </a>
            </div>
            <!-- Advertisement End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Health and fitness Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Đời sống</h2>

                                  
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $doi_song; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doisong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$doisong->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($doisong->hinhanh); ?>"
                                                            alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$doisong->tintucProperti->slug)); ?>" class="cat"><?php echo e($doisong->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($u->id == $doisong->tacgia): ?>
                                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($doisong->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$doisong->slug])); ?>"
                                                                    class="btn-link"><?php echo e($doisong->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $doi_song2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doisong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$doisong->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($doisong->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $doisong->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="#"><?php echo e($doisong->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$doisong->slug])); ?>"
                                                                class="btn-link"><?php echo e($doisong->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                   
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Health and fitness End -->

                            <!-- Lifestyle Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Pháp luật</h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php $__currentLoopData = $phap_luat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phapluat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($phapluat->hinhanh); ?>"
                                                            alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$phapluat->tintucProperti->slug)); ?>" class="cat"><?php echo e($phapluat->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $phapluat->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($phapluat->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>"
                                                                    class="btn-link"><?php echo e($phapluat->title); ?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $phap_luat2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phapluat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($phapluat->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $phapluat->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($phapluat->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>"
                                                                    class="btn-link"><?php echo e($phapluat->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php $__currentLoopData = $phap_luat3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phapluat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($phapluat->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $phapluat->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($phapluat->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$phapluat->slug])); ?>"
                                                                    class="btn-link"><?php echo e($phapluat->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Lifestyle End -->

                            <!-- Foods and Recipes Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Giải trí</h2>

                                  
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php $__currentLoopData = $giai_tri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giaitri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$giaitri->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($giaitri->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $giaitri->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($giaitri->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$giaitri->slug])); ?>"
                                                                    class="btn-link"><?php echo e($giaitri->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </ul>

                         
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Foods and Recipes End -->

                            <!-- Photo Gallery Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Kinh tế</h2>

                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-1" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php $__currentLoopData = $kinh_te; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kinhte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-md-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1 post--title-large">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$kinhte->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($kinhte->hinhanh); ?>"
                                                            alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$kinhte->tintucProperti->slug)); ?>" class="cat"><?php echo e($kinhte->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $kinhte->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($kinhte->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title text-xxs-ellipsis">
                                                            <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$kinhte->slug])); ?>"
                                                                    class="btn-link"><?php echo e($kinhte->title); ?></a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $kinh_te2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kinhte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$kinhte->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($kinhte->hinhanh); ?>"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $kinhte->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($kinhte->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h2 class="h4"><a href="<?php echo e(route('bai-viet',['slug'=>$kinhte->slug])); ?>"
                                                                class="btn-link"><?php echo e($kinhte->title); ?></a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                    </ul>

                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Photo Gallery End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <?php echo $__env->make('frontend.manager.binhchon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/index.blade.php ENDPATH**/ ?>