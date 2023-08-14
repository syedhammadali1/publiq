
<template>
  <div class="content-page-box-area">
    <div class="my-profile-inner-box">
      <div class="profile-cover-image">
        <a href="#">
          <img src="frontend/assets/images/my-profile-bg.jpg" alt="image" />
        </a>
        <a href="#" class="edit-cover-btn">Edit Cover</a>
      </div>
      <div class="profile-info-box">
        <div
          class="
            inner-info-box
            d-flex
            justify-content-between
            align-items-center
          "
        >
          <div class="info-image">
            <a href="#">
              <img src="frontend/assets/images/my-profile.jpg" alt="image" />
            </a>
            <div class="icon">
              <a href="#"><i class="flaticon-photo-camera"></i></a>
            </div>
          </div>
          <div class="info-text ms-3">
            <h3><a href="#">William Chandler</a></h3>
            <span
              ><a href="mailto:matthew@gmail.com">william@gmail.com</a></span
            >
          </div>
          <ul class="statistics">
            <li>
              <a href="#">
                <span class="item-number">59862</span>
                <span class="item-text">Photos Post</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="item-number">8591</span>
                <span class="item-text">Videos Post</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="item-number">784514</span>
                <span class="item-text">Audios Post</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="profile-list-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="timeline-tab"
                data-bs-toggle="tab"
                href="#timeline"
                role="tab"
                aria-controls="timeline"
                >Timeline</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="about-tab"
                data-bs-toggle="tab"
                href="#about"
                role="tab"
                aria-controls="about"
                >About</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="friends-tab"
                data-bs-toggle="tab"
                href="#friends"
                role="tab"
                aria-controls="friends"
                >Friends</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="friends-tab"
                data-bs-toggle="tab"
                href="#Followers"
                role="tab"
                aria-controls="friends"
                >Followers</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="friends-tab"
                data-bs-toggle="tab"
                href="#Subscriber"
                role="tab"
                aria-controls="friends"
                >Subscribers</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="photos-tab"
                data-bs-toggle="tab"
                href="#photos"
                role="tab"
                aria-controls="photos"
                >Photos</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="photos-tab"
                data-bs-toggle="tab"
                href="#Audios"
                role="tab"
                aria-controls="Audios"
                >Audios</a
              >
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                id="Videos-tab"
                data-bs-toggle="tab"
                href="#Videos"
                role="tab"
                aria-controls="Videos"
                >Videos</a
              >
            </li>
          </ul>
        </div>

        <div class="profile-social">
          <button class="go-pubilq-btn-socail">GO PUBILQ</button>
        </div>
      </div>
    </div>
    <div class="tab-content" id="myTabContent">
      <profile-timeline></profile-timeline>
      <profile-about></profile-about>
      <profile-friend></profile-friend>
      <profile-follower></profile-follower>
      <profile-subscriber></profile-subscriber>
      <profile-photo></profile-photo>
      <profile-audio></profile-audio>
      <profile-video></profile-video>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
