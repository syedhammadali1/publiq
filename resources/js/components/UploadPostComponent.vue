<template>
  <div>
    <div class="news-feed news-feed-form">
      <h3 class="news-feed-title">Whats in your mind?</h3>
      <form>
        <div class="form-group">
          <input name="title" class="form-control" placeholder="Enter Title" />
        </div>
        <div class="form-group">
          <textarea
            placeholder="Write Something Here"
            class="form-control"
            id="editor"
            contenteditable="true"
          ></textarea>
        </div>
        <ul
          class="button-group d-flex justify-content-between align-items-center"
        >
          <li class="photo-btn">
            <p id="myBtn"><i class="flaticon-gallery"></i> Photo</p>
          </li>
          <li class="video-btn">
            <button type="file"><i class="flaticon-video"></i> Video</button>
          </li>
          <li class="video-btn">
            <button type="file">
              <img
                src="frontend/assets/images/audio/audio-icon.png"
                width="20"
              />
              Audio
            </button>
          </li>
          <li class="free-btn">Free <input type="checkbox" checked /></li>
          <li class="Paid-btn">Paid <input type="checkbox" /></li>
        </ul>
      </form>
    </div>
    <div class="go-pubilq">
      <button class="go-pubilq-btn">
        <img
          class="gopubliqimg"
          src="frontend/assets/images/go-pubilq.png"
          alt="image1"
        />GO PUBILQ
      </button>
    </div>
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h4 id="model-heading">Upload Your Image Here</h4>
        <img
          id="open-photo"
          src="frontend/assets/images/image-up.png"
          alt="image"
        />
        <input id="imgupload" type="file" style="display: none" />
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
