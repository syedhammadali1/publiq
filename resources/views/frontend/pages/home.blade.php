@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="row">
            <div class="col-lg-3 col-md-12 mobile-leftside">
                <aside class="widget-area side-home-slide">

                    @include('components.Home.widgetViewProfile', [
                        'skeleton' => true,
                    ])

                    @include('components.Home.widgetLikePhoto', [
                        'skeleton' => true,
                        'isPaid' => 0,
                    ])

                    @include('components.Home.widgetFollowSuggestion', [
                        'skeleton' => true,
                    ])

                    @include('components.Home.widgetAdvertisement', [
                        'skeleton' => true,
                    ])

                    @include('components.Home.widgetAudio', [
                        'skeleton' => true,
                        'isPaid' => 0,
                    ])

                </aside>
            </div>

            <div class="col-lg-6 col-md-12 mobile-newsarea">
                @include('components.Home.NewsFeed.newsFeed', [
                    'skeleton' => true,
                ])
            </div>

            <div class="col-lg-3 col-md-12 mobile-rightside">
                <aside class="widget-area side-home-slide-right">
                    @include('components.Home.widgetWatchVideo', [
                        'skeleton' => true,
                    ])
                    @include('components.Home.widgetAdvertisement', [
                        'skeleton' => true,
                    ])
                    @include('components.Home.widgetLikePhoto', [
                        'skeleton' => true,
                        'isPaid' => 1,
                    ])
                    @include('components.Home.widgetAudio', [
                        'skeleton' => true,
                        'isPaid' => 1,
                    ])
                    @include('components.Home.widgetVideo', [
                        'skeleton' => true,
                    ])
                </aside>
            </div>
        </div>
    </div>
@endsection
