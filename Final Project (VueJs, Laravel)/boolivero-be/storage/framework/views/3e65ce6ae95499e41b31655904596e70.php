<?php $__env->startSection('content'); ?>
  <section id="food-create" class="container">
    
    <header>
      <h3 class="text-center my-4">Aggiungi nuovo piatto</h3>
    </header>

    
    <?php echo $__env->make('includes.foods.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/admin/foods/create.blade.php ENDPATH**/ ?>