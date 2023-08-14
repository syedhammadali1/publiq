{{-- <div class="content-page-box-area single-post-content-page">
    <div class="row">
        <div class="single-page-post-view">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                @if ($user_post->media->count() > 1)
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                @endif
                <!-- The slideshow -->
                <div class="carousel-inner container">
                    @foreach ($user_post->media as $index => $image)
                        <div class="carousel-item  {{ $index == 0 ? 'active' : '' }}">
                            <img src={{ $image->getFullUrl() }} alt="Los Angeles">
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div> --}}

<style>
    .modal-body {
        background-color: black;
    }
    .media-upload-height{
        background-color: white ! important;
    }

    #modal-content-medium{
        background-color: white ! important;
    }

    .modal-content{
    background-color: #000000;
}
    .mediumModalBody {
        background-color: white ! important;
    }
    .modal-header{
        display:none ! important;
    }
    .fullScreenModalClose {
    background-image: none ! important;
    font-size: 24px;
    padding: 1px 10px 13px 6px ! important;
    color: white ! important;
}

.fullScreenModalClose :hover{
    color: white ! important;
}
</style>
<div class="content-page-box-area single-post-content-page">
    <div class="row">
        <div class="single-page-post-view">
            <div class="col-md-12 mx-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        @foreach ($user_post->media as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="row" style="justify-content: center;display: grid;">
                                    <div class="col-sm-12">
                                        <div class="img-box">
                                            <img src="{{ $image->getFullUrl() }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if ($user_post->media->count() > 1)
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
