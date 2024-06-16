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
                        {{--<div class="box-intro__content-detail__link">
                            <a href="#" class="btn-primary">Xem thêm <i class="fa fa-caret-right"></i></a>
                        </div>--}}
                    </div>
                    <div class="box-intro__content-media animated" data-animate="fadeInRight">
                        <a data-fancybox="gallery" class="fancybox-media media-ytb" href="https://youtu.be/APOXWO40eIY">
                            <img src="{{ asset('assets/img/detail_home.jpg') }}" alt="">
                            <span class="media-play"><i class="fa fa-play"></i></span>
                        </a>
                    </div>
                </div>
                {{--<div class="box-intro__slide animated" data-animate="fadeInUp">
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/astm-medium.png" alt="astm" title="ASTM">

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/logo-bsen-medium.png" alt="logo-bsen" title="BS EN">

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/jis-medium.jpg" alt="jis" title="JIS">

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/iso-14001-medium.jpg" alt="iso-14001" title="ISO 14001:2015">

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/9001-2015-medium.png" alt="9001-2015" title="ISO 9001:2015">

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-image">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/tcvn-medium.jpg" alt="tcvn" title="TCVN">

                        </div>
                    </div>
                </div>--}}
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

        <section class="news-slide animated" data-animate="fadeInUp">
            <div class="container">
                <div class="title">
                    <p class="title-text">Công trình</p>
                    <span class="title-border"></span>
                </div>
                <div class="news-slide__list">
                    <div class="news-slide__list-item">
                        <div class="item">
                            <div class="item-image">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/nhiet-dien-mong-duong-large.jpg"
                                     alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Nhà máy Nhiệt điện Mông Dương</h3>
                                </a></div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/nhiet-dien-quang-ninh-large.jpg"
                                     alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Nhà máy Nhiệt điện Quảng Ninh</h3>
                                </a></div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img
                                    src="https://sudospaces.com/hoaphat-com-vn/2019/10/nhiet-dien-nghi-son-1-1024x611-large.jpg"
                                    alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Nhà máy nhiệt điện Nghi Sơn 1</h3>
                                </a></div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/cao-toc-hn-hai-phong-large.jpg"
                                     alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Đường cao tốc Hà Nội – Hải Phòng</h3>
                                </a></div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img
                                    src="https://sudospaces.com/hoaphat-com-vn/2019/10/trung-tam-truyen-hinh-vn-large.jpg"
                                    alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Trung tâm truyền hình Việt Nam</h3>
                                </a></div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img
                                    src="https://sudospaces.com/hoaphat-com-vn/2019/10/cao-toc-noi-bai-lao-cai-large.jpg"
                                    alt="">
                            </div>
                            <div class="item-info"><a
                                    href="#">
                                    <h3 class="item-info__title">Đường cao tốc Nội Bài – Lào Cai</h3>
                                </a></div>
                        </div>
                    </div>
                    {{--                <div class="news-slide__list-item">
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/cang-cai-mep-thi-vai90317601-dhrh-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cang-cai-mep.html">
                                                    <h3 class="item-info__title">Cảng Cái Mép</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/cau-can-vanh-dai-3-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/du-an-cau-can-duong-vanh-dai-3.html">
                                                    <h3 class="item-info__title">Dự án Cầu cạn đường vành đai 3</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/metro-nhon-ga-ha-noi-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/tuyen-metro-nhon--ga-ha-noi.html">
                                                    <h3 class="item-info__title">Tuyến Metro Nhổn - ga Hà Nội</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/times-city-park-hill-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/times-city-park-hill.html">
                                                    <h3 class="item-info__title">Times City Park Hill</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/formosa-ha-tinh-1024x768-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/du-an-formosa-ha-tinh.html">
                                                    <h3 class="item-info__title">Dự án Formosa Hà Tĩnh</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/design-of-cao-lanh-bridge-1024x620-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cau-cao-lanh.html">
                                                    <h3 class="item-info__title">Cầu Cao Lãnh</h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="news-slide__list-item">
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/cau-vam-cong-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cau-vam-cong.html">
                                                    <h3 class="item-info__title">Cầu Vàm Cống</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/nhiet-dien-thai-binh-1-1024x683-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/nha-may-nhiet-dien-thai-binh-1.html">
                                                    <h3 class="item-info__title">Nhà máy Nhiệt điện Thái Bình 1</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/12/khu-do-thi-sa-la-tphcm-1024x576-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/khu-do-thi-sala--tp-ho-chi-minh.html">
                                                    <h3 class="item-info__title">Khu đô thị Sala - TP.Hồ Chí Minh</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2021/03/san-bay-nb-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cai-tao-duong-bang-san-bay-quoc-te-noi-bai.html">
                                                    <h3 class="item-info__title">Cải tạo đường băng sân bay quốc tế Nội Bài</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2021/03/20170515122854-cau-long-thanh-1468229670-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cao-toc-long-thanh--dau-giay.html">
                                                    <h3 class="item-info__title">Cao Tốc Long Thành - Dầu Giây</h3>
                                                </a></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-image">
                                                <img src="https://sudospaces.com/hoaphat-com-vn/2021/03/phoi-canh-cau-my-thuan-2-1593413234-width1004height565-large.jpg" alt="">
                                            </div>
                                            <div class="item-info"><a href="https://thep.hoaphat.com.vn/cong-trinh/cau-my-thuan-2.html">
                                                    <h3 class="item-info__title">Cầu Mỹ Thuận 2</h3>
                                                </a></div>
                                        </div>
                                    </div>--}}
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
                        <div class="item"><a
                                href="#">
                                <div class="item-image">
                                    <img
                                        src="https://sudospaces.com/hoaphat-com-vn/2024/05/z5441591954692-8e92e61daade317422aab41bd0249445.jpg"
                                        alt="z5441591954692-8e92e61daade317422aab41bd0249445">
                                </div>
                                <div class="item-info">
                                    <div class="item-info__title">
                                        <p class="item-info__title-time time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            15/05/2024
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            10:23
                                        </p>
                                        <h3 class="item-info__title-text">Khởi công xây dựng dự án Trường Tiểu học Bình
                                            Đông huyện Bình ...</h3>
                                        <p class="item-info__title-desc"> Sáng ngày 13/5/2024, tại Khu dân cư hạ lưu
                                            sông Trà Bồng - Đập Cà Ninh thuộc xã Bình Đông, huyện Bình Sơn, tỉnh Quảng
                                            Ngãi, Công ty CP ...</p>
                                    </div>
                                </div>
                            </a></div>
                        <ul class="item-list">
                            <li>
                                <a href="#">
                                    Sản lượng xốp EPS, sản lượng xốp XPS của công ty EPS cao nhất từ đầu năm 2024
                                </a></li>
                            <li>
                                <a href="#">
                                    Bảng giá xốp tôn nền, xốp nâng sàn, lót sàn âm mới nhất 2024
                                </a></li>
                            <li>
                                <a href="#">
                                    Báo giá tấm Panel chống cháy chuẩn chất lượng
                                </a></li>
                        </ul>
                        <div class="item-link">
                            <a href="/tin-tuc/tin-cong-ty" class="btn-primary">Xem thêm <i
                                    class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="news-home__list animated" data-animate="fadeInRight">
                    <div class="title">
                        <a href="https://www.hoaphat.com.vn/tin-tuc">
                            <p class="title-text">Tin công nghệ</p>
                        </a>
                    </div>

                    <div class="news-home__list-box">
                        <div class="item"><a
                                href="#"
                                target="_blank">
                                <div class="item-image">
                                    <img src="{{ asset('assets/img/block_home_1.jpg') }}">
                                </div>
                                <div class="item-info">
                                    <div class="item-info__title">
                                        <p class="item-info__title-time time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            30/05/2024
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>

                                        </p>
                                        <h3 class="item-info__title-text">EPS HẢI PHONG đưa vào sản xuất xốp chống
                                            cháy</h3>
                                        <p class="item-info__title-desc">
                                            Cuối tháng 5, EPS HẢI PHONG đã cho ra lô hàng xốp đầu tiên có khả năng chống
                                            cháy...</p>
                                    </div>
                                </div>
                            </a></div>

                        <ul class="item-list">
                            <li>
                                <a href="#">
                                    Tấm Vách, Tấm Mái Panel – Bộ đôi hoàn hảo cho nhà lắp ghép
                                </a></li>
                            <li>
                                <a href="#">
                                    Panel chống cháy chuẩn chất lượng
                                </a></li>
                            <li>
                                <a href="#">
                                    Ứng dụng xốp EPS vào nâng sàn
                                </a></li>
                        </ul>
                        <div class="item-link">
                            <a href="https://www.hoaphat.com.vn/tin-tuc" class="btn-primary">Xem thêm <i
                                    class="fa fa-caret-right"></i></a>
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
