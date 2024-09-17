<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('backend.manager.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <?php echo $__env->make('backend.manager.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
            <?php echo $__env->make('backend.manager.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content-wrapper">
            <?php echo $__env->yieldContent('main'); ?>
            </div>
            <?php echo $__env->make('backend.manager.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
        <?php echo $__env->make('backend.manager.link.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/layouts/app.blade.php ENDPATH**/ ?>