<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('assets/img/icon_logo.png') }}" type="image/x-icon" rel="shortcut icon"/>
    <title>EPS HAI PHONG</title>
    <meta name="description" content="Website chính thức của công ty EPS HAI PHONG"/>
    <link rel="canonical" href="https://epshaiphong.com" />
    <meta property="og:site_name" content="EPSHAIPHONG" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="EPS HAI PHONG" />
    <meta property="og:description" content="Website chính thức của công ty EPS HAI PHONG" />
    <meta property="og:url" content="https://epshaiphong.com" />
    <meta property="og:image" content="{{ asset('assets/img/icon_logo.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/lightgallery/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <script type="text/javascript" src="{{ asset('assets/libs/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/fancybox/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/lightgallery/lightgallery-all.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ha Noi",
            "addressRegion": "Vietnam",
            "streetAddress": " Lô 03.04 Cụm CN Nguyên Khê, Đông Anh, Hà Nội, Việt Nam"
          },
            "image": [
              "https://epshaiphong.com/assets/img/logo.png"
            ],
            "priceRange": "$$$",
            "description": "Website chính thức của công ty EPS HẢI PHONG",
            "name": "EPS HẢI PHONG",
            "telephone": "093 180 1102"
        }
    </script>
</head>
<body>
    @include('pc.partials.header')

    @include('pc.partials.menu')

    @yield('content')

    @include('pc.partials.footer')
</body>

<section class="icon-fix icon-fix-right">
    <div class="item">
        <div class="item-image">
            <a href="mailto:epshaiphong@gmail.com">
                <img src="{{ asset('/assets/img/icon-fix-2.png') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">epshaiphong@gmail.com</div>
    </div>
    <div class="item">
        <div class="item-image">
            <a href="https://m.me/360061208115070" target="_blank">
                <img src="{{ asset('/assets/img/icon-fix-3.png') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">Chat với chúng tôi</div>
    </div>
    <div class="item">
        <div class="item-image">
            <a href="#">
                <img src="{{ asset('/assets/img/icon-fix-4.png') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">Về đầu trang</div>
    </div>
</section>

<section class="icon-fix icon-fix-left">
    <div class="item">
        <div class="item-image">
            <a href="/san-pham#xop-eps" >
                <img src="{{ asset('assets/img/xop_eps_1.jpg') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">Xốp EPS</div>
    </div>
    <div class="item">
        <div class="item-image">
            <a href="/san-pham#xop-dinh-hinh" >
                <img src="{{ asset('assets/img/xop_khuan_1.jpg') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">Xốp định hình</div>
    </div>
    <div class="item">
        <div class="item-image">
            <a href="/san-pham#xop-xps" >
                <img src="{{ asset('assets/img/xop_xps_1.jpg') }}" alt="">
            </a>
        </div>
        <div class="item-tooltip">Xốp XPS</div>
    </div>
</section>

<section id="loading_box"><div id="loading_image"></div></section>

<script type="text/javascript" src="{{ asset('assets/js/functions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>

@yield('js')
</html>