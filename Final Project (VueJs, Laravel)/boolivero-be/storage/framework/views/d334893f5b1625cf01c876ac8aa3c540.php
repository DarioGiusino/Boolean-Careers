<?php $__env->startSection('content'); ?>
  <section id="food-edit" class="container">
    
    <header>
      <h3 class="text-center my-4">Modifica '<?php echo e($food->label); ?>'</h3>
    </header>

    
    <?php echo $__env->make('includes.foods.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/admin/foods/edit.blade.php ENDPATH**/ ?>