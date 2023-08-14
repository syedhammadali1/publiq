<template>
  <div class="tab-pane fade show active" id="timeline" role="tabpanel">
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <aside class="widget-area">
          <widget-like-photo title="Most Liked Free Photos"></widget-like-photo>
          <widget-follow-suggestion></widget-follow-suggestion>
          <widget-advertisement></widget-advertisement>
          <widget-audio title="Most Liked Free Audios"></widget-audio>
        </aside>
      </div>

      <div class="col-lg-6 col-md-12">
        <news-feed></news-feed>
        <div class="load-more-posts-btn">
          <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-12">
        <aside class="widget-area">
          <widget-watch-video></widget-watch-video>
          <widget-advertisement></widget-advertisement>
          <widget-like-photo
            title="Most Liked Premium Photos"
          ></widget-like-photo>
          <widget-audio title="Most Liked Premium Audios"></widget-audio>
          <widget-video title="Most Liked Premium Videos"></widget-video>
        </aside>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
