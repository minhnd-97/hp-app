@extends('pc.base')

@section('content')
<main class="main">

    <section class="page-title">
        <div class="page-title__background">
            <img src="{{ asset("/assets/img/banner_03.jpeg") }}" alt="">
        </div>
        <div class="container">
            <div class="page-title__text">Tin tức</div>

        </div>
    </section>

    <div class="article">
        <div class="container">
            <div class="article-content">
                <div class="article-content__post">
                    <h1 class="article-content__post-title">{{ $new['title'] }}</h1>
                    <div class="article-content__post-info">
                        <ul>
                            <li><a><i class="fa fa-calendar"></i> {{ $new['date'] }}</a></li>
                            <li><a><i class="fa fa-clock-o"></i> {{ $new['time'] }}</a></li>
                            <li><a><i class="fa fa-user"></i> Admin</a></li>
                            <li><a href="/tin-tuc/tin-cong-ty"><i class="fa fa-tags"></i> Tin
                                    công ty</a></li>
                        </ul>
                    </div>
                    <div class="article-content__post-content css-content">
                        @foreach($new['content_details'] as $content)
                            <p><strong>{{ $content['text'] }}</strong></p>
                            <p><img style="display: block; margin-left: auto; margin-right: auto;"
                                    src="{{ $content['image'] }}"
                                    width="700"/></p>
                        @endforeach
                        <div class="tubo-media-item" style="text-align: right;"><strong>EPS News</strong></div>
                    </div>
                    <div class="share">
                        <div style="float: right;padding-top: 20px;" class="addthis_inline_share_toolbox_d0v4"></div>
                    </div>
                    <script type="text/javascript"
                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7aa5c25243057c"></script>
                </div>
            </div>
            <div class="sitebar">
                <div class="sitebar-item">
                    <div class="heading">
                        <div class="heading-text">Tin mới nhất</div>
                    </div>
                    <div class="sitebar-item__list">
                        @foreach($newData as $content)
                            <div class="item">
                                <a href="{{ route('new.detail', ['id' => $content['id']]) }}">
                                <div class="item-image">
                                    <img src="{{ $content['content_details'][0]['image'] }}" alt="">
                                </div>
                                <div class="item-info">
                                    <p class="item-info__title">{{ $content['title'] }}</p>
                                    <div class="item-info__time time">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $content['date'] }}
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        {{ $content['time'] }}
                                    </div>
                                </div>
                            </a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

