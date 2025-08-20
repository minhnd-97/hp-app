@extends('mobile.base')

@section('content')
    <main class="main">
        <section class="slideshow">
            <div class="item"><a href="#">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/banner_01_1.jpg') }}" alt="web-eps-1920x700px-03">
                    </div>

                </a></div>
            <div class="item"><a href="#">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/banner_08_1.jpeg') }}" alt="web-eps-1920x700px-01">
                    </div>

                </a></div>
        </section>
        <div style="width: 100%;float: left;">
            <div class="container" style="position: relative;">
                <img style="width: 130px;position: absolute;z-index: 1;bottom: 10px;"
                     src="/assets/img/tu-hao-thuong-hieu-quoc-gia.png" alt="">
            </div>
        </div>
        <section class="box-intro">
            <div class="container">
                <div class="box-intro__content">
                    <div class="box-intro__content-detail">
                        <div class="title">
                            <h2 class="title-text">Đôi nét về EPS Hải Phong</h2>
                            <span class="title-border"></span>
                        </div>
                        <div class="box-intro__content-detail__desc">
                            EPS Hải Phong là doanh nghiệp hàng đầu trong sản xuất xốp EPS, sử dụng công nghệ hiện đại để
                            đảm
                            bảo chất lượng sản phẩm từ quy trình sản xuất đến tay người tiêu dùng. Chúng tôi đã tham gia
                            vào
                            nhiều dự án trên khắp cả nước, từ khu vực bắc đến nam, luôn đặt sự hài lòng của khách hàng
                            lên hàng đầu.
                        </div>
                        {{-- <div class="box-intro__content-detail__link">
                             <a href="/chat-luong-hoa-phat" class="btn-primary">Xem thêm <i class="fa fa-caret-right"></i></a>
                         </div>--}}
                    </div>
                    <div class="box-intro__content-media">
                        <a data-fancybox="gallery" class="fancybox-media media-ytb" href="https://youtu.be/APOXWO40eIY">
                            <img src="{{ asset('assets/img/detail_home.jpg') }}" alt="">
                            <span class="media-play"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="product-home">
            <div class="container">
                <div class="title">
                    <h2 class="title-text">Sản phẩm</h2>
                    <span class="title-border"></span>
                </div>

                <div class="product-home__list">
                    <div class="product-widget"><a href="/san-pham#xop-eps">
                            <div class="product-widget__media">
                                <img src="{{ asset('assets/img/xop_eps_1.jpg') }}" alt="xop-eps-3-1">
                            </div>
                            <div class="product-widget__content">
                                <div class="product-widget__content-center">
                                    <h2 class="product-widget__content-title">XỐP EPS</h2>
                                    <div class="product-widget__content-desc">
                                        Công ty EPS Hải Phòng cung cấp các sản phẩm EPS với nhiều ứng dụng khác nhau
                                        trong xây dựng, bao bì và công nghiệp, đáp ứng nhu cầu đa dạng của khách hàng
                                        trong các
                                        lĩnh vực này.
                                    </div>
                                    <div class="product-widget__content-link">
                                        Xem thêm <i class="fa fa-caret-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="product-widget"><a href="/san-pham#xop-dinh-hinh">
                            <div class="product-widget__media">
                                <img src="{{ asset('assets/img/xop_khuan_1.jpg') }}" alt="xop-dinh-hinh-2">
                            </div>
                            <div class="product-widget__content">
                                <div class="product-widget__content-center">
                                    <h2 class="product-widget__content-title">
                                        XỐP ĐỊNH HÌNH
                                    </h2>
                                    <div class="product-widget__content-desc">
                                        Công ty EPS Hải Phòng chuyên sản xuất xốp định hình chất lượng cao, được ứng
                                        dụng rộng rãi
                                        trong các ngành công nghiệp và xây dựng.
                                    </div>
                                    <div class="product-widget__content-link">
                                        Xem thêm <i class="fa fa-caret-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="product-widget"><a href="/san-pham#thep-thanh">
                            <div class="product-widget__media">
                                <img src="{{ asset('assets/img/xop_xps_1.jpg') }}" alt="xop-xps">
                            </div>
                            <div class="product-widget__content">
                                <div class="product-widget__content-center">
                                    <h2 class="product-widget__content-title">XỐP XPS</h2>
                                    <div class="product-widget__content-desc">
                                        Công ty EPS Hải Phòng chuyên sản xuất xốp XPS chất lượng cao, đáp ứng các nhu
                                        cầu đa
                                        dạng trong xây dựng và công nghiệp.
                                    </div>
                                    <div class="product-widget__content-link">Xem thêm <i class="fa fa-caret-right"></i>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>

            </div>
        </section>

        <section class="news-home">
            <div class="container">
                <div class="news-home__list">
                    <div class="title"><a href="/tin-tuc/tin-cong-ty">
                            <p class="title-text">Tin công ty</p>
                        </a></div>

                    <div class="news-home__list-box">
                        <div class="item">
                            <a href="{{ route('new.detail', $new['id']) }}">
                                <div class="item-image">
                                    <img src="{{ $new['content_details'][0]['image'] }}" alt="{{ $new['title'] }}">
                                </div>
                                <div class="item-info">
                                    <div class="item-info__title">
                                        <p class="item-info__title-time time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ date('d/m/Y', strtotime($new['date'])) }}
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            {{ $new['time'] }}
                                        </p>
                                        <h3 class="item-info__title-text">{{ $new['title'] }}</h3>
                                        <p class="item-info__title-desc">
                                            {{ mb_substr($new['content'], 0, 100) }}{{ strlen($new['content']) > 100 ? '...' : '' }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <ul class="item-list">
                            @foreach($news as $item)
                                <li><a href="{{ route('new.detail', $item['id']) }}">{{ $item['title'] }}</a></li>
                            @endforeach
                        </ul>
                        <div class="item-link">
                            <a href="/tin-tuc/tin-cong-ty" class="btn-primary">Xem thêm <i
                                    class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="news-home__list animated" data-animate="fadeInRight">
                    <div class="title"><a href="/gioi-thieu-xuong">
                            <p class="title-text">Xưởng sản xuất</p>
                        </a></div>
                    <div class="news-home__list-box">
                        <!-- Video xưởng -->
                        <div class="box-intro__content-media" style="width: 100%;padding-left: 0">
                            <video autoplay muted loop playsinline
                                   class="w-full h-auto rounded-xl shadow-lg" style="width: 100%">
                                <source src="{{ asset('assets/img/video-home.mp4') }}" type="video/mp4">
                                Trình duyệt của bạn không hỗ trợ video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
