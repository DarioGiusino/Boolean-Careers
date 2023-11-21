
<section id="sidebar" class="h-100 d-md-flex flex-column">
  
  <h2 class="px-2">Dashboard</h2>

  
  <ul class="list-unstyled">
    <li class="ms-xl-4 my-xl-3">
      <a class="<?php if(request()->routeis('profile*')): ?> active <?php endif; ?>" href="<?php echo e(url('profile')); ?>">
        <i class="fa-solid fa-id-card"></i>
        <span>Profilo</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="<?php if(request()->routeis('admin.restaurants*')): ?> active <?php endif; ?>" href="<?php echo e(route('admin.restaurants.index')); ?>">
        <i class="fa-solid fa-utensils"></i>
        <span>Ristorante</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="<?php if(request()->routeis('admin.foods*')): ?> active <?php endif; ?>" href="<?php echo e(route('admin.foods.index')); ?>">
        <i class="fa-solid fa-burger"></i>
        <span>Menù</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="<?php if(request()->routeis('admin.orders*')): ?> active <?php endif; ?>" href="<?php echo e(route('admin.orders.index')); ?>">
        <i class="fa-solid fa-clipboard-list"></i>
        <span>Ordini</span>
      </a>
    </li>
  </ul>
</section>
<?php /**PATH C:\laravel\boolivero-be\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>