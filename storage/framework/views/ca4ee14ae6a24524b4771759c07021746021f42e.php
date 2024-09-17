
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

                                <th>Người đăng</th>
                                <th>Bình luận</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                                



                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $binhluan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $binhluan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($binhluan->commentUser->name); ?></td>
                                    <td>
                                        <?php echo e($binhluan->noidung); ?>


                                    </td>
                                    <td>
                                        <?php if($binhluan->trangthai == 1): ?>
                                            <span class="badge bg-primary">Bình thường </span>
                                        <?php else: ?>
                                            <span class="badge bg-danger">Bị report</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">

                                            <a href="<?php echo e(route('trolai',['binhluan'=>$binhluan->id])); ?>" class="btn btn-success"><i
                                                    class="fa fa-check"></i></a>
                                            <form action="<?php echo e(route('binhluan.destroy', ['binhluan' => $binhluan->id])); ?>"
                                                id="form-xoa" class="form-xoa" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit"
                                                    onclick="return confirm('Bạn có chắc muốn xóa bình luận này không ?');"
                                                    class="btn btn-danger xoa" id="xoa"><i
                                                        class="fa fa-trash"></i></button>

                                            </form>
                                        </div>
                                    </td>


                                    

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer">
                    <a href="<?php echo e(route('binhluan.index')); ?>" type="submit" name="submit" class="btn btn-warning">Quay
                        lại</a>

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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/binhluan/show.blade.php ENDPATH**/ ?>