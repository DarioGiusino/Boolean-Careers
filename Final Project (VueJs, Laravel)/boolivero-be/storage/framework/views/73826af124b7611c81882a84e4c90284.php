<header id="header-top">
  <div class="container-fluid">
    <div class="navbar d-flex">

      <!-- logo -->

      <div>
        <div class="logo m-0 ms-3">
          <a href="<?php echo e(env('APP_FRONTEND_URL')); ?>">
            <img
              src="https://media.discordapp.net/attachments/1090194914433839158/1092735966432727070/Logo-BOOLIVEROO-PRIMARY.png?width=1440&height=490"
              alt="logo-deliveroo" class="img-fluid">
          </a>
        </div>
      </div>



      <!-- navbar-menu -->
      <div class="navbar-menu">
        <ul class="d-flex mb-0 align-items-center">

          <!-- CONTACT US -->
          <li>
            <div class="contact-us">
              <a class="btn nav-but" aria-current="page" href="http://localhost:5174/contact">
                <span style="font-size:0.9rem;"><i class="primary-icon fa-solid fa-user"></i>Contattaci</span>
              </a>
            </div>
          </li>

          <!-- CART -->
          

          <!-- SIGN UP -->
          <?php if(auth()->guard()->guest()): ?>
            <li class="login">
              <a href="<?php echo e(route('login')); ?>">
                <button class="btn nav-but">
                  <span style="font-size:0.8rem;"><i class="primary-icon fa-solid fa-house"></i>Accedi o
                    Registrati</span>
                </button>
              </a>
            </li>
          <?php endif; ?>


          <!-- MENU -->
          <li class="menu me-3">
            <button class="btn nav-but" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"><span style="font-size:0.9rem;"><i
                  class="primary-icon fa-solid fa-bars"></i>Menu</span></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
              aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header flex-column">
                <!-- LOGO AND CLOSE UP BUTTON-->
                <div class="logo2 d-flex justify-content-between align-items-center">
                  <img
                    src="https://media.discordapp.net/attachments/1090194914433839158/1092736001354518528/Logo-COLORATO-BOOLEVEROO-.png?width=1440&height=490"
                    alt="logo-deliveroo" class="img-fluid w-50">

                  <button type="button" class="btn-close m-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                
                <?php if(auth()->guard()->check()): ?>
                  <div class="mt-2 d-flex align-items-center align-self-end">
                    
                    <span><?php echo e(Auth::user()->restaurant->restaurant_name); ?></span>

                    
                    <figure class="nav-restaurant-banner ms-2">
                      <?php if(str_starts_with(Auth::user()->restaurant->banner, 'http')): ?>
                        <img src="<?php echo e(Auth::user()->restaurant->banner); ?>" alt="user-image">
                      <?php else: ?>
                        <img src="<?php echo e(asset('storage/' . Auth::user()->restaurant->banner)); ?>" alt="user-image">
                      <?php endif; ?>
                    </figure>
                  </div>
                <?php endif; ?>


              </div>

              <div class="offcanvas-body text-center pt-0">
                <hr>
                <!-- OFFCANVAS SIGN UP BUTTON -->
                <?php if(auth()->guard()->guest()): ?>
                  <div class="my-5">
                    <a href="<?php echo e(route('login')); ?>" class=" sign-up-button">Accedi o Registrati</a>
                  </div>
                <?php else: ?>
                  <div class="my-5">
                    <a class="sign-up-button" href="<?php echo e(route('logout')); ?>"
                      onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                      <?php echo e(__('Logout')); ?>

                    </a>
                  </div>
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                  </form>
                <?php endif; ?>

                <!-- OFFCANVAS MENU -->
                <div class="container-fluid off-canvas-menu">
                  <div class="row text-start">

                    

                    <!-- LINKS -->
                    <div class="col-12">

                      <div class="d-flex flex-column menu-sidebar">
                        <a href="http://localhost:5174/restaurants" class="pb-1">
                          <button data-bs-toggle="offcanvas" class="btn btn-link text-decoration-none btn-menu"><span><i
                                class="fa-solid fa-utensils pe-3 text-secondary"></i>I
                              nostri ristoranti</span></button>
                        </a>
                        <a href="http://localhost:5174/about_us" class="pb-1">
                          <button data-bs-toggle="offcanvas" class="btn btn-link text-decoration-none btn-menu"><span><i
                                class="fa-solid fa-industry pe-3 text-secondary"></i>Chi
                              siamo</span></button>
                        </a>
                        <a href="http://localhost:5174/contact" class="pb-1">
                          <button data-bs-toggle="offcanvas" class="btn btn-link text-decoration-none btn-menu"><span><i
                                class="fa-regular fa-envelope pe-3 text-secondary"></i>Contatti</span></button>
                        </a>
                        <a href="http://localhost:5174/careers" class="pb-1">
                          <button data-bs-toggle="offcanvas" class="btn btn-link text-decoration-none btn-menu"><span><i
                                class="fa-solid fa-briefcase pe-3 text-secondary"></i>Lavora
                              con noi</span></button>
                        </a>
                        <a href="http://localhost:5174/faqs" class="pb-1">
                          <button data-bs-toggle="offcanvas" class="btn btn-link text-decoration-none btn-menu"><span><i
                                class="fa-solid fa-circle-question pe-3 text-secondary"></i>FAQs</span></button>
                        </a>
                      </div>

                    </div>

                  </div>


                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<?php /**PATH C:\laravel\boolivero-be\resources\views/includes/navbar.blade.php ENDPATH**/ ?>