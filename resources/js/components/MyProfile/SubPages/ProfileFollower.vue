<template>
  <div class="tab-pane fade" id="Followers" role="tabpanel">
                <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>Followers</h3>
                        <span>199</span>
                    </div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-Following-tab" data-bs-toggle="tab" href="#all-Following"
                                role="tab" aria-controls="all-Following">Following</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="Followers-added-tab" data-bs-toggle="tab" href="#Followers-added"
                                role="tab" aria-controls="Followers-added">Followers</a>
                        </li>
                    </ul>

                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-Following" role="tabpanel">
                        <div class="row justify-content-center">



                            <div class="col-lg-3 col-sm-6">
                             <single-friend-card-component name="harry" photosCount="55" videosCount="44" audiosCount="33" dp="frontend/assets/images/friends/friends-2.jpg" cover="frontend/assets/images/friends/friends-bg-2.jpg" profileLink='https://www.youtube.com/'/>
                            </div>

                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Followers-added" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                             <single-friend-card-component name="harry" photosCount="55" videosCount="44" audiosCount="33" dp="frontend/assets/images/friends/friends-2.jpg" cover="frontend/assets/images/friends/friends-bg-2.jpg" profileLink='https://www.youtube.com/'/>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>
                </div>
            </div>
</template>

<script>

export default {

}
</script>

<style>

</style>
