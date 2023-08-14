<style>
    .no-comment {
        justify-content: center;
        display: flex;
    }

    .no-comment img {
        max-width: 55px;
        position: absolute;
        left: 0;
        top: 0;
    }

    .no-comment h3 {
        margin-top: 1%;
        margin-top: 6%;
    }

    
</style>

<div class="row @isset($post) no-comment-{{ $post->id }} @endisset">
    <div class="private" style="justify-content: center;display: flex;padding-top: 3%;">
        <div class="no-comment-img"></div>
    </div>
</div>
