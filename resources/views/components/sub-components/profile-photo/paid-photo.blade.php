@isset($user_paid_photos)
    @forelse ($user_paid_photos as $user_paid_photo)
        <div class="col-lg-3 col-sm-6">
            @include('components.photoCardComponent', [
                'post' => $user_paid_photo,
            ])
        </div>

    @empty
        <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-picture-o" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No paid photos yet</p>
            </div>
        </div>
    @endforelse
@endisset
