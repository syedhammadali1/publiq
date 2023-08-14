<style>
    .modal-body {
        background-color: black;
    }
    .player {
    position: absolute;
    top: 50%;
    transform: translate(-0%, -50%);
    width: 330px;
    height: 530px;
    border-radius: 15px;
    background-color: #ffffff;
    box-shadow: 0px 4px 11px 7px #522066;
}

    input[type="range"] {
        -webkit-appearance: none !important;
        margin: 0px;
        padding: 0px;
        background: #f2eae4;
        height: 5px;
        width: 150px;
        outline: none;
        cursor: pointer;
        overflow: hidden;
        border-radius: 5px;
    }

    input[type="range"]::-ms-fill-lower {
        background: #f2eae4;
    }

    input[type="range"]::-ms-fill-upper {
        background: #f2eae4;
    }

    input[type="range"]::-moz-range-track {
        border: none;
        background: #f2eae4;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none !important;
        background: #ff3677;
        height: 5px;
        width: 5px;
        border-radius: 50%;
        box-shadow: -100vw 0 0 100vw #f7d9b9;
    }

    input[type="range"]::-moz-range-thumb {
        background: #ff3677;
        height: 8px;
        width: 8px;
        border-radius: 100%;
    }

    input[type="range"]::-ms-thumb {
        -webkit-appearance: none !important;
        background: #ff3677;
        height: 8px;
        width: 8px;
        border-radius: 100%;
    }

    .cover {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        left: 50%;
        top: 50px;
        transform: translateX(-50%);
        box-shadow: 0 5px 20px 0 #512063;
    }

    .cover img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .info-1{
        position: absolute;
        left: 50%;
        top: 240px;
        transform: translateX(-50%);
        text-align: center;
    }


    .singer {
        font-size: 12px;
        color: #72646f;
    }


    .btn-box {
        position: absolute;
        top: 330px;
        width: 100%;
        display: grid;
        justify-content: center;
    }



    .fa-volume-up {
        font-size: 20px;
    }


    .volume-box {
        display: none;
        position: absolute;
        left: 44%;
        top: 295px;
        transform: translateX(-50%);
        z-index: 1;
        padding: 3px 0px;
    }

    .volume-down {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #72646f;
    }

    .volume-up {
        position: absolute;
        right: -26px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #72646f;
    }

    .volume-up::selection {
        background-color: unset;
    }

    input[type="range"] {
        height: 5px;
        width: 150px;
        margin: 0 0 15px 0;
    }

    .volume-box.active {
        display: block;
    }

    .music-box {
        position: absolute;
        left: 50%;
        top: 385px;
        transform: translateX(-50%);
    }

    input[type="range"] {
        height: 5px;
        width: 230px;
        margin: 0 0 10px 0;
    }

    input[type="range"]::-webkit-slider-thumb {
        height: 5px;
        width: 7px;
    }

    .current-time {
        position: absolute;
        left: -35px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        color: #72646f;
    }

    .duration {
        position: absolute;
        right: -35px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        color: #72646f;
    }
    .play,
    .pause {
        position: absolute;
        left: 61%;
        top: 55px;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50px;
        font-size: 22px;
        cursor: pointer;
        transition: all 0.4s;
    }

    #volume {
        font-size: 22px;
        cursor: pointer;
    }

    #range-meter {
        margin-left: 36px;
    }

    .mediumModalBody{
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

  #modal-content-medium{
        background-color: white ! important;
    }

    .media-upload-height{
        background-color: white ! important;
    }

    .modal-content{
    background-color: #000000;
}

.fullScreenModalClose :hover{
    color: white ! important;
}

</style>
<div class="content-page-box-area">
    <div class="row">
            <div style="justify-content: center;display: flex;">
                <div class="player">
                    <div class="cover">
                        <img src="{{ asset('frontend/assets/images/musicback.jpg') }}" alt="">
                    </div>
                    <div class="info-1">
                        <div class="title">{{ $user_post->title }}</div>
                        <div class="singer">{{ $user_post->user->full_name }}</div>
                    </div>
                    <div class="volume-box">
                        <span class="volume-down"><i class="fa fa-minus"></i></span>
                        <input type="range" id="range-meter" class="volume-range" step="1" value="80"
                            min="0" max="100" oninput="music.volume = this.value/100">
                        <span class="volume-up"><i class="fa fa-plus"></i></span>
                    </div>
                    <div class="btn-box">
                        <i class="fa fa-volume-up" id="volume" onclick="handleVolume()"></i>
                    </div>
                    <div class="music-box">
                        <input type="range" step="1" class="seekbar" value="0" min="0"
                            max="100" oninput="handleSeekBar()">

                        <audio class="music-element">
                            <source src="{{ $user_post->getFirstMediaUrl('audio') }}" type="audio/mp3">
                        </audio>
                        <span class="current-time">0:0</span><span class="duration">0:0</span>
                        <span class="play" onclick="handlePlay()">
                            <i class="fa fa-play"></i>
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>


<script src={{ asset('frontend/assets/js/audio.js') }}></script>
