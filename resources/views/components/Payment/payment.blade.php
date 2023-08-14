@isset($user)
    <div class="row">
        <div class="col-1"></div>
        <div class="sec-1 col-md-4" style="">
            <div style="margin-top: 6rem; margin-bottom: 1rem">
                <p> <img src="{{ asset('frontend/assets/images/icons8-left-arrow-24.png') }}" alt=""> You are
                    subscribing
                </p>
            </div>
            <div>
                <div class="row">
                    <div class="col-2">
                        <a href="{{ route('frontend.single.profile', $user) }}">
                            <img src="{{ $user->avatar }}" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <h5 style="margin: 0px;">{{ $user->full_name }}</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 1.5rem;">
                    <div class="col-3" style="border-right: 1px solid grey;text-align: center">
                        <h5>{{ $user->count_media('images') }}</h5>
                        <p>images</p>
                    </div>
                    <div class="col-3" style="border-right: 1px solid grey; text-align: center">
                        <h5>{{ $user->count_media('video') }}</h5>
                        <p>video</p>
                    </div>
                    <div class="col-3" style="text-align: center">
                        <h5>{{ $user->count_media('audio') }}</h5>
                        <p>audio</p>
                    </div>
                </div>
                <div style="margin-top: 3rem;">
                    <p style="font-size: 1.5rem">Pay</p>
                    <h1 style="font-weight: 700;">$ 1.00</h1>
                    <p>for view all paid content of this person</p>
                </div>
                <hr style="height: 6px;width: auto;background: #560156;">
                <div class="row">
                    <div class="col">
                        <h5>Auto Renew</h5>
                        <p>Bill monthly</p>
                    </div>
                    <div class="col">
                        <h3>
                            $ 1.00
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="sec-2 col-md-5">
            <form class="events-form subscribe-user-payment-form">
                <h3>Pay with card</h3>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label id="card_nameLabel">Card Name</label>
                            <input type="text" name="card_name" class="form-control">
                            <span class="text-danger mt-2" id="card_name" style="display: none" role="alert">
                                <strong> </strong>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label id="card_noLabel">Card Information</label>
                            <input type="number" name="card_no"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                onkeypress="return /[0-9]/i.test(event.key)" maxlength="16"
                                class="form-control form-control-sm" placeholder="1234 1234 1234 1234">
                            <span class="text-danger mt-2" id="card_no" style="display: none" role="alert">
                                <strong> </strong>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label id="expire_atLabel">Expiry Date</label>
                            <input type="month" name="expire_at" class="form-control" placeholder="mm-yyyy">
                            <span class="text-danger mt-2" id="expire_at" style="display: none" role="alert">
                                <strong> </strong>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label id="cvcLabel">CVC</label>
                            <input type="number" name="cvc"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="3" class="form-control" placeholder="cvc">
                            <span class="text-danger mt-2" id="cvc" style="display: none" role="alert">
                                <strong> </strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label id="countryLabel">Country</label>
                            <select class="form-select" name="country">
                                <option selected value="">Select Country</option>
                                <option value="Japan">Japan</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="Germany">Germany</option>
                                <option value="Canada">Canada</option>
                            </select>
                            <span class="text-danger mt-2" id="country" style="display: none" role="alert">
                                <strong> </strong>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="for" value="subscribePayment">
                    <input type="hidden" name="user" value="{{ $user->name }}">
                    <div class="col-12 col-12">
                        @include('components.sub-components.loadmoreloading')
                        <button type="submit" class="default-btn payment-submit-btn"
                            style="width: inherit;background-color: red;">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>

    <script>
        $('.subscribe-user-payment-form').submit(function(e) {
            e.preventDefault();
            loadMoreToggle($('.payment-submit-btn'), 'hide');
            $.ajax({
                type: "POST",
                url: "{{ route('frontend.payment.method') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    loadMoreToggle($('.payment-submit-btn'), 'show');
                    $('#single-profile-app').html(response.html);
                    $('.fullScreenModalBody').html(response.successHtml);
                },
                error: function(errors) {
                    loadMoreToggle($('.payment-submit-btn'), 'show');
                    $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                        valueOfElement) {
                        $('#' + indexInArray).show();
                        $('#' + indexInArray + ' > strong').text(valueOfElement)
                    });
                }
            });
        });
    </script>
@endisset
