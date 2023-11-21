<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card p-4 my-4 mb-4 bg-white shadow rounded-lg">

        <?php echo $__env->make('profile.partials.index-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/profile/index.blade.php ENDPATH**/ ?>