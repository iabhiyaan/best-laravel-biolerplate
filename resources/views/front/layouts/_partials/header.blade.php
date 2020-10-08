<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:url" content="https://lmebs.org/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="LMEB.School" />
  <meta name="title" content="LMEB.School" />
  <meta name="twitter:title" content="LMEB.School" />
  <meta property="og:description" content="Welcome" />
  <meta property="description" content="Welcome" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Welcome" />
  <meta property="og:site_name" content="LMEB.School" />
  <meta name="description" content="{{ $dashboard_composer->meta_description }}" />
  <meta name="keywords" content="{{ $dashboard_composer->keyword }}">
  <meta name="title" content="{{ $dashboard_composer->meta_title }}" />
  <title>{{ $dashboard_composer->site_name }}</title>

  <link rel="icon" href="/images/favicon.png">
  <link rel="stylesheet" href="/assets/front/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/front/css/animate.css">
  <link rel="stylesheet" href="/assets/front/css/lightbox.css">
  <link rel="stylesheet" href="/assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/front/css/themify-icons.css">
  <link rel="stylesheet" href="/assets/front/css/flaticon.css">
  <link rel="stylesheet" href="/assets/front/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/front/css/magnific-popup.css">
  <!-- <link rel="stylesheet" href="css/slick.css"> -->
  <link rel="stylesheet" href="/assets/front/css/sal.css">
  <link rel="stylesheet" href="/assets/front/css/style.css">
  <link rel="stylesheet" href="/assets/front/css/mediaquery.css">
  @stack('styles')
  <style>
    .site_banner {
      background-image: url(/images/banner_bg.png);
    }

    .site_banner:after {
      /* background-image: url(/images/main/{{ $dashboard_composer->banner_image }}); */
      background-image: url(/images/banner.png);
    }
  </style>
</head>


<body>
  <div id="top__header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <ul class="top__header__list text-sm-right">
            <li data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-out-bounce">
              <a href="#">
                <i class="fa fa-phone"></i> Call us: {{ $dashboard_composer->mobile }}
              </a>
            </li>
            <li data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400" data-sal-easing="ease-out-bounce">
              <a href="mailto:{{ $dashboard_composer->email }}">
                <i class="fa fa-envelope"></i> Email: {{ $dashboard_composer->email }}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
              data-sal-easing="ease-out-bounce">
              <img id="sticky__logo" src="/images/main/{{ $dashboard_composer->logo }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center" data-sal="slide-up" data-sal-duration="1000"
                data-sal-delay="400" data-sal-easing="ease-out-bounce">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($dashboard_pages as $page )
                    @if($page->slug != 'admission')
                    <a class="dropdown-item" href="{{ route('getPage', [$page->slug]) }}">{{ $page->title }}</a>
                    @endif
                    @endforeach
                    {{-- <a class="dropdown-item" href="{{ route('getPage', ['message-from-principal']) }}">Message from
                    principal</a>
                    <a class="dropdown-item" href="{{ route('getPage', ['mission-vision']) }}">Mission/Vision</a>
                    <a class="dropdown-item" href="{{ route('getPage', ['curriculum']) }}">Curriculum</a>
                    <a class="dropdown-item" href="{{ route('getPage', ['exchange-program']) }}">Exchange Program</a>
                    --}}
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('getPage', ['admission']) }}">Admission</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('blogList') }}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('teamList') }}">Team</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Gallery
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('galleryList') }}">Image Gallery</a>
                    <a class="dropdown-item" href="{{ route('videoList') }}">Video Gallery</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('getPage', ['contact-us']) }}">Contact us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>