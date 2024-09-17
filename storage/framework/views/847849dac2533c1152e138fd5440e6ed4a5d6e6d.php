
<?php $__env->startSection('title'); ?>
<title>Kcnew - Thêm danh mục</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
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
                            <h3 class="card-title">Thêm danh mục</h3>
                        </div>
                      
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="<?php echo e(route('danhmuc.store')); ?>">
                          <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control" id="title" name="title" 
                                      placeholder="Nhập tên danh mục" onkeyup="ChangeToSlug();">
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col">
                                      <label for="exampleInputPassword1">Slug</label>
                                      <input type="text" class="form-control" id="slug" name="slug"
                                          placeholder="slug">
                                    </div>
                                    <div class="col">
                                      <label for="examleInput">Chủ biên</label>
                                        <select name="chubien" id="" class="form-control">
                                            <option  selected>-- Chọn người duyệt bài -- </option>
                                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
                                    </div>
                                  </div>
                                    
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                              <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                              <button type="submit" name="submit" value="1" class="btn btn-outline-info"><i
                                      class="mdi mdi-save"></i> Lưu và tiếp tục thêm</button>
                          </div>
                        </form>
                    </div>
        </div>
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<script>
  function ChangeToSlug()
{
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/backend/pages/category/create.blade.php ENDPATH**/ ?>