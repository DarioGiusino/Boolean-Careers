<?php $__env->startSection('content'); ?>
  <section id="orders-index" class="container">
    
    <header class="my-3">
      <h3 class="text-center">Ordini</h3>
    </header>

    
    <div class="row row-cols-1 d-md-none">
      <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
        <div class="col d-flex justify-content-center mb-4">
          <div class="card w-100 position-relative">
            <div class="card-body">

              
              <h5 class="card-title mb-2">Ordine #<?php echo e($key + 1); ?></h5>

              
              <div class="card-subtitle mb-1 text-body-secondary d-flex justify-content-between align-items-center">
                <h6><?php echo e($order->address); ?> - <?php echo e($order->phone); ?></h6>
                <h6><?php echo e($order->getDate()); ?></h6>
              </div>
              <div class="my-3">
                <strong class="btn-info">Totale ordine € <?php echo e($order->total_price); ?></strong>
              </div>

              
              <div class="collapse-btn">
                
                <button class="btn dropdown-toggle collapsed" data-bs-toggle="collapse"
                  href="#collapse-<?php echo e($order->id); ?>" role="button" aria-expanded="false"
                  aria-controls="collapse-<?php echo e($order->id); ?>"><i class="fa-solid fa-chevron-up"></i></button>
              </div>

              
              <div class="collapse" id="collapse-<?php echo e($order->id); ?>">
                
                <p class="card-text">
                  Lista articoli:
                <ul class="ps-2">
                  <?php $__currentLoopData = $order->foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <div>
                        <?php echo e($key + 1); ?>. <?php echo e($food->label); ?> x<?php echo e($food->pivot->quantity); ?>

                      </div>
                      <div>
                        € <?php echo e($food->getTotalPrice($food)); ?>

                      </div>
                    </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </p>

                
                <div class="d-flex align-items-center justify-content-between mt-4">
                  
                  <div>
                    <?php if($order->is_paid): ?>
                      <strong>
                        Pagamento: <i class="fa-solid fa-circle-check text-success"></i>
                      </strong>
                    <?php else: ?>
                      <strong>
                        Pagamento: <i class="fa-solid fa-circle-xmark text-danger"></i>
                      </strong>
                    <?php endif; ?>
                  </div>
                  
                  <div>
                    <?php if($order->is_paid): ?>
                      <a class="btn btn-sm btn-success" href=""><i class="fa-solid fa-check-to-slot"></i>
                        Accetta</a>
                    <?php endif; ?>
                    <a class="btn btn-sm btn-warning" href=""><i class="fa-solid fa-triangle-exclamation"></i>
                      Notifica</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
        <h2 class="text-center">There are no orders here</h2>
      <?php endif; ?>
    </div>

    
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="order-<?php echo e($order->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          
          <div class="modal-content">
            
            <div class="modal-header">
              <div>
                <h1 class="modal-title fs-5">Ordine #<?php echo e($key + 1); ?></h1>
                <h6 class="modal-subtitle mb-1"><?php echo e($order->address); ?> - <?php echo e($order->phone); ?></h6>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <p class="mb-0">
                Lista articoli:
              <ul class="ps-2">
                <?php $__currentLoopData = $order->foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                      <?php echo e($key + 1); ?>. <?php echo e($food->label); ?> x<?php echo e($food->pivot->quantity); ?>

                    </div>
                    <div>
                      € <?php echo e($food->getTotalPrice($food)); ?>

                    </div>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
              </p>
            </div>
            
            <div class="modal-footer justify-content-between">
              
              <div class="btn-info">
                Totale ordine € <?php echo e($order->total_price); ?>

              </div>

              
              <div>
                
                <?php if($order->is_paid): ?>
                  <button class="btn btn-sm btn-success"><i class="fa-solid fa-check-to-slot"></i>
                    Accetta</button>
                <?php endif; ?>
                
                <button class="btn btn-sm btn-warning"><i class="fa-solid fa-triangle-exclamation"></i>
                  Notifica</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <table class="table d-none d-md-table">
      <thead>
        
        <tr>
          
          <th scope="col"><i class="fa-solid fa-hashtag"></i></th>

          
          <th scope="col"><i class="fa-solid fa-street-view"></i> - <i class="fa-solid fa-phone"></i></th>

          
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>

          
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>

          
          <th scope="col" class="text-center"><i class="fa-solid fa-comments-dollar"></i></th>

          
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          
          <tr>
            
            <th scope="row"><?php echo e($key + 1); ?></th>

            
            <td><?php echo e($order->address); ?> - <?php echo e($order->phone); ?></td>

            
            <td><?php echo e($order->getDate()); ?></td>

            
            <td class="table-price">€<?php echo e($order->total_price); ?></td>

            
            <td class="text-center">
              <?php if($order->is_paid): ?>
                <i class="fa-solid fa-circle-check text-success"></i>
              <?php else: ?>
                <i class="fa-solid fa-circle-xmark text-danger"></i>
              <?php endif; ?>
            </td>

            
            <td class="pt-0">
              <div class="dropdown position-relative text-center">
                
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
                
                <ul class="dropdown-menu">
                  
                  <li><button data-bs-toggle="modal" data-bs-target="#order-<?php echo e($order->id); ?>" class="dropdown-item"><i
                        class="fa-solid fa-folder-open"></i> Apri</button></li>
                  
                  <?php if($order->is_paid): ?>
                    <li><button class="dropdown-item"><i class="fa-solid fa-check-to-slot"></i>
                        Accetta</button></li>
                  <?php endif; ?>
                  
                  <li><button class="dropdown-item"><i class="fa-solid fa-triangle-exclamation"></i>
                      Notifica</button></li>
                </ul>
              </div>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          
          <h2 class="text-center">There are no orders here</h2>
        <?php endif; ?>
      </tbody>
    </table>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\boolivero-be\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>