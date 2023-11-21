<?php $__env->startSection('content'); ?>
  <section id="foods-index" class="container">
    
    <header class="my-3">
      <h3 class="text-center">Menù</h3>
      <div class="me-1 d-flex justify-content-end">
        <a class="text-success d-flex align-items-center" href="<?php echo e(route('admin.foods.create')); ?>"><span
            class="d-none d-md-inline-block me-2">Aggiungi
            un nuovo
            piatto</span> <i class="fa-solid fa-square-plus fa-2x"></i></a>
      </div>
    </header>

    
    <div class="row row-cols-1 d-md-none">
      <?php $__empty_1 = true; $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
        <div class="col d-flex justify-content-center mb-4">
          <div class="card w-100 position-relative">
            <div class="card-body">

              
              <h5 class="card-title"><?php echo e($food->label); ?></h5>

              
              <h6 class="card-subtitle mb-2 text-body-secondary">€ <?php echo e($food->price); ?></h6>

              
              <p class="card-text"><?php echo e($food->getAbstract()); ?></p>

              
              <div class="form-check form-switch p-0 text-end">
                
                <form action="<?php echo e(route('admin.foods.patch', $food->id)); ?>" method="POST">
                  <?php echo method_field('patch'); ?>
                  <?php echo csrf_field(); ?>
                  
                  <label class="form-check-label text-<?php echo e($food->is_published ? 'success' : 'danger'); ?>"><i
                      class="fa-solid fa-earth-europe"></i></label>
                  
                  <input class="form-check-input float-none patch-checkbox" type="checkbox" role="switch"
                    name='is_published' data-input="<?php echo e($food->label); ?>" <?php if(old('is_published', $food->is_published)): echo 'checked'; endif; ?>>
                </form>
              </div>

              
              <div class="dropdown">
                
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis"></i></button>
                
                <ul class="dropdown-menu">
                  
                  <li><button data-bs-toggle="modal" data-bs-target="#food-<?php echo e($food->id); ?>" class="dropdown-item"><i
                        class="fa-solid fa-eye"></i> Vedi</button></li>
                  
                  <li><a class="dropdown-item" href="<?php echo e(route('admin.foods.edit', $food->id)); ?>"><i
                        class="fa-solid fa-sliders"></i> Modifica</a></li>
                  
                  <li>
                    <form class="d-inline delete-form" action="<?php echo e(route('admin.foods.destroy', $food->id)); ?>"
                      method="post" data-form="<?php echo e($food->label); ?>">
                      <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                      <button type="submit" class="dropdown-item"><i class="fa-solid fa-trash-can"></i> Elimina</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
        <h2 class="text-center">There are no foods here</h2>
      <?php endif; ?>
    </div>

    
    <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="food-<?php echo e($food->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          
          <div class="modal-content"
            <?php if($food->image): ?> style="background-image: url('<?php echo e($food->image); ?>')" <?php endif; ?>>
            
            <div class="modal-header">
              <h1 class="modal-title fs-5"><?php echo e($food->label); ?></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <p class="mb-0"><?php echo e($food->description); ?></p>
            </div>
            
            <div class="modal-footer justify-content-between">
              
              <div class="btn-info">
                € <?php echo e($food->price); ?>

              </div>

              
              <div>
                
                <a class="btn btn-sm btn-warning" href="<?php echo e(route('admin.foods.edit', $food->id)); ?>"><i
                    class="fa-solid fa-sliders"></i> Modifica</a>
                
                <form class="d-inline delete-form" action="<?php echo e(route('admin.foods.destroy', $food->id)); ?>" method="post"
                  data-form="<?php echo e($food->label); ?>">
                  <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i>
                    Elimina</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <table class="table d-none d-md-table">
      <thead>
        
        <tr>
          
          <th scope="col"><i class="fa-solid fa-tags"></i></th>

          
          <th scope="col"><i class="fa-solid fa-quote-left"></i></th>

          
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>

          
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>

          
          <th scope="col"><i class="fa-solid fa-earth-europe"></i></th>

          
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          
          <tr>
            
            <th scope="row"><?php echo e($food->label); ?></th>

            
            <td><?php echo e($food->getAbstract()); ?></td>

            
            <td class="table-price">€ <?php echo e($food->price); ?></td>

            
            <td><?php echo e($food->getDate()); ?></td>

            
            <td>
              <div class="form-check form-switch p-0 m-0 pt-2 text-end">
                
                <form action="<?php echo e(route('admin.foods.patch', $food->id)); ?>" method="POST">
                  <?php echo method_field('patch'); ?>
                  <?php echo csrf_field(); ?>
                  
                  <input class="form-check-input float-none m-0 patch-checkbox" type="checkbox" role="switch"
                    name='is_published' data-input="<?php echo e($food->label); ?>" <?php if(old('is_published', $food->is_published)): echo 'checked'; endif; ?>>
                </form>
              </div>
            </td>

            
            <td class="pt-0">
              <div class="dropdown position-relative">
                
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
                
                <ul class="dropdown-menu">
                  
                  <li><button data-bs-toggle="modal" data-bs-target="#food-<?php echo e($food->id); ?>"
                      class="dropdown-item"><i class="fa-solid fa-eye"></i> Vedi</button></li>
                  
                  <li><a class="dropdown-item" href="<?php echo e(route('admin.foods.edit', $food->id)); ?>"><i
                        class="fa-solid fa-sliders"></i> Modifica</a></li>
                  
                  <li>
                    <form class="d-inline delete-form" action="<?php echo e(route('admin.foods.destroy', $food->id)); ?>"
                      method="post" data-form="<?php echo e($food->label); ?>">
                      <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                      <button type="submit" class="dropdown-item"><i class="fa-solid fa-trash-can"></i>
                        Elimina</button>
                    </form>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          
          <h2 class="text-center">There are no foods here</h2>
        <?php endif; ?>
      </tbody>
    </table>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/admin/foods/index.blade.php ENDPATH**/ ?>