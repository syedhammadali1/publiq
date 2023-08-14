@extends('frontend.layouts.app')


@section('content')
<div class="content-page-box-area">
    <div class="page-banner-box bg-11">
        <h3>Marketplace</h3>
    </div>

    <div class="marketplace-inner-box-style d-flex justify-content-between align-items-center">
        <div class="title">
            <h3>Our Products</h3>
        </div>

        <div class="sort-box">
            <select class="form-select">
                <option selected="1">Sort by products</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-1.jpg") }} alt="image"></a>

                    <div class="price">$ 55.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">High Quality Watch</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> 4825 Poplar Lane Miami, FL</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-2.jpg") }} alt="image"></a>

                    <div class="price">$ 189.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Digital Camera</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> 683 Warner Street Casper, WY</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-3.jpg") }} alt="image"></a>

                    <div class="price">$ 400.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Laptop</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> 438 Harter Street Sabina, OH</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-4.jpg") }} alt="image"></a>

                    <div class="price">$ 89.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Headphone</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> 1359 Riverside Drive Augusta, GA</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-5.jpg") }} alt="image"></a>

                    <div class="price">$ 150.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Smart Phone</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Rainbow Road Los Angeles, CA</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-6.jpg") }} alt="image"></a>

                    <div class="price">$ 30.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Bag</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Wildwood Street Smithville, OH</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-7.jpg") }} alt="image"></a>

                    <div class="price">$ 25.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Women Heeled Shoes</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Petunia Way Birmingham, AL</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-8.jpg") }} alt="image"></a>

                    <div class="price">$ 15.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Jeans Pant</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Reynolds Alley Los Angeles, CA</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-9.jpg") }} alt="image"></a>

                    <div class="price">$ 45.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Men Shoes</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Goldie Lane Hamilton, OH</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-10.jpg") }} alt="image"></a>

                    <div class="price">$ 55.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Leather Wooden Chair</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Remines Mill Road Dallas, TX</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-11.jpg") }} alt="image"></a>

                    <div class="price">$ 433.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Small Toy Car</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> Dog Hill Lane Lawrence, KS</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="single-marketplace-card">
                <div class="marketplace-image">
                    <a href="#"><img src={{ asset("frontend/assets/images/marketplace/marketplace-12.jpg") }} alt="image"></a>

                    <div class="price">$ 23.00</div>
                </div>
                <div class="marketplace-content">
                    <h3>
                        <a href="#">Schoolchild Backpack</a>
                    </h3>
                    <p><i class="ri-map-pin-line"></i> 4452 Marion Street Columbia, SC</p>
                </div>
            </div>
        </div>
    </div>

    <div class="load-more-posts-btn">
        <a href="#"><i class="flaticon-loading"></i> Load More</a>
    </div>

    <div class="products-details-title">
        <h3>Products Details</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="products-details-image"></div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="products-details-content">
                <h3>High Quality Watch</h3>
                <p class="location"><i class="ri-map-pin-line"></i> 4825 Poplar Lane Miami, FL</p>
                <div class="price">$ 55.00</div>
                <ul class="list">
                    <li><span>Condition:</span> New</li>
                    <li><span>Brand:</span> Digital Watch</li>
                </ul>
                <h4>Details:</h4>
                <p>Curabitur arcu erat accumsan id imperdiet et porttitor at sem vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                <p>Proin eget tortor risus donec rutrum congue leo eget malesuada mauris blandit aliquet elit eget tincidunt nibh pulvinar curabitur arcu erat accumsan id imperdiet et porttitor at sem.</p>

                <div class="seller-information">
                    <h5>Seller Information</h5>

                    <div class="information-content">
                        <img src={{ asset("frontend/assets/images/user/user-25.jpg") }} class="rounded-circle" alt="image">
                        <h6>Strock Smith</h6>
                        <a href="tel:8032230510">803-223-0510</a>
                        <span>3742 Snider Street Denver, CO</span>
                    </div>

                    <form>
                        <label>Send Seller Message</label>
                        <input type="text" class="form-control" placeholder="Write your message">
                        <button type="submit"><i class="ri-send-plane-line"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
