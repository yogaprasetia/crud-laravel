<!DOCTYPE html>
<html>

<head>
  @include('partials.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('partials.nav')
    @include('partials.sidebar')

    <div class="content-wrapper">
      <section class="content mt-4">
        @include('partials.notification')
        @yield('content')
      </section>
    </div>

    @include('partials.footer')
  </div>

  @include('partials.scripts')
</body>

</html>