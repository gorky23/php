<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Fakturomat</title>
  </head>
  <body>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo text-white"><b>FAKTUROMAT</b></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="{{ url('/') }}"><span>Home</span></a></li>
                <li class="has-children">
                  <a href="{{ url('/') }}"><span>Księgowość</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="{{ url('/faktury') }}">Lista faktur</a></li>
                    <li><a href="{{ url('/faktury/dodaj') }}">Dodaj fakturę</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li><a href="#">Menu Four</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                    <a href="{{ url('/') }}"><span>Zaopatrzenie</span></a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ url('/faktury') }}">Gotówka</a></li>
                      <li><a href="{{ url('/faktury/dodaj') }}">Przelewy</a></li>
                      <li><a href="#">Menu Three</a></li>
                      <li class="has-children">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                          <li><a href="#">Menu Four</a></li>
                        </ul>
                      </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="{{ url('/') }}"><span>Sekretariat</span></a>
                    <ul class="dropdown arrow-top">
                      <li><a href="{{ url('/umowy') }}">Umowy</a></li>
                      <li><a href="{{ url('/umowy/dodaj') }}">Dodaj umowę</a></li>
                      <li><a href="#">Menu Three</a></li>
                      <li class="has-children">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                          <li><a href="#">Menu Four</a></li>
                        </ul>
                      </li>
                    </ul>
                </li>
                {{--  <li><a href="listings.html"><span>Listings</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="blog.html"><span>Blog</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>  --}}
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

      @yield('content')

    </header>

    <div class="hero"></div>

    <script src= "{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
  </body>
</html>
