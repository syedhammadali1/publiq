<style>
    .modal-body {
        background-color: black;
    }

    #modal-content-medium{
        background-color: white ! important;
    }

    .modal-content{
    background-color: #000000;
}

.media-upload-height{
        background-color: white ! important;
    }

    .mediumModalBody {
        background-color: white !important;
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
<div class="row h-100 justify-content-center align-items-center">
<div class="content-page-box-area">

            <iframe class="main-single-content video" src={{ $user_post->getFirstMediaUrl('video') }} allow="autoplay"
                frameborder="0" allowfullscreen="">
            </iframe>
</div>
</div>
