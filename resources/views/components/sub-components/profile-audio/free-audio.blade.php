@isset($user_free_audios)
    @forelse ($user_free_audios as $user_free_audio)
        <div class="col-lg-3 col-sm-6">
            @include('components.audioCardComponent', [
                'post' => $user_free_audio,
            ])
        </div>
    @empty
        <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-microphone" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No free audios yet</p>
            </div>
        </div>
    @endforelse
@endisset
