<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  {{-- Title Website --}}
  <title>GenPI Dumai | {{ $title }}</title>
</head>

<body>
  @include('partials.navbar')

  <section class="">
    @yield('container')
  </section>

  @include('partials.footer')

  {{-- Script js --}}
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
