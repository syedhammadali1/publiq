{{-- This component has been used in profile page for timeline  section --}}


<div class="tab-pane fade" id="timeline" role="tabpanel">
    <div class="row">
        <div class="col-lg-3 col-md-12 mobile-leftside" id="profile-leftsidebar">
            <aside class="widget-area">

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

        @isset($user_posts)
            <div class="col-lg-6 col-md-12 mobile-newsarea" id="profile-areanews">
                @include('components.Home.NewsFeed.newsFeed', [
                    'user_posts' => $user_posts,
                ])
            </div>
        @endisset

        <div class="col-lg-3 col-md-12 mobile-rightside" id="profile-rightsidebar">
            <aside class="widget-area">

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


<style>
    #footer-website-content{
        display:none ! important;
    }
</style>
