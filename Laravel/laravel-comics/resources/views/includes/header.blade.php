  {{-- # header --}}
  <header class="container">
    <figure>
      <a href="{{ url('/') }}">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc logo">
      </a>
    </figure>

    <nav>
      <ul>
        {{-- TODO da migliorare foreach --}}
        @foreach (config('headermenu') as $link)
          <li><a href="#" class="{{ $link['current'] ? 'current' : '' }}">{{ $link['text'] }}</a></li>
          {{-- Route::is('nome rotta') 
		 	request()->route-is('nome rotta') ? active : '' 
		  --}}
        @endforeach
      </ul>
    </nav>
    <form class="d-flex" role="search">
      <input type="search" placeholder="Search">
      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </header>

  {{-- # jumbotron --}}
  <section id="jumbo"></section>
