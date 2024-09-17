
<?php $__env->startSection('title'); ?>
    <title>Kcnews - Bình luận</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i><?php echo e(Session::get('success')); ?></h5>

                </div>
            <?php endif; ?>
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Bài viết</th>
                                <th>Số bình luận</th>
                               

                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($tin->tintucComment->count() > 0): ?>
                                <tr>
                                    
                                    <td><?php echo e($tin->title); ?></td>
                                    <td>
                                        <?php echo e($tin->tintucComment->count()); ?>


                                    </td>
                                    
                                    <td>
                                        <div class="btn-group">

                                            <a href="<?php echo e(route('binhluan.show', ['binhluan' => $tin->id])); ?>" type="button"
                                                class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                            
                                                    
                                    </td>
                                </tr>
                                <?php endif; ?>
                               
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        
                    </ul>
                </div>
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/binhluan/index.blade.php ENDPATH**/ ?>