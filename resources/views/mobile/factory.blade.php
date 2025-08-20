@extends('mobile.base')
@section('content')
    <style>
        .factory-content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            width: 100%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-left: auto;
        }
        .factory-scale {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        .scale-item {
            background: rgba(255,255,255,0.9);
            padding: 20px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.08);
        }
        .scale-item h3 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #1d4ed8;
        }
        .scale-item p {
            font-size: 15px;
            color: #333;
        }
    </style>

    <style>
        .products-details__content-detail table tbody tr td p {
            max-height: unset !important;
        }

        .image-gallery {
            width: 100%;
            clear: both;
            float: left;
            padding: 60px 0;
            background: #ffffff;
        }

        .gallery-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: 250px; /* fix chiều cao đồng đều */
            object-fit: cover; /* cắt ảnh cho cân đối, không méo */
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 35px;
            color: #ffffff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal-content, .close {
            animation: zoom 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }


    </style>
    <main class="main">
        <!-- Giới thiệu chung về xưởng -->
        <section class="intro-short bg-cover bg-center"
                 style="background: url('https://sudospaces.com/hoaphat-com-vn/2019/10/bg-intro-product.png');">
            <div class="container mx-auto px-4 py-10">
                <div class="box-intro__content align-items-center">

                    <div class="intro-short__content-title text-2xl font-bold mb-4">
                        Xưởng sản xuất EPS Hải Phong<br>
                        <span class="text-blue-600">"Công nghệ hiện đại – Quy mô hàng đầu"</span>
                    </div>

                    <!-- Nội dung giới thiệu -->
                    <div class="box-intro__content-detail" style="padding-top: 0">
                        <div class="intro-short__content-detail factory-content text-justify text-gray-800 leading-relaxed space-y-4">
                            <p>
                                Xưởng sản xuất EPS Hải Phong được đầu tư đồng bộ với dây chuyền hiện đại, diện tích rộng lớn,
                                và vị trí thuận lợi tại các khu công nghiệp trọng điểm. Với trang thiết bị tiên tiến,
                                chúng tôi có khả năng sản xuất và cung cấp sản lượng lớn mỗi năm, đáp ứng nhu cầu khắt khe
                                từ thị trường trong nước và quốc tế.
                            </p>
                            <p>
                                Các sản phẩm tại xưởng được kiểm soát chất lượng nghiêm ngặt, từ nguyên liệu đầu vào
                                đến thành phẩm, đảm bảo đạt tiêu chuẩn quốc tế trong xây dựng, cách nhiệt và đóng gói.
                            </p>
                        </div>
                    </div>

                    <!-- Video xưởng -->
                    <div class="box-intro__content-media">
                        <video autoplay muted loop playsinline
                               class="w-full h-auto rounded-xl shadow-lg" style="width: 100%">
                            <source src="{{ asset('assets/img/video-home.mp4') }}" type="video/mp4">
                            Trình duyệt của bạn không hỗ trợ video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Gallery Section -->
        <section class="image-gallery">
            <div class="container">
                <div class="title">
                    <h1 class="title-text">Hình Ảnh Xưởng</h1>
                    <span class="title-border"></span>
                </div>
                <div class="gallery-content">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383756939_301e538fedbf9adfda9f0a8b94825f01.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383522598_cc18aabd77eec288c178bff3645d2d35.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383538625_e285db273a28dad18cc56e177363e4bc.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383543185_85f37c87a841b2f67e2bbb3bd5f4dd5c.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383577891_505aec08d73a043ee793918b7cf3d29c.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383581288_25b95c7d83b592725ef588daffbdc59e.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383582518_906d4b0e8674e819d12130f72b4a016b.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383671494_3f5fe442911f72a93606ed0c300f8caf.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383675577_a34cd21a991f9a2eadc2c8d4c5d5c9f7.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383680544_54b287a280eb340112bd34fb2f1dd57d.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926506739_da227d043a10b5c3b67a273439864146.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383683486_e5426d8047386d1d1f37ee7d03d3c309.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383692668_378c53f9326c570dd4d8858859cf115f.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383695830_98b5aed583362edc44b8014c6c3da6bb.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383581288_25b95c7d83b592725ef588daffbdc59e.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z6921383705730_0e294e05b2214eb7f4be5181aa5e9ea2.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                </div>
            </div>
        </section>

        <!-- Quy mô & năng lực sản xuất -->
        <section class="intro-short" style="background: url('https://sudospaces.com/hoaphat-com-vn/2019/10/bg-intro-product.png');">
            <div class="container">
                <div class="title-text">Quy mô & Năng lực sản xuất</div>
                <div class="factory-scale">
                    <div class="scale-item">
                        <h3>10,000 m²</h3>
                        <p>Diện tích nhà xưởng</p>
                    </div>
                    <div class="scale-item">
                        <h3>50+</h3>
                        <p>Máy móc & thiết bị hiện đại</p>
                    </div>
                    <div class="scale-item">
                        <h3>5,000 tấn</h3>
                        <p>Công suất sản xuất EPS/năm</p>
                    </div>
                    <div class="scale-item">
                        <h3>100+</h3>
                        <p>Nhân sự tay nghề cao</p>
                    </div>
                    <div class="scale-item">
                        <h3>2</h3>
                        <p>Chi nhánh Bắc & Nam</p>
                    </div>
                    <div class="scale-item">
                        <h3>ISO 9001</h3>
                        <p>Hệ thống quản lý chất lượng</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal Popup -->
        <div id="imageModal" class="modal" onclick="closeModal()">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
    </main>
@endsection
@section('js')
    <script>
        function openModal(element) {
            var modal = document.getElementById("imageModal");
            var modalImage = document.getElementById("modalImage");
            modal.style.display = "block";
            modalImage.src = element.src;
        }

        function closeModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }

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
