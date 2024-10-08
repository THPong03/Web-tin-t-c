
<?php $__env->startSection('title'); ?>
    <title>Kcnew - <?php echo e($tin->title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
                <li><a href="travel.html" class="btn-link"><?php echo e($tin->tintucCategory->title); ?></a></li>
                <li class="active"><span><?php echo e($tin->title); ?></span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Post Item Start -->
                        <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--img">
                                <a href="#" class="thumb"><img src="public/uploads/tintuc/<?php echo e($tin->hinhanh); ?>"
                                        alt=""></a>
                                <?php if(Auth::check()): ?>
                                    <form action="<?php echo e(route('like')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input hidden  type="text" name="tin" value="<?php echo e($tin->id); ?>">
                                        <input hidden type="text" name="user" value="<?php echo e(Auth::user()->id); ?>">
                                        <?php if(isset($likes)): ?>
                                            <button type="submit" class="icon"><i class="fa fa-heart-o"></i></a>
                                            <?php else: ?>
                                                <button type="submit" class="icon"><i class="fa fa-heartbeat"
                                                        aria-hidden="true"></i></a>
                                        <?php endif; ?>
                                    </form>
                                <?php else: ?>
                                    <a href="#" class="icon"><i class="fa fa-heartbeat"
                                            aria-hidden="true"></i></a>
                                <?php endif; ?>






                            </div>

                            <div class="post--cats">
                                <ul class="nav">
                                    <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                    <?php
                                        $tags = $tin->tag;
                                        $tags = explode(',', $tags);
                                    ?>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(url('tag/'.$tin->tag)); ?>"><?php echo e($tag); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                            </div>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($u->id == $tin->tacgia): ?>
                                            <li><a href="#"><?php echo e($u->name); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="#"><?php echo e($tin->ngayduyet); ?></a></li>
                                    <li><span><i class="fa fm fa-eye"></i><?php echo e($tin->luotxem); ?></span></li>
                                    <li><a href="#"><i class="fa fm fa-comments-o"></i><?php echo e($tin->tintucComment->count()); ?></a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4"><?php echo e($tin->title); ?></h2>
                                </div>
                            </div>

                            <div class="post--content">
                                <p><?php echo $tin->noidung; ?></p>
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Advertisement Start -->
                        <div class="ad--space pd--20-0-40">
                            <a
                                href="https://masterisehomes.com/the-rivus/?utm_source=adtima&utm_medium=impression&utm_campaign=rivus-adtima-impression-phase1-na-cpd-8B115F30-mastheadtoppc">
                                <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/728X90_banner2.png" alt=""
                                    class="center-block">
                            </a>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Tags Start -->
                        <div class="post--tags">
                            <ul class="nav">
                                <li><span><i class="fa fa-tags"></i></span></li>

                                <?php
                                    $tags = $tin->tag;
                                    $tags = explode(',', $tags);
                                ?>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('tag/'.$tin->tag)); ?>"><?php echo e($tag); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                        <!-- Post Tags End -->

                        <!-- Post Social Start -->
                        <div class="post--social pbottom--30">
                            <span class="title"><i class="fa fa-share-alt"></i></span>

                            <!-- Social Widget Start -->
                            <div class="social--widget style--4">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Post Social End -->

                        <!-- Post Author Info Start -->

                        <!-- Post Author Info End -->

                        <!-- Post Nav Start -->
                        <div class="post--nav">
                            <ul class="nav row">
                                <?php $__currentLoopData = $ketiep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ketiep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="col-xs-6 ptop--30 pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item">
                                            <div class="post--img">
                                                <a href="<?php echo e(route('bai-viet',['slug'=>$ketiep->slug])); ?>" class="thumb"><img
                                                        src="public/uploads/tintuc/<?php echo e($ketiep->hinhanh); ?>" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($u->id == $ketiep->tacgia): ?>
                                                                <li><a href="#"><?php echo e($u->name); ?></a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="#"><?php echo e($ketiep->ngayduyet); ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a
                                                                href="<?php echo e(route('bai-viet',['slug'=>$ketiep->slug])); ?>"
                                                                class="btn-link"><?php echo e($ketiep->title); ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!-- Post Nav End -->

                        <!-- Post Related Start -->
                        <div class="post--related ptop--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Có thể bạn cũng thích</h2>

                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    <?php $__currentLoopData = $like; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="col-sm-6 pbottom--30">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php echo e(route('bai-viet',['slug'=>$li->slug])); ?>" class="thumb"><img
                                                            src="public/uploads/tintuc/<?php echo e($li->hinhanh); ?>" alt=""></a>
                                                    <a href="<?php echo e(url('properti/'.$li->tintucProperti->slug)); ?>"
                                                        class="cat"><?php echo e($li->tintucProperti->title); ?></a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($u->id == $ketiep->tacgia): ?>
                                                                    <li><a href="#"><?php echo e($u->name); ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="#"><?php echo e($li->ngayduyet); ?></a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a
                                                                    href="<?php echo e(route('bai-viet',['slug'=>$li->slug])); ?>"
                                                                    class="btn-link"><?php echo e($li->title); ?></a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p><?php echo e($li->tomtat); ?>}}</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="#">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Post Related End -->

                        <!-- Comment List Start -->
                        <div class="comment--list pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4"><?php echo e($tin->tintucComment->count()); ?> bình luận</h2>

                                <i class="icon fa fa-comments-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <ul class="comment--items nav">
                                <?php if(isset($checkbinhluan)): ?>
                                    <?php $__currentLoopData = $binhluan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Comment Item Start -->
                                            <div class="comment--item clearfix">
                                                <div class="comment--img float--left">
                                                    <img src="<?php echo e(url('public/frontned')); ?>/img/news-single-img/comment-avatar-02.jpg" alt="">
                                                </div>

                                                <div class="comment--info">
                                                    <div class="comment--header clearfix">
                                                        <p class="name"><?php echo e($binhluan->commentUser->name); ?></p>
                                                        <p class="date"><?php echo e($binhluan->ngaydang); ?></p>

                                                        
                                                        <a href="<?php echo e(url('report'.$binhluan->id)); ?>" class="reply"><i class="fa fa-flag"></i></a>
                                                    </div>

                                                    <div class="comment--content">
                                                        <p><?php echo e($binhluan->noidung); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Comment Item End -->
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <li>
                                        <!-- Comment Item Start -->
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left">
                                                <img src="img/news-single-img/comment-avatar-02.jpg" alt="">
                                            </div>

                                            <div class="comment--info">
                                                <div class="comment--content">
                                                    <p>Chưa có bình luận nào</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Comment Item End -->
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- Comment List End -->

                        <!-- Comment Form Start -->
                        <div class="comment--form pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4">Viết bình luận</h2>

                                <i class="icon fa fa-pencil-square-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <div class="comment-respond">
                                <?php if(Auth::check()): ?>
                                    <form method="POST"
                                        action="<?php echo e(route('binhluan', ['tin' => $tin->id, 'user' => Auth::user()->id])); ?>"
                                        data-form="validate">
                                        <?php echo csrf_field(); ?>
                                        <p>Đừng lo ! Địa chỉ email của bạn sẽ không được công bố (*).</p>

                                        <div class="row">
                                            <div class="col">
                                                <label>
                                                    <span>Comment *</span>
                                                    <textarea name="comment" id="comment" class="form-control" required></textarea>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" id='binhluan'>Đăng</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <form action="" data-form="validate">
                                        <p>Đừng lo ! Địa chỉ email của bạn sẽ không được công bố (*).</p>

                                        <div class="row">
                                            <div class="col">
                                                <label>
                                                    <span>Comment *</span>
                                                    <textarea name="comment" id="comment" class="form-control" required></textarea>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Đăng</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Comment Form End -->
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
                                    <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/300x250_banner_mwc2.jpg" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Kết nối với chúng tôi</h2>
                                <i class="icon fa fa-share-alt"></i>
                            </div>

                            <!-- Social Widget Start -->
                            <div class="social--widget style--1">
                                <ul class="nav">
                                    <li class="facebook">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                            <span class="count">521</span>
                                            <span class="title">Likes</span>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-twitter"></i></span>
                                            <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-google-plus"></i></span>
                                            <span class="count">596282</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="rss">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-rss"></i></span>
                                            <span class="count">521</span>
                                            <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                    <li class="vimeo">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-vimeo"></i></span>
                                            <span class="count">3297</span>
                                            <span class="title">Followers</span>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                            <span class="count">596282</span>
                                            <span class="title">Subscriber</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">NHẬN TIN TỨC MỚI</h2>
                                <i class="icon fa fa-envelope-open-o"></i>
                            </div>

                            <!-- Subscribe Widget Start -->
                            <div class="subscribe--widget">
                                <div class="content">
                                    <p>Đăng ký bản tin của chúng tôi để nhận tin tức mới nhất, tin tức phổ biến và cập nhật
                                        độc quyền.</p>
                                </div>

                                <form
                                    action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                                    method="post" name="mc-embedded-subscribe-form" target="_blank"
                                    data-form="mailchimpAjax">
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" placeholder="E-mail address"
                                            class="form-control" autocomplete="off" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-default active"><i
                                                    class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>

                                    <div class="status"></div>
                                </form>
                            </div>
                            <!-- Subscribe Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Tin tức nổi bật</h2>
                                <i class="icon fa fa-newspaper-o"></i>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-1">
                                <div class="list--widget-nav" data-ajax="tab">
                                    <ul class="nav nav-justified">
                                        <li>
                                            <a href="#" data-ajax-action="load_widget_hot_news">Tin nóng</a>
                                        </li>
                                        <li class="active">
                                            <a href="#" data-ajax-action="load_widget_trendy_news">Xu hướng</a>
                                        </li>
                                        <li>
                                            <a href="#" data-ajax-action="load_widget_most_watched">Xem nhiều nhất</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $xuhuong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xuhuong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet', ['slug' => $xuhuong->slug])); ?>" class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($xuhuong->hinhanh); ?>"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($u->id == $xuhuong->tacgia): ?>
                                                                        <li><a href="#"><?php echo e($u->name); ?></a>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <li><a href="#"><?php echo e($xuhuong->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php echo e(route('bai-viet', ['slug' => $xuhuong->slug])); ?>"
                                                                        class="btn-link"><?php echo e($xuhuong->title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Quảng cáo</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
                                    <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/300x250_banner_mwc.jpg" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">BÌNH CHỌN</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Poll Widget Start -->
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title">
                                        <h3 class="h4">Theo bạn thì giải vô địch bóng đá nào hay nhất từ
                                            ​​trước đến nay?</h3>
                                    </li>

                                    <li class="options">
                                        <form action="#">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-1">
                                                    <span>Brazil 2014</span>
                                                </label>

                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-2">
                                                    <span>South Africa 2010</span>
                                                </label>

                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="option-2">
                                                    <span>Germany 2006</span>
                                                </label>

                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Poll Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Bình chọn</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Poll Widget Start -->
                            <div class="poll--widget" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li class="title">
                                        <h3 class="h4">Bạn có nghĩ rằng chi phí gửi tiền đến điện thoại di động
                                            nên giảm?</h3>
                                    </li>

                                    <li class="options">
                                        <form action="#">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>Yes</span>
                                                </label>

                                                <p>65%<span style="width: 65%;"></span></p>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>No</span>
                                                </label>

                                                <p>28%<span style="width: 28%;"></span></p>
                                            </div>

                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="option-1">
                                                    <span>Average</span>
                                                </label>

                                                <p>07%<span style="width: 07%;"></span></p>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Vote Now</button>
                                        </form>
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Poll Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="https://docbao.qdnd.vn/readding">
                                            <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/150x150_banner_baoin.jpg"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="col-sm-6">
                                        <a href="https://baomoi.com/chu-tich-ho-chi-minh/top/114.epi">
                                            <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/150x150_banner_hcm_02-min.png"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Ý kiến người đọc</h2>

                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-2" data-ajax-content="outer">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $binhluansibar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb">
                                                            <img src="img/widgets-img/readers-opinion-01.png" alt="">
                                                        </span>

                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4"><?php echo e($binhluan->noidung); ?></h3>
                                                            </div>

                                                            <ul class="nav meta">
                                                                <li><span> by <?php echo e($binhluan->commentUser->name); ?></span>
                                                                </li>
                                                                <li><span><?php echo e($binhluan->ngaydang); ?></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Lựa chọn của biên tập viên</h2>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-1" data-ajax-content="outer">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $luachon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $luachon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="<?php echo e(route('bai-viet', ['slug' => $luachon->slug])); ?>"
                                                            class="thumb"><img
                                                                src="public/uploads/tintuc/<?php echo e($luachon->hinhanh); ?>"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#"><?php echo e($luachon->tintucUser->name); ?></a></li>
                                                                <li><a href="#"><?php echo e($luachon->ngayduyet); ?></a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="<?php echo e(route('bai-viet', ['slug' => $luachon->slug])); ?>"
                                                                        class="btn-link"><?php echo e($luachon->title); ?></a>
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
                            <!-- List Widgets End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/frontend/pages/detail/index.blade.php ENDPATH**/ ?>