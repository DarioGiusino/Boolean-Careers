<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            <?php echo e(__('Update Password')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600">
            <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

        </p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>" class="mt-6 space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="mb-2">
            <label for="current_password"><?php echo e(__('Current Password')); ?></label>
            <input class="mt-1 form-control" type="password" name="current_password" id="current_password" autocomplete="current-password">
            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback mt-2" role="alert">
                <strong><?php echo e($errors->updatePassword->get('current_password')); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-2">
            <label for="password"><?php echo e(__('New Password')); ?></label>
            <input class="mt-1 form-control" type="password" name="password" id="password" autocomplete="new-password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback mt-2" role="alert">
                <strong><?php echo e($errors->updatePassword->get('password')); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-2">

            <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?></label>
            <input class="mt-2 form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback mt-2" role="alert">
                <strong><?php echo e($errors->updatePassword->get('password_confirmation')); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>

            <?php if(session('status') === 'password-updated'): ?>
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='status' class=" fs-5 text-muted"><?php echo e(__('Saved.')); ?></p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\laravel\boolivero-be\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>