
<?php $__env->startSection('title'); ?>
    <title>Kcnew - Chi tiết bài viết</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active">Chi tiết viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
                <span id="success">
                    

                </span>
            
            <?php if($errors->any()): ?>
                <div class="alert alert-warning alert-dismissible">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết viết</h3>
                </div>

                    <div class="card-body">
                        <img src="<?php echo e(URL::to('public/uploads/tintuc/'.$tin->hinhanh)); ?>" width="100%" height="450px" alt="">
                        <h4><?php echo e($tin->title); ?></h4>
                        <span><?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($tin->tacgia == $u->id): ?>
                            Tác giả: <?php echo e($u->name); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                        <br>
                        <span>Ngày gửi bài: <?php echo e($tin->ngayguibai); ?></span>
                        <div>
                            <p><?php echo $tin->noidung; ?></p>
                        </div>
                    </div>

            </div>
            <!-- /.card-body -->
            <?php if(auth()->user()->hasRole('Người duyệt bài')|| auth()->user()->hasRole('Chủ biên') ||auth()->user()->hasRole('Admin')): ?>
            <div class="card-footer">
                <button id="duyet" href="" onclick="return confirm('bạn có chắc duyệt bài viết này không?')" type="submit" name="submit" class="btn btn-primary">Duyệt</button>
                <a href="<?php echo e(url('tuchoi/'.$tin->id)); ?>" onclick="return confirm('bạn có chắc từ chối bài viết này không?')" type="submit" name="submit" class="btn btn-danger">Từ chối</a>
                <a href="<?php echo e(route('tintuc.index')); ?>" type="submit" name="submit" class="btn btn-warning">Quay lại</a>

            </div>
            <?php endif; ?>
            <?php if(auth()->user()->hasRole('Người viết bài') ): ?>
            <div class="card-footer">
                <a href="<?php echo e(route('tintuc.index')); ?>" type="submit" name="submit" class="btn btn-warning">Quay lại</a>

            </div>
            <?php endif; ?>
        </div>
        </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbackend'); ?>
    <script type="text/javascript">
        $("#duyet").click(function (e) { 
            var mabaiviet = $(this).attr('id');
            var _token  = $('input[name="_token"]').val();
           
            $.ajax({
                type: "POST",
                url: "<?php echo e(url('duyet/'.$tin->id)); ?>",
                data: {mabaiviet:mabaiviet ,_token:_token},
                
                success: function (data) {
                    $('#success').html(data);
                }
            });
            
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/tintuc/show.blade.php ENDPATH**/ ?>