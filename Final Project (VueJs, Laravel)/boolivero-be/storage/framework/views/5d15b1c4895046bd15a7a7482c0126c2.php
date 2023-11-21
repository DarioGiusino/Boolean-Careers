<?php $__env->startSection('content'); ?>
  <div class="container">
    <section>
      <header>
        <h2 class="text-lg font-medium text-gray-900 my-4">Profilo Ristorante</h2>
      </header>
      <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        <div class="mb-2">
          <label for="name"><?php echo e(__('Name')); ?></label>
          <input disabled class="form-control" type="text" name="name" id="name" autocomplete="name"
            value="<?php echo e(old('name', $restaurant->restaurant_name)); ?>" required autofocus>
        </div>
        <div class="mb-2">
          <label for="email"><?php echo e(__('Indirizzo')); ?></label>

          <input disabled class="form-control" value="<?php echo e(old('email', $restaurant->address)); ?>" required
            autocomplete="username" />
          <div class="mb-2">
            <label for="email"><?php echo e(__('P.IVA')); ?></label>

            <input disabled class="form-control" value="<?php echo e(old('email', $restaurant->p_iva)); ?>" required
              autocomplete="username" />
            <div class="mb-2">
              <label for="email"><?php echo e(__('Voto')); ?></label>

              <input disabled class="form-control" value="<?php echo e(old('email', $restaurant->vote)); ?>" required
                autocomplete="username" />
              <div class="mb-2">
                <label for="email"><?php echo e(__('Immagine')); ?></label>
                <div class="gallery">
                  <img class="img-fluid" src="<?php echo e($restaurant->banner); ?>" alt="<?php echo e($restaurant->restaurant_name); ?>">
                </div>
              </div>


    </section>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/profile/restaurant/index.blade.php ENDPATH**/ ?>