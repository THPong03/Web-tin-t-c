
<?php $__env->startSection('title'); ?>
    <title>Kcnews - Người dùng</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Người dùng</li>
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
                    <a href="<?php echo e(route('user.create')); ?>" class="btn btn-success">Thêm người dùng mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>vai trò</th>


                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->firstItem() + $loop -> index); ?></td>
                                    <td><?php echo e($us->name); ?></td>
                                    <td><?php echo e($us->email); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $us->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($role->name); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="<?php echo e(route('user.edit', ['user' => $us->id])); ?>" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <button data-url="<?php echo e(route('user.destroy', ['user' => $us->id])); ?>"
                                                type="button" class="btn btn-danger btn-xoa" id="xoa"><i
                                                    class="fa fa-trash" data-target="#delete"
                                                    data-toggle="modal"></i></button>
                                    </td>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <?php echo e($user->render()); ?>

            </div>
        </div>
        <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsbackend'); ?>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(".btn-xoa").click(function(e) {
            var url = $(this).attr('data-url');
            if (confirm('Bạn có chắc muốn xóa người dùng này không ?')) {
                $.ajax({
                    type: "delete",
                    url: url,
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>"
                    },
                    success: function(response) {
                        window.location.reload()
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            }

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/user/index.blade.php ENDPATH**/ ?>