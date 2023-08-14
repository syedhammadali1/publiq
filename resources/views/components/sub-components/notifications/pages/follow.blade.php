<div class="all-notifications-body">
    <div class="all-notifications-header d-flex justify-content-between align-items-center">
        {{-- <h3>Follow Request</h3>

        <div class="dropdown">
            <ul class="dropdown-menu">
                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i>
                        Edit Notifications</a></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i>
                        Hide Notifications</a></li>
                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i>
                        Delete Notifications</a></li>
            </ul>
        </div> --}}
    </div>

    <div class="follownotifications-append-div">
        @include('components.sub-components.notifications.followNotification', [
            'notifications' => $notifications,
        ])
    </div>

    <div class="load-more-posts-btn load-more-posts-btn-follownotifications btn-follow-follownotifications"
        data-page="2" data-last-page="{{ $notifications->lastPage() == 1 ? 1 : 2 }}"
        style={{ $notifications->lastPage() == 1 ? 'display:none' : '' }}>
        <a href="#"><i class="flaticon-loading"></i> Load More</a>
    </div>
</div>
