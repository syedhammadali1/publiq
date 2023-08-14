<template>
  <div class="widget widget-suggested-groups">
    <h3 class="widget-title">{{ title }}</h3>
    <article class="item">
      <a id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/video/video-1.jpg"
            alt="image1" /></span
      ></a>
      <div class="info">
        <h4 class="title">
          <a href="#">Preper for your first skateboard jump</a>
        </h4>
        <span>Jordin Wise</span><span>. 2 days ago</span>
      </div>
    </article>
    <article class="item">
      <a id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/video/video-1.jpg"
            alt="image1" /></span
      ></a>
      <div class="info">
        <h4 class="title"><a href="#">Basic how to ride your skateboard</a></h4>
        <span>Jordin Wise</span><span>. 2 days ago</span>
      </div>
    </article>
    <article class="item">
      <a id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/video/video-1.jpg"
            alt="image1" /></span
      ></a>
      <div class="info">
        <h4 class="title"><a href="#">Photography Learning</a></h4>
        <span>Alex</span><span>. 3 days ago</span>
      </div>
    </article>
    <article class="item">
      <a id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/video/video-1.jpg"
            alt="image1" /></span
      ></a>
      <div class="info">
        <h4 class="title"><a href="#">Traveling The World</a></h4>
        <span>John Work</span><span>. 4 days ago</span>
      </div>
    </article>
    <a class="view-member" href="">
      <div class="article-view-all">
        <button class="article-view-all-btn">VIEW ALL</button>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  props: ["title"],
};
</script>

<style>
</style>
