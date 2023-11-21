<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comics | Home</title>
  {{-- fontawesome --}}
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />

  @vite('resources/js/app.js')
</head>

<body>
  {{-- # header + jumbotron --}}
  @include('includes.header')

  {{-- # main --}}
  <main>
    @yield('content')
  </main>

  {{-- # merch --}}
  @yield('merch-nav')

  @include('includes.footer')

</body>

</html>
