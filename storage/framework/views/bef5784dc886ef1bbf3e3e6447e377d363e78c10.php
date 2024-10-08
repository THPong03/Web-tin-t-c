 
 <?php $__env->startSection('title'); ?>
  <title>Kcnews - Dashboard</title>
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('main'); ?>
 
     <!-- Content Wrapper. Contains page content -->
    
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1 class="m-0">Dashboard </h1>
                     </div><!-- /.col -->
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active">Dashboard </li>
                         </ol>
                     </div><!-- /.col -->
                 </div><!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
             <div class="container-fluid">
                 <!-- Info boxes -->
                 <?php if(auth()->user()->hasRole('Chủ biên')|auth()->user()->hasRole('Admin')): ?>
                 <div class="row">
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box">
                             <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Số lượng đang truy cập</span>
                                 <span class="info-box-number">
                                     10
                                     <small>%</small>
                                 </span>
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Likes</span>
                                 <span class="info-box-number"><?php echo e($like->count()); ?></span>
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->

                     <!-- fix for small devices only -->
                     <div class="clearfix hidden-md-up"></div>

                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Số lượng bài viết</span>
                                 <span class="info-box-number"><?php echo e($tintuc->count()); ?></span>
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Người dùng hệ thống</span>
                                 <span class="info-box-number"><?php echo e($user->count()); ?></span>
                             </div>
                             <!-- /.info-box-content -->
                         </div>
                         <!-- /.info-box -->
                     </div>
                     <!-- /.col -->
                 </div>
                
                 <?php endif; ?>

                 
             </div>
             <!--/. container-fluid -->
         </section>
         <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/dashboard.blade.php ENDPATH**/ ?>