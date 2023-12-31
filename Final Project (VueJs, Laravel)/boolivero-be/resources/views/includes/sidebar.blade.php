{{-- # sidebar section --}}
<section id="sidebar" class="h-100 d-md-flex flex-column">
  {{-- title >768px --}}
  <h2 class="px-2">Dashboard</h2>

  {{-- links --}}
  <ul class="list-unstyled">
    <li class="ms-xl-4 my-xl-3">
      <a class="@if (request()->routeis('profile*')) active @endif" href="{{ url('profile') }}">
        <i class="fa-solid fa-id-card"></i>
        <span>Profilo</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="@if (request()->routeis('admin.restaurants*')) active @endif" href="{{ route('admin.restaurants.index') }}">
        <i class="fa-solid fa-utensils"></i>
        <span>Ristorante</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="@if (request()->routeis('admin.foods*')) active @endif" href="{{ route('admin.foods.index') }}">
        <i class="fa-solid fa-burger"></i>
        <span>Menù</span>
      </a>
    </li>
    <li class="ms-xl-4 my-xl-3">
      <a class="@if (request()->routeis('admin.orders*')) active @endif" href="{{ route('admin.orders.index') }}">
        <i class="fa-solid fa-clipboard-list"></i>
        <span>Ordini</span>
      </a>
    </li>
  </ul>
</section>
