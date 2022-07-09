<!DOCTYPE html>
<html lang="en">

@include('tambahan.frontend.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="index.html">Regna</a></h1>-->
      </div>
      @include('tambahan.frontend.navbar')
     
    </div>
  </header><!-- End Header -->
  @yield('isi')
  </main><!-- End #main -->
@include('tambahan.frontend.footer')
  <!-- ======= Footer ======= -->


</body>

</html>