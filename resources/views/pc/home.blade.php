@extends('pc.base')
@section('content')
    <main class="main">
        <section class="slideshow">
            <div class="item"><a href="#">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/banner_01_1.jpg') }}" alt="web-xop-eps-01">
                    </div>
                    <div class="item-info">
                        <div class="container">
                            <h1 class="item-info__subtitle main-color" style="color: #66A3E0;"><i
                                    class="fa fa-chevron-right"></i>EPS Hải Phong</h1>
                            <div class="item-info__title main-color" style="color: #003366;">Dẫn đầu công nghệ xốp
                                EPS.
                            </div>
                            <div class="item-info__desc main-color" style="color: #00CC99;">
                                Với tầm nhìn chiến lược và đầu tư mạnh mẽ vào công nghệ, Hải Phong dẫn đầu sản xuất xốp
                                EPS
                                chất lượng cao và giải pháp tối ưu cho khách hàng.
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="item"><a href="#">
                    <div class="item-image">
                        <img src="{{ asset('assets/img/banner_08_1.jpeg') }}" alt="web-xop-eps-02">
                    </div>
                    <div class="item-info">
                        <div class="container">
                            <h1 class="item-info__subtitle main-color" style="color: #66A3E0;"><i
                                    class="fa fa-chevron-right"></i>EPS Hải Phong</h1>
                            <div class="item-info__title main-color" style="color: #003366;">Dẫn đầu công nghệ xốp
                                EPS.
                            </div>
                            <div class="item-info__desc main-color" style="color: #00CC99;">
                                Eps Hải Phong tiên phong sản xuất xốp tấm chống nóng và xốp tấm tôn nền, cam kết chất
                                lượng
                                và công nghệ hiện đại cho công trình dân dụng và công nghiệp.
                            </div>
                        </div>
                    </div>
                </a></div>
        </section>
        <div style="width: 100%;float: left;">
            <div class="container" style="position: relative;">
                <img style="width: 250px;position: absolute;z-index: 10;bottom: 20px;"
                     src="{{ asset('assets/img/tu-hao-thuong-hieu-quoc-gia.png') }}" alt="">
            </div>
        </div>
        <section class="box-intro">
            <div class="container">
                <div class="box-intro__content">
                    <div class="box-intro__content-detail animated" data-animate="fadeInLeft">
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
                    </div>
                    <div class="box-intro__content-media animated" data-animate="fadeInRight">
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
                    <div class="product-widget animated" data-animate="fadeInUp">
                        <div class="product-widget__media square">
                            <img src="{{ asset('assets/img/xop_eps_1.jpg') }}" alt="xop-eps-3-1">
                        </div>
                        <div class="product-widget__content">
                            <div class="product-widget__content-center">
                                <h2 class="product-widget__content-title">XỐP EPS</h2>
                                <div class="product-widget__content-desc">
                                    Công ty EPS Hải Phòng cung cấp các sản phẩm EPS với nhiều ứng dụng khác nhau
                                    trong xây dựng, bao bì và công nghiệp, đáp ứng nhu cầu đa dạng của khách hàng trong
                                    các
                                    lĩnh vực này.
                                </div>
                                <div class="product-widget__content-link">
                                    <a href="/san-pham#xop-eps" class="btn-primary">Xem thêm <i
                                            class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-widget animated" data-animate="fadeInUp">
                        <div class="product-widget__media square">
                            <img src="{{ asset('assets/img/xop_khuan_1.jpg') }}" alt="xop-khuan-2">
                        </div>
                        <div class="product-widget__content">
                            <div class="product-widget__content-center">
                                <h2 class="product-widget__content-title">XỐP ĐỊNH HÌNH</h2>
                                <div class="product-widget__content-desc">
                                    Công ty EPS Hải Phòng chuyên sản xuất xốp định hình chất lượng cao, được ứng dụng rộng
                                    rãi
                                    trong các ngành công nghiệp và xây dựng.
                                </div>
                                <div class="product-widget__content-link">
                                    <a href="/san-pham#xop-dinh-hinh" class="btn-primary">Xem thêm <i
                                            class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-widget animated" data-animate="fadeInUp">
                        <div class="product-widget__media square">
                            <img src="{{ asset('assets/img/xop_xps_1.jpg') }}" alt="xop-xps">
                        </div>
                        <div class="product-widget__content">
                            <div class="product-widget__content-center">
                                <h2 class="product-widget__content-title">XỐP XPS</h2>
                                <div class="product-widget__content-desc">
                                    Công ty EPS Hải Phòng chuyên sản xuất xốp XPS chất lượng cao, đáp ứng các nhu cầu đa
                                    dạng trong xây dựng và công nghiệp.
                                </div>
                                <div class="product-widget__content-link">
                                    <a href="/san-pham#xop-xps" class="btn-primary">Xem thêm <i
                                            class="fa fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-home">
            <div class="container">
                <div class="news-home__list animated" data-animate="fadeInLeft">
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
    <script type="text/javascript">
        $('.fancybox-media').fancybox({
            helpers: {
                thumbs: {
                    width: 75,
                    height: 50
                }
            }
        });
    </script>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.item-messenger').on('click', function (e) {
                e.preventDefault();
                $('.fb-button').css('display', 'none');
                $('.fb-widget').css('display', 'block');
                $('.fb-widget').css('opacity', 1);
                $('.fb-overlay').css('display', 'block');
                $('textarea._58an').focus();
            });
        });
    </script>
@endsection
