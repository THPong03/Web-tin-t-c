<?php
    use App\Models\Binhluan;

    $xuhuong = DB::table('tintucs')->orderBy('created_at','ASC')->take(4)->get();
    $binhluan = DB::table('binhluans')->orderBy('created_at','DESC')->take(5)->get();
?>

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
                    <p>Đăng ký bản tin của chúng tôi để nhận tin tức mới nhất, tin tức phổ biến và cập nhật độc quyền.</p>
                </div>

                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                    <div class="input-group">
                        <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
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
                                    <a href="#" class="thumb"><img src="public/uploads/tintuc/<?php echo e($xuhuong->hinhanh); ?>" alt=""></a>

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
                                            <h3 class="h4"><a href="#" class="btn-link"><?php echo e($xuhuong->title); ?></a></h3>
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
                        <h3 class="h4">Theo bạn thì giải vô địch bóng đá nào hay nhất từ ​​trước đến nay?</h3>
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
                        <h3 class="h4">Bạn có nghĩ rằng chi phí gửi tiền đến điện thoại di động nên giảm?</h3>
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
                            <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/150x150_banner_baoin.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="https://baomoi.com/chu-tich-ho-chi-minh/top/114.epi">
                            <img src="<?php echo e(url('public/frontend')); ?>/img/ads-img/150x150_banner_hcm_02-min.png" alt="">
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
                        <?php $__currentLoopData = $binhluan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                            <li><span> by <?php echo e($binhluan->commentUser->name); ?></span></li>
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

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_editors_choice_widget">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_editors_choice_widget">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1" data-ajax-content="outer">
                <!-- Post Items Start -->
                <div class="post--items post--items-3">
                    <ul class="nav" data-ajax-content="inner">
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/editors-choice-01.jpg" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Ninurta</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </li>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/editors-choice-02.jpg" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Orcus</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </li>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/editors-choice-03.jpg" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Rahab</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </li>
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/editors-choice-04.jpg" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Tannin</a></li>
                                            <li><a href="#">16 April 2017</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </li>
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
    </div>
</div><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/frontend/manager/sibar.blade.php ENDPATH**/ ?>