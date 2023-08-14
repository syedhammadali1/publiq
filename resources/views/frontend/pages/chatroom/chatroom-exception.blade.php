<div class="row h-100 justify-content-center align-items-center" style="margin: auto;">
    <div class="col-12" style="">
        <div class="paid-model"
            style="-webkit-transition: var(--transition);transition: var(--transition);margin: initial;display: grid;padding-left: 11px;justify-content: center;">
            <div class="row">
                <div class="col-12" style="">
                    <div class="paid-model-content"
                        style="background: url(/frontend/assets/images/new-envo.png);text-align: center;background-size: cover;background-repeat: no-repeat;padding-top: 36%;width: 100%;padding-left: 1%;">
                        <div class="row">
                            <div class="col-12">
                                <div class="paid-model-text mt-2">
                                    <p>This content is paid if you want see this content please subscribe</p>
                                    <h6>{{ $user->full_name }}</h6>
                                </div>
                                <div class="paid-subs"><a href="{{ route('frontend.single.profile', $user) }}"
                                        class="paid-subs-button">Subscribe Now</a>
                                </div>
                                <p class="paid-model-note">Note : Subscription fee is 1$ per
                                    month for this person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
