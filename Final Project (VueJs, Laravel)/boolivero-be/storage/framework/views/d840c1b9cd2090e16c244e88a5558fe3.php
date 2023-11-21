<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  
  <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('loader_logo.png')); ?>" />

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
    crossorigin='anonymous' />

  <!-- cdns -->
  <?php echo $__env->yieldContent('cdns'); ?>

  <!-- Usando Vite -->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body style="visibility: hidden">
  <div id="app">
    
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <main class="d-flex flex-column flex-md-row-reverse">
      
      <div class="main-content flex-grow-1">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
      
      <div class="fb-10-md-20 flex-shrink-0">
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    </main>

    
    <?php echo $__env->make('includes.alerts.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('scripts'); ?>
  </div>

</body>

</html>
<?php /**PATH C:\laravel\boolivero-be\resources\views/layouts/app.blade.php ENDPATH**/ ?>