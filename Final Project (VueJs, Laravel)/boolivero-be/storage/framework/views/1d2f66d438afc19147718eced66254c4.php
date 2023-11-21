<?php if($food->exists): ?>
  <form class="mb-5" action="<?php echo e(route('admin.foods.update', $food->id)); ?>" method="post" enctype="multipart/form-data">
    
    <?php echo method_field('PUT'); ?>
  <?php else: ?>
    <form class="mb-5" action="<?php echo e(route('admin.foods.store')); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>

<?php echo csrf_field(); ?>

<div class="row">
  
  <div class="col-6">
    <div class="mb-3">
      <label for="label" class="form-label">Nome</label>
      <input type="text" class="form-control <?php $__errorArgs = ['label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="label" name="label"
        value="<?php echo e(old('label', $food->label)); ?>" required maxlength="40">
      <?php $__errorArgs = ['label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
      <?php else: ?>
        <div class="form-text">Aggiungi un nome al piatto</div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>

  
  <div class="col-6">
    <div class="mb-3">
      <label for="image" class="form-label">Immagine</label>
      <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="image">
      <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
      <?php else: ?>
        <div class="form-text">Carica una foto del piatto</div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>

  
  <div class="col-4 col-lg-2">
    
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo in euro</label>
      <input type="number" step="0.01" min="0.01" max="9999.99"
        value="<?php echo e(old('price', $food->price ?? '0.01')); ?>" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
        id="price" name="price">
      <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
      <?php else: ?>
        <div class="form-text">Prezzo del piatto</div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    
    <div class="mb-3">
      <label for="type" class="form-label">Tipologia portata</label>
      <select class="form-select <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="type" name="type">
        <option value="">...</option>
        <option <?php if(old('type', $food->type) === 'Antipasto'): ?> selected <?php endif; ?> value="Antipasto">Antipasto</option>
        <option <?php if(old('type', $food->type) === 'Primo piatto'): ?> selected <?php endif; ?> value="Primo piatto">Primo piatto</option>
        <option <?php if(old('type', $food->type) === 'Secondo piatto'): ?> selected <?php endif; ?> value="Secondo piatto">Secondo piatto</option>
        <option <?php if(old('type', $food->type) === 'Dessert'): ?> selected <?php endif; ?> value="Dessert">Dessert</option>
        <option <?php if(old('type', $food->type) === 'Bevanda'): ?> selected <?php endif; ?> value="Bevanda">Bevanda</option>
      </select>
      <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>

  
  <div class="col-8 col-lg-10">
    <div class="mb-3">
      <label for="preview" class="form-label">Preview immagine</label>
      <div class="preview-box d-flex justify-content-center">
        <img id="preview" class="img-fluid d-block"
          src="<?php echo e($food->image ?? 'https://marcolanci.it/utils/placeholder.jpg'); ?>" alt="<?php echo e($food->label); ?>">
      </div>
    </div>
  </div>

  
  <div class="col-12">
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" id="description"
        rows="5" required><?php echo e(old('description', $food->description)); ?></textarea>
      <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </div>
</div>

<hr>


<div class="d-flex justify-content-between align-items-center">
  
  <div class="form-check form-switch p-0 m-0 pt-2 text-end">
    <input class="form-check-input float-none m-0 mt-1" type="checkbox" id="is_published" name="is_published"
      <?php if(old('is_published', $food->is_published)): ?> checked <?php endif; ?> role="switch">
    <label id="toggle-label" class="form-check-label text-<?php echo e($food->is_published ? 'success' : 'danger'); ?>">
      <i class="fa-solid fa-earth-europe"></i>
    </label>
  </div>
  
  <div>
    <button class="btn btn-sm btn-success">Salva</button>
    <a class="btn btn-sm btn-secondary" href="<?php echo e(route('admin.foods.index')); ?>">Torna indietro</a>
  </div>
</div>
</form>

<?php $__env->startSection('scripts'); ?>
  
  <script>
    // get elements from dom
    const imageInput = document.getElementById("image");
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
  
  <script>
    //get elements from dom
    const checkbox = document.getElementById("is_published");
    const checkboxLabel = document.getElementById("toggle-label");

    // listen checkbox click
    checkbox.addEventListener("click", () => {
      if (checkbox.checked) {
        checkboxLabel.classList.remove("text-danger");
        checkboxLabel.classList.add("text-success");
      } else {
        checkboxLabel.classList.remove("text-success");
        checkboxLabel.classList.add("text-danger");
      }
    });
  </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laravel\boolivero-be\resources\views/includes/foods/form.blade.php ENDPATH**/ ?>