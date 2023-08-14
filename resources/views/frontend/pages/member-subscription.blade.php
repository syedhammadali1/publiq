@extends('frontend.layouts.app')
@section('content')
    <div class="row" style="background-color: white;">
        <div class="col-1"></div>
        <div class="sec-1 col-md-4" style="">
            <div style="margin-top: 6rem; margin-bottom: 1rem">

                <p> <img src="{{ asset('frontend/assets/images/icons8-left-arrow-24.png') }}" alt=""> You are subscribing
                </p>
            </div>
            <div>
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('frontend/assets/images/user/user-1.jpg') }}" alt="">
                    </div>
                    <div class="col">
                        <h5 style="margin: 0px;">William Chandler</h5>
                        <p>william@gmail.com</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 1.5rem;">
                    <div class="col-3" style="border-right: 1px solid grey;text-align: center">
                        <h5>456</h5>
                        <p>articles</p>
                    </div>
                    <div class="col-3" style="border-right: 1px solid grey; text-align: center">
                        <h5>33</h5>
                        <p>video</p>
                    </div>
                    <div class="col-3" style="text-align: center">
                        <h5>65</h5>
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
            <form class="events-form">
                <h3>Pay with card</h3>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Card Information</label>
                            <input type="text" class="form-control form-control-sm" placeholder="1234 1234 1234 1234">

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="mm-yyyy">
                        </div>
                    </div>



                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="cvc">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-select">
                                <option selected="1">Japan</option>
                                <option value="2">Pakistan</option>
                                <option value="3">India</option>
                                <option value="4">Germany</option>
                                <option value="5">Canada</option>
                            </select>
                        </div>
                    </div>






                    <div class="col-12 col-12">
                        <button type="submit" class="default-btn" style="width: inherit;background-color: red;">Subscribe</button>
                    </div>

                </div>
            </form>

        </div>

        <div class="col-1"></div>



    </div>

@endsection
