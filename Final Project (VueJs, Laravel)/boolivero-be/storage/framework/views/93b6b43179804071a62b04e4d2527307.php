<?php if(session('message')): ?>
  <div class="alert alert-<?php echo e(session('type')); ?> d-flex justify-content-between align-items-center alert-toast"
    role="alert">
    <p class="mb-0"><?php echo e(session('message')); ?></p>
    <button type="button" class="btn-close ms-3 btn-alert"></button>
  </div>

  <script>
    const closeBtn = document.querySelector(".btn-alert");
    const toast = document.querySelector(".alert-toast");

    closeBtn.addEventListener("click", () => {
      toast.classList.add("dissolving");
    });

    setInterval(() => {
      toast.classList.add("dissolving");
    }, 3000);
  </script>
<?php endif; ?>
<?php /**PATH C:\laravel\boolivero-be\resources\views/includes/alerts/toast.blade.php ENDPATH**/ ?>