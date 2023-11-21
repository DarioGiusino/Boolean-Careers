<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Informazioni Profilo</h2>
    </header>
        <div class="mb-2">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input disabled class="form-control" type="text" name="name" id="name" autocomplete="name" value="<?php echo e(old('name', $user->name)); ?>" required autofocus>
        </div>

        <div class="mb-2">
            <label for="email"><?php echo e(__('Email')); ?></label>

            <input disabled id="email" name="email" type="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>" required autocomplete="username" />
</section>
<?php /**PATH C:\laravel\boolivero-be\resources\views/profile/partials/index-profile-information-form.blade.php ENDPATH**/ ?>