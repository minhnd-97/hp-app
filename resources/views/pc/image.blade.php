@extends('pc.base')
@section('content')
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
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease;
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

        <!-- Image Gallery Section -->
        <section class="image-gallery">
            <div class="container">
                <div class="title">
                    <h1 class="title-text">Thư Viện Hình Ảnh Sản Phẩm</h1>
                    <span class="title-border"></span>
                </div>
                <div class="gallery-content">
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926448280_0a18c611115cce8fb4fe06cc46fa8926.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926450155_b1d2276c0ffcd639c096b16a144d8941.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926468074_6e4a1d46063db26bd2cf8b0342720e8b.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926469924_36f33e3eb8f2d971466ef674ac1b0805.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926470874_33fd87ea079ff7054e22f2cddc2cbdff.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926474316_da35d82924eb397b90e5147e65671f1f.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926498226_5edd49c77f4e903ce84b91d34461b955.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926498929_dd5117ec8888923d825c7e981bcb1885.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926502050_4d00f77c83d20ddee85c465a67ce26f4.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926504178_01ddcd7db2c9f6a5948674061015b351.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991926506739_da227d043a10b5c3b67a273439864146.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991929856207_51c2bb678231e576f4d9d4f65101c2eb.jpg') }}" alt="Product Image 1"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991929859992_5e3f62dc8656ed7a42b93e58aadf80c7.jpg') }}" alt="Product Image 2"
                             onclick="openModal(this)">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('assets/img/z5991929866585_fb3658df5a3caeac92298a4d554f6d7d.jpg') }}" alt="Product Image 3"
                             onclick="openModal(this)">
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




