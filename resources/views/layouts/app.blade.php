<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
         <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <title>Campus Discussion Forum</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/customstyle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--
        
    TemplateMo 557 Grad School
    
    https://templatemo.com/tm-557-grad-school
    
    -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
<script defer src="{{ mix('js/app.js') }}"></script>
</head>
    

<body class="font-sans text-gray-900 antialiased">
    <div id="app">
        <!--header-->
    <header class="main-header clearfix pt-20" style="" role="header">
      <div class="logo">
        <a href="#"><em>Al-Hikimah</em> University</a>
      </div>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
      <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu" style="">
             <!-- Authentication Links -->
             @guest
             @if (Route::has('login'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
             @endif

             @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </li>
         @endguest
          {{-- <li><a href="/">Home</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="/register">Register</a></li> --}}
          <!-- <li><a href="#section5">Video</a></li> -->
          {{-- <li><a href="#section6">Contact</a></li>
          <li><a href="https://templatemo.com" class="external">External</a></li> --}}
        </ul>
      </nav>
    </header>

        <main class="">
            @include('message.flash-message')
            @yield('content')
        </main>
    </div>

<footer>
    <div class="container mt-0 pt-0">
        <div class="row">
        <div class="col-md-12">
            <p><i class="fa fa-copyright"></i> Copyright <?php echo date('Y') ?>  
            
            | Online Campus Discussion Al-Hikmah</p>
        </div>
        </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/lightbox.js')}}"></script>
  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/video.js')}}"></script>
  <script src="{{asset('assets/js/slick-slider.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');
  
  var showSection = function showSection(section, isAnimate) {
    var
    direction = section.replace(/#/, ''),
    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
    reqSectionPos = reqSection.offset().top - 0;
  
    if (isAnimate) {
    $('body, html').animate({
        scrollTop: reqSectionPos },
    800);
    } else {
    $('body, html').scrollTop(reqSectionPos);
    }
  
  };
  
  var checkSection = function checkSection() {
    $('.section').each(function () {
    var
    $this = $(this),
    topEdge = $this.offset().top - 80,
    bottomEdge = topEdge + $this.height(),
    wScroll = $(window).scrollTop();
    if (topEdge < wScroll && bottomEdge > wScroll) {
        var
        currentId = $this.data('section'),
        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
    }
    });
  };
  
  $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
    if($(e.target).hasClass('external')) {
    return;
    }
    ///e.preventDefault();
    $('#menu').removeClass('active');
    showSection($(this).attr('href'), true);
  });
  
  $(window).scroll(function () {
    checkSection();
  });



  //Add Questions
  
  </script>
  
</body>
</html>
