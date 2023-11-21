<?php $__env->startSection('content'); ?>
  <div class="container p-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('Register')); ?></div>

          <div class="card-body">
            <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

              <div class="mb-4 row">
                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus
                    placeholder="Inserisci nome utente">

                  <?php $__errorArgs = ['name'];
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
                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                    placeholder="Inserisci email">

                  <?php $__errorArgs = ['email'];
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
                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="password" required autocomplete="new-password" placeholder="Inserisci password">

                  <?php $__errorArgs = ['password'];
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
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Inserisci ancora la password">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="restaurant_name"
                  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nome Ristorante')); ?></label>

                <div class="col-md-6">
                  <input id="restaurant_name" type="text"
                    class="form-control <?php $__errorArgs = ['restaurant_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="restaurant_name"
                    value="<?php echo e(old('restaurant_name')); ?>" required autocomplete="restaurant_name" autofocus
                    placeholder="Inserisci nome ristorante">
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
                    name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address" autofocus
                    placeholder="Inserisci indirizzo ristorante">

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
                    name="p_iva" maxlength="11" value="<?php echo e(old('p_iva')); ?>" required autocomplete="p_iva" autofocus
                    placeholder="Inserisci la tua Partita Iva">

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
unset($__errorArgs, $__bag); ?>" id="banner"
                    name="banner" autofocus>
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
                <label for="category" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Categoria')); ?></label>
                <div class="col-md-6">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="cat-<?php echo e($category->id); ?>"
                        value="<?php echo e($category->id); ?>" name="categories[]"
                        <?php if(in_array($category->id, old('categories', []))): ?> checked <?php endif; ?>>
                      <label class="form-check-label" for="cat-<?php echo e($category->id); ?>"><?php echo e($category->label); ?></label>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__errorArgs = ['categories'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger">
                      <strong><?php echo e($message); ?></strong>
                    </p>
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

            
            <div class="d-flex align-items-center justify-content-end">
              <a href="<?php echo e(URL::previous()); ?>" class="btn btn-sm btn-secondary">Torna indietro</a>
            </div>
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

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/auth/register.blade.php ENDPATH**/ ?>