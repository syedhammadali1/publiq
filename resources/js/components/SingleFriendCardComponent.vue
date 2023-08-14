<template>
  <div class="single-friends-card">
    <div class="friends-image">
      <a href="#">
        <img :src="cover" alt="image" />
      </a>
      <div class="icon">
        <a href="#"><i class="flaticon-user"></i></a>
      </div>
    </div>
    <div class="friends-content">
      <div
        class="friends-info d-flex justify-content-between align-items-center"
      >
        <a href="#">
          <img :src="dp" alt="image" />
        </a>
        <div class="text ms-3">
          <h3>
            <a :href="profileLink">{{ name }}</a>
          </h3>
          <span>{{ mutualFriendCount }} Mutual Friends</span>
        </div>
      </div>
      <ul class="statistics">
        <li>
          <a href="#">
            <span class="item-number">{{ photosCount }}</span>
            <span class="item-text">Photos Posts</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="item-number">{{ videosCount }}</span>
            <span class="item-text">Videos Post</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="item-number">{{ audiosCount }}</span>
            <span class="item-text">Audios Posts</span>
          </a>
        </li>
      </ul>
      <div
        class="button-group d-flex justify-content-between align-items-center"
      >
        <div class="send-message-btn" v-if="showButton">
          <button type="submit">{{ buttonLabel }}</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    name: String,
    photosCount: String,
    videosCount: String,
    audiosCount: String,
    dp: String,
    cover: String,
    showButton: Boolean,
    buttonLabel: String,
    profileLink: String,
    mutualFriendCount: String,
  },
};
</script>

<style>
</style>
