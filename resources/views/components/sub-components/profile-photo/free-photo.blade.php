{{-- @dd($user_free_photos) --}}
@isset($user_free_photos)
    @forelse ($user_free_photos as $user_free_photo)
        <div class="col-lg-3 col-sm-6">
            @include('components.photoCardComponent', [
                'post' => $user_free_photo,
            ])
        </div>


    @empty
      <div class="row">
            <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
                <i class="fa fa-picture-o" style="font-size: 94px;"></i>
            </div>
            <div class="private-account-text" style="">
                <p style="text-align: center;font-size: 21px;">No free photos yet</p>
            </div>
        </div>
    @endforelse
@endisset
