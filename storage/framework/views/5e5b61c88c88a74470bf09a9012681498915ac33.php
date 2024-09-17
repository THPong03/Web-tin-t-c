
<?php $__env->startSection('title'); ?>
    <title>
        Kcnews - Bài viết</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
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
            <?php if(auth()->user()->hasRole('Người viết bài')): ?>
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('tintuc.create')); ?>" class="btn btn-success">Thêm bài viết mới mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tag</th>
                                <th>Bình luận</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $nguoivietbai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($nguoivietbai->firstItem() + $loop -> index); ?></td>
                                    <td><?php echo e($tin->title); ?></td>
                                    
                                   
                                    <td>
                                        <p>
                                            <?php
                                                $tags = $tin->tag;
                                                $tags = explode(',', $tags);
                                            ?>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge bg-primary"><?php echo e($tag); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    </td>
                                    <td><?php echo e($tin->tintucComment->count()); ?></td>
                                    <td>
                                        <?php if($tin->trangthai == 0): ?>
                                            <span class="badge bg-danger">Chờ duyệt</span>
                                        <?php elseif($tin->trangthai == 1): ?>
                                            <span class="badge bg-primary">Đã được duyệt</span>
                                        <?php else: ?>
                                        <span class="badge bg-warning">Cập nhật</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('tintuc.show', ['tintuc' => $tin->id])); ?>" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="<?php echo e(route('tintuc.edit', ['tintuc' => $tin->id])); ?>" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <button href="" type="button" class="btn btn-danger xoa" id="xoa"><i
                                                    class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <form action="<?php echo e(route('tintuc.destroy', ['tintuc' => $tin->id])); ?>" id="form-xoa"
                                    class="form-xoa" method="POST">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button hidden type="submit"></button>

                                </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <?php echo e($nguoivietbai->render()); ?>

                    </ul>
                </div>
            </div>
            <!-- /.card -->
            <?php endif; ?>
            <?php if(auth()->user()->hasRole('Người duyệt bài')): ?>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Ngày gửi bài</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($nguoiduyetbai)): ?>
                            <?php $__currentLoopData = $nguoiduyetbai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($nguoiduyetbai->firstItem() + $loop -> index); ?></td>
                                    <td><?php echo e($tin->title); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($u->id == $tin->tacgia): ?>
                                                <?php echo e($u->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($tin->ngayguibai); ?></td>
                                   
                                    <td>
                                        <?php if($tin->trangthai == 0): ?>
                                        <span class="badge bg-danger">Chờ duyệt</span>
                                    <?php elseif($tin->trangthai == 1): ?>
                                        <span class="badge bg-primary">Đã được duyệt</span>
                                    <?php else: ?>
                                    <span class="badge bg-warning">Cập nhật</span>
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('tintuc.show', ['tintuc' => $tin->id])); ?>" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            
                                    </td>
                                </tr>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                   
                                </td>
                                <td></td>
                               
                                <td>
                                   
                                </td>
                                <td>
                                    
                                        
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <?php echo e($nguoiduyetbai->render()); ?>

                    </ul>
                </div>
            </div>

            
            <!-- /.card -->
            <?php endif; ?>

            <?php if(auth()->user()->hasRole('Chủ biên') || auth()->user()->hasRole('Admin')): ?>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Chủ biên</th>
                                <th>Ngày gửi bài</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $tintucs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($tintucs->firstItem() + $loop -> index); ?></td>
                                    <td><?php echo e($tin->title); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($u->id == $tin->tacgia): ?>
                                                <?php echo e($u->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    
                                    <td>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($tin->tintucCategory->chubien == $u->id): ?>
                                                <?php echo e($u->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($tin->ngayguibai); ?></td>
                                   
                                    <td>
                                        <?php if($tin->trangthai == 0): ?>
                                        <span class="badge bg-danger">Chờ duyệt</span>
                                    <?php elseif($tin->trangthai == 1): ?>
                                        <span class="badge bg-primary">Đã được duyệt</span>
                                    <?php else: ?>
                                    <span class="badge bg-warning">Cập nhật</span>
                                    <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo e(route('tintuc.show', ['tintuc' => $tin->id])); ?>" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            
                                    </td>
                                </tr>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <?php echo e($tintucs ->render()); ?>

                    </ul>
                </div>
            </div>

            
            <!-- /.card -->
            <?php endif; ?>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsbackend'); ?>
    <script>
        $(".xoa").click(function(e) {
            if (confirm('Bạn có chắc muốn xóa danh mục này không ?')) {
                $(".form-xoa").submit();
            }
        });
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/tintuc/index.blade.php ENDPATH**/ ?>