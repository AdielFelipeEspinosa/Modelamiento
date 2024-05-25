<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.include.head')
  <title>Ferreteria</title>
</head>

<body>
  @include('layouts.include.header')
  @include('layouts.include.nav')


  @yield('content')

  @include('layouts.include.footer')

</body>

</html>