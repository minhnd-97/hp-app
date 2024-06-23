@extends('mobile.base')

@section('content')
<main class="main">
    <section class="page-title">
        <div class="page-title__background">
            <img src="{{ asset('assets/img/banner_01_1.jpg') }}" alt="">
        </div>
        <div class="container">
            <h1 class="page-title__text main-color">Sản phẩm xốp EPS HẢI PHONG</h1>
        </div>
    </section>

    <section class="product-box">
        <section class="products-details " id="xop-eps">
            <div class="container">
                <div class="products-details__gallery" data-garelly_box>
                    <div class="products-details__gallery-slide">
                        <div class="item">
                            <img src="{{ asset('assets/img/banner_02.jpg') }}"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/banner_08.jpeg') }}"
                                 alt="">
                        </div>
                    </div>
                    <div class="products-details__gallery-fullscreen">
                        <a href="#">
                            <img data-garelly src="https://thep.hoaphat.com.vn/assets/img/icon/icon-fullscreen.png"
                                 alt="">
                        </a>
                    </div>
                    <div class="products-details__gallery-lightbox hidden" data-garelly_open>
                        <a href="{{ asset('assets/img/banner_02.jpg') }}">
                            <img src="{{ asset('assets/img/banner_02.jpg') }}"/>
                        </a>
                        <a href="{{ asset('assets/img/banner_08.jpeg') }}">
                            <img src="{{ asset('assets/img/banner_08.jpeg') }}"/>
                        </a>
                    </div>
                </div>
                <div class="products-details__content">
                    <div class="heading">
                        <h2 class="heading-text">Xốp EPS</h2>
                    </div>


                    <div class="products-details__content-detail " data-content_show="1_0">
                        <p></p>
                        <table>
                            <tbody>
                            <tr>
                                <td>Kích cỡ</td>
                                <td>
                                    <p>
                                        Độ dày: Từ 5mm đến 1000mm; Chiều rộng: Từ 600mm đến 1200mm; Chiều dài: Từ
                                        1000mm đến 6000mm
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiêu chuẩn</td>
                                <td><p>ASTM C578 (Hoa Kỳ), EN 13163 (Châu Âu), TCVN 8257 (Việt Nam)</p></td>
                            </tr>
                            <tr>
                                <td>Trọng lượng</td>
                                <td><p>Từ 8 kg/m³ đến 35 kg/m³ (tùy thuộc vào mật độ)</p></td>
                            </tr>
                            <tr>
                                <td>Ứng dụng</td>
                                <td>
                                    <p>Xây dựng: Sử dụng làm cách nhiệt cho tường, sàn, trần nhà, và mái nhà.</p>
                                    <p>Đóng gói: Sử dụng để bảo vệ sản phẩm trong quá trình vận chuyển.</p>
                                    <p>Trang trí: Sử dụng trong các công trình trang trí nội thất và ngoại thất.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Ưu điểm</td>
                                <td>
                                    <p>Cách nhiệt tốt: Xốp EPS có khả năng cách nhiệt cao, giúp tiết kiệm năng
                                        lượng.</p>
                                    <p>Nhẹ và dễ xử lý: Trọng lượng nhẹ, dễ dàng cắt và lắp đặt.</p>
                                    <p>Chống ẩm và chống nước: Không bị ảnh hưởng bởi độ ẩm và nước.</p>
                                    <p>Bền và ổn định: Khả năng chịu nén tốt, không bị biến dạng theo thời gian.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Chi tiết</td>
                                <td>
                                    <a class="btn-primary btn-green" href="tel:0931801102" target="_blank">
                                        Mua hàng
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .products-details__content-detail table tbody tr td p a {
                margin: 0;
                padding: 0;
                color: #1293cb;
            }
        </style>
        <section class="products-details " id="xop-dinh-hinh">
            <div class="container">
                <div class="products-details__gallery" data-garelly_box>
                    <div class="products-details__gallery-slide">
                        <div class="item">
                            <img src="{{ asset('assets/img/xop-model-1.jpg') }}"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/xop-model-2.jpg') }}"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/xop_khuan_1.jpg') }}"
                                 alt="">
                        </div>
                    </div>
                    <div class="products-details__gallery-fullscreen">
                        <a href="#">
                            <img data-garelly src="https://thep.hoaphat.com.vn/assets/img/icon/icon-fullscreen.png"
                                 alt="">
                        </a>
                    </div>
                    <div class="products-details__gallery-lightbox hidden" data-garelly_open>
                        <a href="{{ asset('assets/img/xop-model-1.jpg') }}">
                            <img src="{{ asset('assets/img/xop-model-1.jpg') }}"/>
                        </a>
                        <a href="{{ asset('assets/img/xop-model-2.jpg') }}">
                            <img src="{{ asset('assets/img/xop-model-2.jpg') }}"/>
                        </a>
                        <a href="{{ asset('assets/img/xop_khuan_1.jpg') }}">
                            <img src="{{ asset('assets/img/xop_khuan_1.jpg') }}"/>
                        </a>
                    </div>
                </div>
                <div class="products-details__content">
                    <div class="heading">
                        <h2 class="heading-text">XỐP ĐỊNH HÌNH</h2>
                    </div>


                    <div class="products-details__content-detail " data-content_show="3_0">
                        <p></p>
                        <table>
                            <tbody>
                            <tr>
                                <td>Tiêu chuẩn</td>
                                <td><p>ASTM C578: Hoa Kỳ, EN 13163: Châu Âu, TCVN 8257: Việt Nam</p></td>
                            </tr>
                            <tr>
                                <td>Công Nghệ Sử Dụng</td>
                                <td>
                                    <p>CNC (Computer Numerical Control): Đảm bảo độ chính xác cao,
                                        đường cắt gọn gàng và theo yêu cầu thẩm mỹ. CNC giúp tạo ra các sản phẩm xốp
                                        định hình với độ chính xác và chất lượng cao, phù hợp với mọi nhu cầu của
                                        khách hàng.</p></td>
                            </tr>
                            <tr>
                                <td>Ứng Dụng</td>
                                <td>
                                    <p>Đóng gói: Bảo vệ sản phẩm trong quá trình vận chuyển, chẳng hạn như góc chèn
                                        cho tivi, tủ lạnh, và khay hộp cho nước yến, nước ngọt.</p>
                                    <p>Trang trí: Dùng trong các công trình trang trí nội thất và ngoại thất,
                                        tạo hình chữ, mô hình.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Ưu Điểm</td>
                                <td>
                                    <p>Nhẹ và dễ xử lý: Dễ dàng lắp đặt, thuận tiện trong quá trình sử dụng.</p>
                                    <p>Chống ẩm và chống nước: Không bị ảnh hưởng bởi độ ẩm và nước.</p>
                                    <p>Bền và ổn định: Khả năng chịu nén tốt, không bị biến dạng theo thời gian.</p>
                                    <p>Thời gian thực hiện ngắn: Khoảng 2 – 5 ngày, đảm bảo hoàn thành đơn hàng số
                                        lượng lớn đúng tiến độ.
                                    </p>
                                    <p>Đa dạng màu sắc: Đáp ứng theo yêu cầu của khách hàng, màu trắng vẫn được ưa
                                        chuộng vì phù hợp với hầu hết các sản phẩm.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Chi tiết</td>
                                <td>
                                    <a class="btn-primary btn-green" href="tel:0931801102" target="_blank">
                                        Mua hàng
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .products-details__content-detail table tbody tr td p a {
                margin: 0;
                padding: 0;
                color: #1293cb;
            }
        </style>
        <section class="products-details " id="xop-xps">
            <div class="container">
                <div class="products-details__gallery" data-garelly_box>
                    <div class="products-details__gallery-slide">
                        <div class="item">
                            <img src="{{ asset('assets/img/xps-2.jpg') }}"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/xps-3.jpg') }}"
                                 alt="">
                        </div>
                    </div>
                    <div class="products-details__gallery-fullscreen">
                        <a href="#">
                            <img data-garelly src="https://thep.hoaphat.com.vn/assets/img/icon/icon-fullscreen.png"
                                 alt="">
                        </a>
                    </div>
                    <div class="products-details__gallery-lightbox hidden" data-garelly_open>
                        <a href="{{ asset('assets/img/xps-2.jpg') }}">
                            <img src="{{ asset('assets/img/xps-2.jpg') }}"/>
                        </a>
                        <a href="{{ asset('assets/img/xps-3.jpg') }}">
                            <img src="{{ asset('assets/img/xps-3.jpg') }}"/>
                        </a>
                    </div>
                </div>
                <div class="products-details__content">
                    <div class="heading">
                        <h2 class="heading-text">XỐP XPS</h2>
                    </div>
                    <div class="products-details__content-detail " data-content_show="2_0">
                        <p></p>
                        <table>
                            <tbody>
                            <tr>
                                <td>Tiêu chuẩn</td>
                                <td><p>ASTM C578: Hoa Kỳ, EN 13163: Châu Âu, TCVN 8257: Việt Nam</p></td>
                            </tr>
                            <tr>
                                <td>Quy trình sản xuất</td>
                                <td>
                                    <p>XPS được sản xuất bằng cách ép và thổi khí vào hỗn hợp polystyrene nóng chảy
                                        để tạo ra tấm xốp có cấu trúc tế bào đóng rắn và homogenous.</p></td>
                            </tr>
                            <tr>
                                <td>Ứng Dụng</td>
                                <td>
                                    <p>XPS thường được sử dụng trong các ứng dụng cách nhiệt cho nền móng,
                                        tường hầm, và mái nhà.</p>
                                    <p>Được sử dụng làm vật liệu cách nhiệt và cách âm trong xây dựng
                                        và cả trong đóng gói bảo vệ.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Ưu Điểm</td>
                                <td>
                                    <p>Cách nhiệt và cách âm tốt: XPS có khả năng cách nhiệt cao và
                                        khả năng cách âm tốt, giúp tiết kiệm năng lượng và hạn chế tiếng ồn.</p>
                                    <p>Độ bền cơ học cao: Với cấu trúc tế bào đóng rắn, XPS có khả năng chịu nén và
                                        độ bền cơ học tốt, phù hợp cho các ứng dụng xây dựng khắc nghiệt.
                                    </p>
                                    <p>Chống thấm nước và hút ẩm thấp: XPS ít hấp thụ nước hơn so với các loại
                                        xốp khác, duy trì tính ổn định kích thước và hiệu suất cách nhiệt.</p>
                                    <p>Khả năng chống mài mòn và hóa chất: XPS có khả năng chống lại mài mòn và các
                                        hóa chất, nên phù hợp với các môi trường khắc nghiệt.
                                    </p>
                                    <p>Dễ gia công và lắp đặt: XPS dễ dàng cắt, uốn cong và gia công theo yêu cầu,
                                        giúp việc lắp đặt nhanh chóng và tiết kiệm chi phí.</p>
                                    <p>Tuổi thọ cao và bảo vệ môi trường: XPS có tuổi thọ lâu dài và có thể tái
                                        sử dụng, không chứa CFC, giảm thiểu tác động đến môi trường.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Chi tiết</td>
                                <td>
                                    <a class="btn-primary btn-green" href="tel:0931801102" target="_blank">
                                        Mua hàng
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .products-details__content-detail table tbody tr td p a {
                margin: 0;
                padding: 0;
                color: #1293cb;
            }
        </style>
    </section>
</main>
@endsection
