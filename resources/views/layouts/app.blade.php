<!DOCTYPE html>
<html lang="en">
  <head>
      @include('includes.head')
  </head>
  <body>
    <!-- START nav -->
    @include('includes.nav')
    <!-- END nav -->
    

  
    @yield('content')
    

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo">Ciputra Life</a></h2>
              <p>DBS Bank Tower Lt. 14, Ciputra World I<br>
                Jl. Prof. Dr. Satrio kav 3-5, Jakarta Selatan, DKI Jakarta 12940</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> </a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('includes.js')

    
  </body>
</html>