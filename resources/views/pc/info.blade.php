@extends('pc.base')
@section('content')
    <style>
        .products-details__content-detail table tbody tr td p {
            max-height: unset !important;
        }

    </style>
    <main class="main">
        <section class="page-title">
            <div class="page-title__background">
                <img src="{{ asset('assets/img/info.webp') }}" alt="">
            </div>
            <div class="container">
                <div class="page-title__text">Hệ thống phân phối</div>
            </div>
        </section>
        <section class="agency">
            <div class="container">
                <div class="title">
                    <h1 class="title-text">Hệ thống phân phối</h1>
                    <span class="title-border"></span>
                </div>
                <div class="agency-content default">
                    <div class="agency-content__box default">
                        <div class="box default">
                            <div class="box-title default">
                                <h2><i class="fa fa-map-marker"></i> TP HCM</h2>
                            </div>
                            <div class="box-info">
                                <p><strong>Chi nhánh TP.Hồ Chí Minh</strong></p>
                                <p>Lô15 Đường H1, Kcn Sóng Thần 2, Tân Đông Hiệp, Dĩ An, Bình Dương</p>
                                <p>Điện thoại: <a href="tel:0931801102">093 180 1102</a></p>
                            </div>
                        </div>
                        <div class="box default">
                            <div class="box-title default">
                                <h2><i class="fa fa-map-marker"></i> Hà Nội</h2>
                            </div>
                            <div class="box-info">
                                <p><strong>Chi nhánh TP.Hà Nội</strong></p>
                                <p>Lô 03.04 Cụm CN Nguyên Khê, Đông Anh, Hà Nội</p>
                                <p>Điện thoại: <a href="tel:0931801102">093 180 1102</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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



