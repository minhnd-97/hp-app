@extends('mobile.base')

@section('content')

    <main class="main">
        <section class="page-title">
            <div class="page-title__background">
                <img src="https://sudospaces.com/hoaphat-com-vn/2020/03/web-thep-1920x600px-08.png" alt="">
            </div>
            <div class="container">
                <div class="page-title__text">Tin tức</div>

            </div>
        </section>

        <section class="news-categories">
            <div class="container news-categories__box">
                <div class="title"><a href="/tin-tuc/tin-cong-ty">
                        <div class="title-text">Tin công ty</div>
                        <span class="title-border"></span>
                    </a></div>
                <div class="news-categories__link">
                    <a href="/tin-tuc/tin-cong-ty">Xem thêm <i class="fa fa-caret-right"></i></a>
                </div>
                <div class="news-categories__list">
                    @foreach($news as $content)
                        <div class="item">
                            <a href="{{ route('new.detail', ['id' => $content['id']]) }}">
                                <div class="item-image">
                                    <img src="{{ $content['content_details'][0]['image'] }}" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="item-info__time time">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $content['date'] }}
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        {{ $content['time'] }}
                                    </div>
                                    <h3 class="item-info__title">{{ $content['title'] }}</h3>
                                </div>
                            </a></div>
                    @endforeach
                </div>
            </div>
        </section>

{{--        <section class="news-categories" style="margin-bottom: 30px">--}}
{{--            <div class="container news-categories__box">--}}
{{--                <div class="title"><a href="#" target="_blank">--}}
{{--                        <div class="title-text">Tin công nghệ</div>--}}
{{--                        <span class="title-border"></span>--}}
{{--                    </a></div>--}}
{{--                <div class="news-categories__link">--}}
{{--                    <a href="#" target="_blank">Xem thêm --}}
{{--                        <i class="fa fa-caret-right"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="news-categories__list">--}}
{{--                    <div class="item"><a--}}
{{--                            href="https://www.hoaphat.com.vn/tin-tuc/hoa-phat-lot-top-100-cong-ty-lon-nhat-khu-vuc-dong-nam-a.html"--}}
{{--                            target="_blank">--}}
{{--                            <div class="item-image">--}}
{{--                                <img src="https://sudospaces.com/hoaphat-com-vn/2024/06/picture5.jpg" alt="picture5">--}}
{{--                            </div>--}}
{{--                            <div class="item-info">--}}
{{--                                <div class="item-info__time time">--}}
{{--                                    <i class="fa fa-calendar" aria-hidden="true"></i>--}}
{{--                                    20/06/2024--}}
{{--                                    <i class="fa fa-clock-o" aria-hidden="true"></i>--}}

{{--                                </div>--}}
{{--                                <h3 class="item-info__title">Hòa Phát lọt top 100 công ty lớn nhất khu vực Đông Nam--}}
{{--                                    Á</h3>--}}
{{--                            </div>--}}
{{--                        </a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


    </main>

@endsection
