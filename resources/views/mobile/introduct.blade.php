@extends('mobile.base')
@section('content')
    <style>
        .products-details__content-detail table tbody tr td p {
            max-height: unset !important;
        }
        .history-content {
            background-color: rgba(255, 255, 255, 0.8); /* Tạo nền mờ cho nội dung để dễ đọc */
            padding: 20px;
            width: 100%; /* Chiếm 2/3 chiều rộng */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-left: auto; /* Đẩy nội dung sang phải */
        }
        .introduction-content {
            background-color: rgba(255, 255, 255, 0.8); /* Tạo nền mờ cho nội dung để dễ đọc */
            padding: 20px;
            width: 100%; /* Chiếm 2/3 chiều rộng */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-left: auto; /* Đẩy nội dung sang phải */
        }
        .intro-short__content {
            width: 100%;
        }

    </style>
    <main class="main">
        <section class="page-title">
            <div class="page-title__background">
                <img src="{{ asset('assets/img/introuduct_2.jpg') }}" alt="">
            </div>
            <div class="container">
                <div class="page-title__text">GIỚI THIỆU</div>
            </div>
        </section>

        <section class="intro-short" id="introduction"
                 style="background: url({{ asset('assets/img/banner_01.jpg') }});">
            <div class="container">
                <div class="intro-short__content">
                    <div class="intro-short__content-title">
                        Công ty Xốp EPS Hải Phong<br>"Chất lượng hàng đầu trong sản phẩm xốp EPS tại Việt Nam"
                    </div>
                    <div class="intro-short__content-detail css-content introduction-content">
                        <p style="text-align: justify; line-height: 22.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                    Công ty Xốp EPS Hải Phong được thành lập vào năm 2018, là doanh nghiệp trẻ, năng động với lĩnh vực kinh doanh chính là sản xuất và cung cấp các sản phẩm xốp EPS chất lượng cao. Đặt mục tiêu trở thành đối tác tin cậy hàng đầu tại Việt Nam, Công ty Xốp EPS Hải Phong chuyên sản xuất xốp EPS, xốp hình và xốp chống cháy. Công ty đã nhanh chóng mở rộng thị trường, không chỉ cung cấp sản phẩm tại khu vực miền Bắc mà còn phát triển mạnh mẽ ở miền Nam, đáp ứng nhu cầu đa dạng và phong phú của khách hàng trên toàn quốc.
                </span>
                        </p>
                        <p style="text-align: justify; line-height: 22.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                    Các sản phẩm xốp EPS của công ty đáp ứng các tiêu chuẩn khắt khe trong nước và quốc tế, bao gồm ASTM C578 (Hoa Kỳ), EN 13163 (Châu Âu), và TCVN 8257 (Việt Nam). Với cam kết về chất lượng và an toàn, sản phẩm của Công ty Xốp EPS Hải Phong được sản xuất theo quy trình hiện đại, đáp ứng yêu cầu khắt khe trong các lĩnh vực xây dựng, cách nhiệt, và bảo vệ môi trường.
                </span>
                        </p>
                        <p style="text-align: justify; line-height: 22.5pt; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                    Dù mới thành lập nhưng Công ty Xốp EPS Hải Phong đã đạt được những bước tiến lớn trong ngành. Đội ngũ nhân sự có chuyên môn cao cùng cơ sở sản xuất được đầu tư kỹ lưỡng là nền tảng để công ty hướng tới vị thế dẫn đầu về chất lượng và uy tín trong lĩnh vực xốp EPS tại Việt Nam.
                </span>
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section class="intro-products" id="products" style="background: url('https://sudospaces.com/hoaphat-com-vn/2019/10/bg-intro-product.png');">
            <div class="container">
                <div class="title">
                    <div class="title-text">Sản phẩm chính</div>
                    <span class="title-border"></span>
                </div>
                <div class="intro-products__list">

                    <div class="item"><a href="/san-pham#xop-eps">
                            <div class="item-image">
                                <img src="{{ asset('assets/img/banner_02.jpg') }}" alt="xop-eps">
                            </div>
                            <div class="item-info">
                                <div class="item-info__title">Xốp EPS</div>
                                <div class="item-info__desc">
                                    <strong>Kích cỡ:</strong> Độ dày: 5mm - 1000mm, Chiều rộng: 600mm - 1200mm, Chiều dài: 1000mm - 6000mm.<br>
                                    <strong>Tiêu chuẩn:</strong> ASTM C578 (Hoa Kỳ), EN 13163 (Châu Âu), TCVN 8257 (Việt Nam).<br>
                                    <strong>Trọng lượng:</strong> 8 - 35 kg/m³.<br>
                                    <strong>Ứng dụng:</strong> Cách nhiệt tường, sàn, trần nhà; đóng gói và trang trí nội thất.<br>
                                    <strong>Ưu điểm:</strong> Cách nhiệt tốt, nhẹ, chống ẩm, bền và ổn định.
                                </div>
                            </div>
                        </a></div>

                    <div class="item"><a href="/san-pham#xop-dinh-hinh">
                            <div class="item-image">
                                <img src="{{ asset('assets/img/xop-model-2.jpg') }}" alt="xop-dinh-hinh">
                            </div>
                            <div class="item-info">
                                <div class="item-info__title">Xốp Định Hình</div>
                                <div class="item-info__desc">
                                    <strong>Tiêu chuẩn:</strong> ASTM C578, EN 13163, TCVN 8257.<br>
                                    <strong>Công Nghệ:</strong> CNC cho độ chính xác cao và chất lượng cắt tối ưu.<br>
                                    <strong>Ứng dụng:</strong> Đóng gói bảo vệ sản phẩm; trang trí nội thất, mô hình.<br>
                                    <strong>Ưu điểm:</strong> Nhẹ, chống ẩm, bền, đa dạng màu sắc và thời gian sản xuất ngắn.
                                </div>
                            </div>
                        </a></div>

                    <div class="item"><a href="/san-pham#xop-xps">
                            <div class="item-image">
                                <img src="{{ asset('assets/img/xps-2.jpg') }}" alt="xop-xps">
                            </div>
                            <div class="item-info">
                                <div class="item-info__title">Xốp XPS</div>
                                <div class="item-info__desc">
                                    <strong>Tiêu chuẩn:</strong> ASTM C578, EN 13163, TCVN 8257.<br>
                                    <strong>Quy trình sản xuất:</strong> Ép và thổi khí vào polystyrene nóng chảy.<br>
                                    <strong>Ứng dụng:</strong> Cách nhiệt nền móng, tường hầm, mái nhà; cách âm trong xây dựng.<br>
                                    <strong>Ưu điểm:</strong> Cách nhiệt tốt, chịu nén cao, chống nước, dễ gia công và tuổi thọ cao.
                                </div>
                            </div>
                        </a></div>

                </div>
            </div>
        </section>

        <section class="intro-short" id="introduction"
                 style="background: url('{{ asset('assets/img/ai.webp') }}');">
            <div class="container">
                <div class="title-text">Lịch sử hình thành</div>
                <div class="intro-short__content ">
                    <div class="intro-short__content-detail css-content history-content">
                        <p style="text-align: justify; line-height: 22.5pt; margin: 0cm 0cm 7.5pt 0cm;">
                    <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                        Công ty Xốp EPS Hải Phong được thành lập vào năm <strong>2018</strong>, tọa lạc tại
                        <strong>Lô 15, Đường H1, Khu công nghiệp Sóng Thần 2, Tân Đông Hiệp, Dĩ An, Bình Dương</strong>.
                        Với sứ mệnh trở thành đơn vị cung cấp xốp EPS uy tín, công ty không ngừng mở rộng và phát triển
                        sản phẩm, mang đến những sản phẩm chất lượng cho thị trường trong nước.
                    </span>
                        </p>
                        <p style="text-align: justify; line-height: 22.5pt; margin: 0cm 0cm 7.5pt 0cm;">
                    <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                        Vào tháng <strong>5 năm 2024</strong>, công ty đã mở rộng thêm chi nhánh tại
                        <strong>Lô 03.04, Cụm công nghiệp Nguyên Khê, Đông Anh, Hà Nội</strong>. Việc mở rộng này giúp
                        công ty đáp ứng tốt hơn nhu cầu của khách hàng tại khu vực miền Bắc và tăng cường năng lực sản xuất.
                    </span>
                        </p>
                        <p style="text-align: justify; line-height: 22.5pt; margin: 0cm 0cm 7.5pt 0cm;">
                    <span style="font-size: 11.5pt; font-family: 'Arial','sans-serif'; color: black;">
                        Công ty Xốp EPS Hải Phong không ngừng cập nhật công nghệ mới vào quy trình sản xuất, sử dụng
                        <strong>máy CNC 2D và 3D</strong> để tạo các sản phẩm xốp hình chính xác và đa dạng, đáp ứng
                        mọi yêu cầu về kỹ thuật và thẩm mỹ. Đội ngũ nhân viên chuyên nghiệp cùng với trang thiết bị hiện đại
                        là nền tảng để công ty phát triển và duy trì vị thế trong ngành.
                    </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
