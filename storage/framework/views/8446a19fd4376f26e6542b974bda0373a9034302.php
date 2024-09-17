
<?php $__env->startSection('title'); ?>
    <title>Kcnews - Thuộc tính danh mục</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thuộc tính danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thuộc tính danh mục</li>
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
                <div class="card-header">
                    <a href="<?php echo e(route('thuoctinhdanhmuc.create')); ?>" class="btn btn-success">Thêm thuộc tính danh mục mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên Thuộc tính</th>
                                <th>Danh mục</th>
                                <th>Số lượng bài viết</th>


                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $properti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($properti->firstItem() + $loop -> index); ?></td>
                                    <td><?php echo e($pro->title); ?></td>
                                    
                                    <td>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($cat->id == $pro->id_category): ?>
                                                <?php echo e($cat->title); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($pro->propertiTintuc->count()); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            
                                            <a href="<?php echo e(route('thuoctinhdanhmuc.edit', ['thuoctinhdanhmuc' => $pro->id])); ?>" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="<?php echo e(route('thuoctinhdanhmuc.destroy', ['thuoctinhdanhmuc'=>$pro->id])); ?>" id="form-xoa" class="form-xoa" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger xoa" id="xoa"><i
                                                    class="fa fa-trash"
                                                   ></i></button></form>
                                    </td>
                                </tr>
                                
                                    
                                   
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <?php echo e($properti->render()); ?>

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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/properticategory/index.blade.php ENDPATH**/ ?>