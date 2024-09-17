
<?php $__env->startSection('title'); ?>
    <title>Kcnew - Chỉnh sửa bài viết</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active"> Chỉnh sửa bài viết </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i><?php echo e(Session::get('success')); ?></h5>

                </div>
            <?php endif; ?>
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
                    <h3 class="card-title"> Chỉnh sửa bài viết </h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST"  action="<?php echo e(route('tintuc.update',['tintuc'=>$tintuc->id])); ?>" enctype="multipart/form-data">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tên bài viết <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tên bài viết" value="<?php echo e($tintuc->title); ?>"
                                        onkeyup="ChangeToSlug();">
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">Slug <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" value="<?php echo e($tintuc->slug); ?>" id="slug"
                                        name="slug" placeholder="slug">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="examleInput">Tóm tắt (Ngắn) <span style="color: red"> *</span></label>
                                <textarea name="tomtat" class="form-control" style="weight:10px" required><?php echo e($tintuc->tomtat); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="examleInput" class="">Danh Mục <span style="color: red">
                                            *</span></label>
                                    <select name="category" id="danhmuc" class="form-control chosse danhmuc">
                                        <option value="0" selected>-- Chọn danh mục -- </option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cat->id); ?>"
                                                <?php $__currentLoopData = $properti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($tintuc->id_properticategory): ?>
                                                        <?php if($pro->id_category == $cat->id): ?>
                                                        selected
                                                        <?php endif; ?>
                                                    <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>
                                                <?php echo e($cat->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="examleInput" class="">Thuộc tính danh Mục <span
                                            style="color: red"> *</span></label>
                                    <select name="properticategory" id="thuoctinh" class="form-control thuoctinh">



                                    </select>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="examleInput">Thêm tag cho bài viết <span style="color: red"> *</span></label>
                                <input type="text" class="form-control" value="<?php echo e($tintuc->tag); ?>" name="tag" data-role="tagsinput">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <label for="examleInput">Thêm hình ảnh <span style="color: red"> *</span></label>
                                    <input type="file" name="hinhanh" class="form-control">
                                    <img src="<?php echo e(URL::to('public/uploads/tintuc/'.$tintuc->hinhanh)); ?>" width="100px" height="100px" alt="">
                                </div>
                                <hr>
                                <div class="col">
                                    <label for="examleInput">Thêm video(Không bắt buộc)</label>
                                    <input type="text" value="<?php echo e($tintuc->video); ?>" name="video" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="examleInput">Nội dung bài biết <span style="color: red"> *</span></label>
                            <textarea id="summernote1" name="noidung" class="form-control" required><?php echo e($tintuc->noidung); ?></textarea>

                        </div>
                        <input type="hidden" value="<?php echo e($tintuc->tacgia); ?>" name="tacgia">
                    </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>

            </div>
            </form>
        </div>
        </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<script>
    function ChangeToSlug() {
        var title, slug;

        //Lấy text từ thẻ input title 
        title = document.getElementById("title").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
<?php $__env->startSection('jsbackend'); ?>
    <script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $("#summernote1").summernote();
        });
    </script>


    <script type="text/javascript">
        $("#danhmuc").change(function(e) {
            var action = $(this).attr('id');
            var madm = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if (action == 'danhmuc') {
                result = 'thuoctinh';
            }
            $.ajax({
                type: "POST",
                url: "<?php echo e(url('/select-delivery')); ?>",
                data: {
                    action: action,
                    madm: madm,
                    _token: _token
                },

                success: function(data) {
                    $('#' + result).html(data);
                }
            });

        });
    </script>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/tintuc/edit.blade.php ENDPATH**/ ?>