
<?php $__env->startSection('title'); ?>
    <title>Kcnew - <?php echo e($title); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span><?php echo e($title); ?></span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
        

           
                
           

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                       
                               

                            <!-- Books and Magazine Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4"><?php echo e($tintuc->count()); ?> <?php echo e($title); ?> <?php echo e($s); ?></h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tintuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="<?php echo e(route('bai-viet',['slug'=>$tintuc->slug])); ?>" class="thumb"><img src="public/uploads/tintuc/<?php echo e($tintuc->hinhanh); ?>" alt=""></a>
                                                            <a href="<?php echo e(url('properti/'.$tintuc->tintucProperti->slug)); ?>" class="cat"><?php echo e($tintuc->tintucProperti->title); ?></a>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#"><?php echo e($tintuc->tintucUser->name); ?></a></li>
                                                                <li><a href="#"><?php echo e($tintuc->ngayduyet); ?></a></li>
                                                                <li><span><i class="fa fm fa-eye"></i><?php echo e($tintuc->luotxem); ?></span></li>
                                                            </ul>
                                                            

                                                            <div class="title">
                                                                <h2 class="h3" style="color:black"><a href="<?php echo e(route('bai-viet',['slug'=>$tintuc->slug])); ?>" class="btn-link"><?php echo e($tintuc->title); ?>.</a></h3>
                                                            </div>
                                                        </div>

                                                        <div class="post--content">
                                                            <p><?php echo e($tintuc->tomtat); ?>.</p>
                                                        </div>

                                                        <div class="post--action">
                                                            <a href="<?php echo e(route('bai-viet',['slug'=>$tintuc->slug])); ?>">Chi tiết.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                     
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </ul>

                                   
                                </div>
                                <!-- Post Items End --> 
                            </div>
                            <!-- Books and Magazine End -->

                            <!-- Photo Gallery Start -->
                         

                       
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
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/frontend/pages/loc/search.blade.php ENDPATH**/ ?>