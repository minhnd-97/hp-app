<section class="popup menu" data-popup_open="menu">
    <div class="popup-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>
    </div>
    <span class="popup-close" data-popup_close="menu">
        <img src="{{ asset('assets/img/header_close.png') }}" alt="">
    </span>
    <div class="menu-container">
        <ul>
            <li  class="has-child" >
                <a  href="/gioi-thieu"   title="">
                    Giới thiệu
                </a>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="/gioi-thieu#introduction" title=""
                        >Giới thiệu chung</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="/gioi-thieu#products" title=""
                        >Sản phẩm chính</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="/gioi-thieu#history" title=""
                        >Lịch sử hình thành</a>
                    </div>
                </div>
            </li>
            <li  class="has-child" >
                <a  href="/san-pham"   title=""
                >Sản phẩm</a>

                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="/san-pham#xop-eps" title=""
                        >Xốp EPS</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="/san-pham#xop-dinh-hinh" title=""
                        >Xốp định hình</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="/san-pham#xop-xps" title=""
                        >Xốp XPS</a>
                    </div>
                </div>
            </li>
            <li >
                <a  href="/he-thong-phan-phoi"   title=""
                >Hệ thống phân phối</a>
            </li>
            <li >
                <a  href="/cong-trinh"   title=""
                >Công trình</a>
            </li>
            <li  class="has-child" >
                <a  href="/tin-tuc"   title=""
                >Tin tức</a>

                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="/tin-tuc/tin-cong-ty" title=""
                        >Tin công ty</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="/tin-cong-nghe/tin-cong-nghe" title=""
                        >Tin công nghệ</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="quick-menu__content">
    <ul>
        <li>
            <a  href="/san-pham#xop-eps"   title=""
            >Xốp EPS</a>
        </li>
        <li>
            <a  href="/san-pham#xop-dinh-hinh"   title=""
            >Xốp định hình</a>
        </li>
        <li>
            <a  href="/san-pham#xop-xps"   title=""
            >Xốp XPS</a>
        </li>
    </ul>
</section>
