<style>
    #external-share-content {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 100%;
    }

    #copybutton {
        cursor: pointer;
        position: absolute;
        right: 30px;
        top: 43px;
        border: none;
        color: var(--paragraph-color);
        border-radius: 5px;
        font-size: 18px;
        padding: 0 15px;
    }
</style>

<div class="news-feed-area">
    <div class="news-feed news-feed-form">
        <form id="cform">
            <div class="form-group">
                <input name="title" class="form-control" id="external-share-content" disabled value="{{ $link }}">
                <i onclick="copyText()" id="copybutton" class="fa fa-copy"></i>
            </div>
        </form>
    </div>
</div>
