<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('Register')); ?></div>

          <div class="card-body">
            <form class="mb-5" action="<?php echo e(route('admin.restaurants.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              

              <div class="mb-4 row">
                <label for="restaurant_name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nome Ristorante')); ?></label>

                <div class="col-md-6">
                  <input id="restaurant_name" type="text" class="form-control <?php $__errorArgs = ['restaurant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="restaurant_name" value="<?php echo e(old('restaurant_name')); ?>" required autocomplete="restaurant_name" autofocus placeholder="Inserisci nome ristorante">
                  <?php $__errorArgs = ['restaurant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="mb-4 row">
                <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Indirizzo')); ?></label>

                <div class="col-md-6">
                  <input id="address" type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address" autofocus>

                  <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="mb-4 row">
                <label for="p_iva" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Partita Iva')); ?></label>

                <div class="col-md-6">
                  <input id="p_iva" type="text" class="form-control <?php $__errorArgs = ['p_iva'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="p_iva" maxlength="11" value="<?php echo e(old('p_iva')); ?>" required autocomplete="p_iva" autofocus>

                  <?php $__errorArgs = ['p_iva'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="mb-4 row">
                <label for="banner" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Immagine')); ?></label>

                <div class="col-md-6">
                  <input type="file" class="form-control <?php $__errorArgs = ['banner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="banner" name="banner" autofocus>
                  <?php $__errorArgs = ['banner'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="col-2">
                <div class="mb-3 d-flex justify-content-between">
                  <label for="preview" class="form-label">Preview immagine</label>
                  <div class="preview-box  justify-content-center">
                    <img id="preview" class="img-fluid d-block"
                      src="<?php echo e($restaurant->banner ? asset("storage/$restaurant->banner") : 'https://marcolanci.it/utils/placeholder.jpg'); ?>"
                      alt="<?php echo e($restaurant->restaurant_name); ?>">
                  </div>
                </div>
              </div>

              <div class="mb-4 row">
                <label for="vote" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Voto')); ?></label>

                <div class="col-md-6">
                  <input id="vote" type="number" min= "1" max = "5" step="0.1" class="form-control <?php $__errorArgs = ['vote'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="vote" value="<?php echo e(old('vote')); ?>" required autocomplete="vote" autofocus>

                  <?php $__errorArgs = ['vote'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

            

              <div class="mb-4 row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script>
    // get elements from dom
    const imageInput = document.getElementById("banner");
    const previewField = document.getElementById("preview");

    // fallback image
    const placeholder = "https://marcolanci.it/utils/placeholder.jpg";

    // on imageInput(value) change
    imageInput.addEventListener("change", () => {
      // if a file is given
      if (imageInput.files && imageInput.files[0]) {
        // define a new file reader
        const reader = new FileReader();

        // transform the file in a correct url
        reader.readAsDataURL(imageInput.files[0]);

        // when ready
        reader.onload = (e) => {
          previewField.src = e.target.result;
        };
      }
      // else return the fallback image
      else previewField.src = placeholder;
    });
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/admin/restaurants/create.blade.php ENDPATH**/ ?>