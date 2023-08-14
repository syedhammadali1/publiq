@isset($user_paid_audios)
    @forelse ($user_paid_audios as $user_paid_audio)
        <div class="col-lg-3 col-sm-6">
            @include('components.audioCardComponent', [
                'post' => $user_paid_audio,
            ])
        </div>
    @empty
        <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-microphone" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No paid audios yet</p>
            </div>
        </div>
    @endforelse
@endisset
