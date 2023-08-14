@isset($user_free_videos)
    @forelse ($user_free_videos as $user_free_video)
        <div class="col-lg-3 col-sm-6">
            @include('components.videoCardComponent', [
                'post' => $user_free_video,
            ])
        </div>

    @empty
        <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-video-camera" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No free videos yet</p>
            </div>
        </div>
    @endforelse
@endisset
