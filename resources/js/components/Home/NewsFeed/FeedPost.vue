<template>
  <div class="news-feed news-feed-post">
    <div class="post-header d-flex justify-content-between align-items-center">
      <div class="image">
        <a href=""
          ><img
            src="frontend/assets/images/user/user-1.jpg"
            class="rounded-circle"
            alt="image"
        /></a>
      </div>
      <div class="info ms-3">
        <span class="name"><a href="">William Chandler</a></span>
        <span class="small-text"><a href="#">10 Mins Ago</a></span>
      </div>
      <div class="dropdown">
        <button
          class="dropdown-toggle"
          type="button"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <i class="flaticon-menu"></i>
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#"
              ><i class="flaticon-edit"></i> Edit Post</a
            >
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#"
              ><i class="flaticon-private"></i> Hide Post</a
            >
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="#"
              ><i class="flaticon-trash"></i> Delete Post</a
            >
          </li>
        </ul>
      </div>
    </div>

    <div class="post-body">
      <h6>Premium Content Of Relaxing Music Will Be Uploaded Soon...</h6>
      <p>
        Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero
        malesuada feugiat. Donec rutrum congue leo eget malesuada. Donec rutrum
        congue leo eget malesuada. Praesent sapien massa convallis a
        pellentesque nec egestas non nisi. Curabitur non nulla sit amet nisl
        tempus convallis quis.
      </p>
      <div class="post-image">
        <img
          src="frontend/assets/images/news-feed-post/post-1.jpg"
          alt="image"
        />
      </div>
      <ul
        class="post-meta-wrap d-flex justify-content-between align-items-center"
      >
        <li class="post-react">
          <a href="#"
            ><i class="flaticon-like"></i><span>Like</span>
            <span class="number">1499 </span></a
          >

          <ul class="react-list">
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-1.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-2.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-3.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-4.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-5.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-6.png" alt="Like"
              /></a>
            </li>
            <li>
              <a href="#"
                ><img src="frontend/assets/images/react/react-7.png" alt="Like"
              /></a>
            </li>
          </ul>
        </li>
        <li class="post-comment">
          <a href="#"
            ><i class="flaticon-comment"></i><span>Comment</span>
            <span class="number">599 </span></a
          >
        </li>
        <li class="post-share">
          
        </li>
      </ul>
      <form class="post-footer">
        <div class="footer-image">
          <a href="#"
            ><img
              src="frontend/assets/images/user/user-1.jpg"
              class="rounded-circle"
              alt="image"
          /></a>
        </div>
        <div class="form-group">
          <textarea
            name="message"
            class="form-control"
            placeholder="Write a comment..."
          ></textarea>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>
