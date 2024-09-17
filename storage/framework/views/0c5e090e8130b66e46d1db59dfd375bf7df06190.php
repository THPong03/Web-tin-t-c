<!DOCTYPE html>
<html dir="ltr" lang="en">
    <?php echo $__env->make('frontend.manager.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="boxed" data-bg-img="<?php echo e(url('public/frontend')); ?>/img/bg-pattern.png">

    <!-- Preloader Start -->
    
    <!-- Preloader End -->

    <div class="wrapper">
        
        <?php echo $__env->make('frontend.manager.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('main'); ?>

        <?php echo $__env->make('frontend.manager.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Wrapper End -->

        <?php echo $__env->make('frontend.manager.sticky', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

   <?php echo $__env->make('frontend.manager.link.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\KCNEW\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>