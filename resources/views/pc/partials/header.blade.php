<header class="header">
    <div class="container">
        <div class="logo">
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>
            </h1>
        </div>
        <div class="header-main">
            <div class="header-main__bottom">
                <nav class="menu">
                    <ul class="menu-container">
                        <li class="menu-item">
                            <a href="/gioi-thieu" title=""
                            >Giới thiệu</a>
                            <ul class="menu-child">
                                <li class="menu-child__item"><a href="/gioi-thieu#introduction">Giới thiệu chung</a></li>
                                <li class="menu-child__item"><a href="/gioi-thieu#products">Sản phẩm chính</a></li>
                                <li class="menu-child__item"><a href="/gioi-thieu#history">Lịch sử hình thành</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="/san-pham" title=""
                            >Sản phẩm</a>
                            <ul class="menu-child">
                                <li class="menu-child__item"><a href="/san-pham#xop-eps">Xốp EPS</a></li>
                                <li class="menu-child__item"><a href="/san-pham#xop-dinh-hinh">Xốp định hình</a></li>
                                <li class="menu-child__item"><a href="/san-pham#xop-xps">Xốp XPS</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="/he-thong-phan-phoi" title=""
                            >Hệ thống phân phối</a>
                        </li>
                        <li class="menu-item">
                            <a href="/cong-trinh" title=""
                            >Công trình</a>
                        </li>
                        <li class="menu-item">
                            <a href="/tin-tuc" title=""
                            >Tin tức</a>
                            <ul class="menu-child">
                                <li class="menu-child__item"><a href="/tin-tuc/tin-cong-ty">Tin công ty</a></li>
                                <li class="menu-child__item"><a href="/tin-cong-nghe/tin-cong-nghe">Tin công nghệ</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
