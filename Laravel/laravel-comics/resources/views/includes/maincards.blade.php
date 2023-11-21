<div class="container">
  <h3>current series</h3>
  <div class="card-container">
    @foreach (config('comics') as $comic)
      <div class="comic-card">
        <figure>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
        </figure>
        <div class="card-text">
          <h4>{{ $comic['series'] }}</h4>
          <sub>{{ $comic['price'] }}</sub>
        </div>
      </div>
    @endforeach
  </div>
  <button>load more</button>
</div>
