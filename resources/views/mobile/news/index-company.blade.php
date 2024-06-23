@extends('mobile.base')

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

        <div class="news-vetical">
            <div class="container">
                <div class="news-vetical__content">
                    <div class="title">
                        <div class="title-text">Tin công ty</div>
                        <span class="title-border"></span>
                    </div>
                    <div class="news-vetical__content-new">
                        @foreach($news as $item)
                            <div class="item">
                                <a href="{{ route('new.detail', $item['id']) }}">
                                    <div class="item-image">
                                        <img src="{{ $item['content_details'][0]['image'] }}" alt="{{ $item['title'] }}">
                                    </div>
                                    <div class="item-info">
                                        <div class="item-info__time time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ date('d/m/Y', strtotime($item['date'])) }}
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            {{ $item['time'] }}
                                        </div>
                                        <h3 class="item-info__title">{{ $item['title'] }}</h3>
                                        <div class="item-info__desc">{{ $item['content'] }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="news-vetical__content-pagination">
                        {{ $news->links('vendor.pagination.custom') }}
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
