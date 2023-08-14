
<template>
  <div class="widget widget-suggested-groups">
    <h3 class="widget-title">{{ title }}</h3>
    <article class="item">
      <a
        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
        data-lightbox="photos"
        id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/suggested-groups/groups-4.jpg"
            alt="image1"
          />
          <div class="number-of-post">5+</div>
        </span></a
      >
      <div class="info">
        <h4 class="title">
          <a href="#">Preper for your first skateboard jump</a>
        </h4>
        <span>Jordin Wise</span><span>. 2 days ago</span>
      </div>
      <a
        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
        data-lightbox="photos"
      ></a
      ><a
        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
        data-lightbox="photos"
      ></a
      ><a
        href="https://raw.githubusercontent.com/shubham-thakare/sample-images/master/american-robin.jpg"
        data-lightbox="photos"
      ></a
      ><a
        href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
        data-lightbox="photos"
      ></a>
    </article>
    <article class="item" id="multi-popup">
      <a id="video-pr"
        ><span
          ><img
            class="video-side"
            src="frontend/assets/images/suggested-groups/groups-5.jpg"
            alt="image1"
          />
          <div class="number-of-post">4+</div>
        </span></a
      >
      <div class="info">
        <h4 class="title">
          <a href="#">Preper for your first skateboard jump</a>
        </h4>
        <span>Jordin Wise</span><span>. 2 days ago</span>
      </div>
    </article>
    <article class="item">
      <a href="#" class="thumb"
        ><span class="fullimage bg3" role="img"></span
      ></a>
      <div class="info">
        <h4 class="title"><a href="#">Photography Learning</a></h4>
        <span>Alex</span><span>. 3 days ago</span>
      </div>
    </article>
    <article class="item">
      <a href="#" class="thumb"
        ><span class="fullimage bg4" role="img"></span
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
