<template>
  <div class="widget widget-suggested-groups">
    <h3 class="widget-title">{{ title }}</h3>
    <audio controls="">
      <source src="frontend/assets/images/People.mp3" type="audio/mp3" /></audio
    ><audio controls="">
      <source
        src="frontend/assets/images/People2.mp3"
        type="audio/mp3"
      /></audio
    ><audio controls="">
      <source
        src="frontend/assets/images/People3.mp3"
        type="audio/mp3"
      /></audio
    ><audio controls="">
      <source src="frontend/assets/images/People4.mp3" type="audio/mp3" />
    </audio>
    <article>
      <div class="article-view-all">
        <a class="view-member" href=""
          ><button class="article-view-all-btn">VIEW ALL</button></a
        >
      </div>
    </article>
  </div>
</template>

<script>
export default {
  props: ["title"],
};
</script>

<style>
</style>
