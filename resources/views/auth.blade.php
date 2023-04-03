<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Dashboard TraspacApp</title>
</head>
<body>
    <section class="grid place-content-center mt-40">
        @yield('content')
    </section>
</body>
</html>