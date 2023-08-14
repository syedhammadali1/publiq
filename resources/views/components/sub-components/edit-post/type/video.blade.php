{{-- video --}}


<div class="form-group" id="video-hidden-div">
    <div>
        <div class="modal-content media-upload-height video-drop upload-media-div modal-contentt dragandrophandler video"
            data-type='video'>
            <label for="edit-fileUp" class="btn btn-default media-upload-height" flow-btn>
                <h4 class="click"></h4>

                <img src="{{ asset('frontend/assets/images/upload-video-image.png') }}" alt=""
                    class="upload-post-div-image video-modal-image" style="display: none">
                <input type="file" class="upload video-input @error('video')  @enderror" id="edit-fileUp"
                    name="video" hidden accept="video/*">

                <div class="row display-video-div" style="justify-content: center;">
                    <div class="col-6">
                        <div style="justify-content: end;display: flex;">
                            <button type="button" class="delete-video">
                                <i style="font-size: 17px;" class="fa"></i>
                            </button>
                        </div>
                        <video id="edit-vid" style="display: block;width: 100%;height: 100%;" class="video-play"
                            controls="" src="{{ @$user_post->getFirstMediaUrl('video') }}">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
        </div>
    </div>
</div>


<script>
    function editVideoPreview(file) {
        $('.upload-post-div-image').hide();
        document.getElementById("edit-vid").style.display = "block";
        let blobURL = URL.createObjectURL(file);
        $('.video-play').attr('src', blobURL);
    }

    $(document).ready(function() {
        // uploadedFilesIdEdit = null;
        uploadedFilesIdEdit = {!! json_encode($user_post->media[0]->id) !!}

        $("#sortable").sortable();
        var obj = $(".dragandrophandler");
        document.getElementById('edit-fileUp').addEventListener('change', () => {
            uploadedFilesIdEdit = [];
            filesList = document.getElementById('edit-fileUp').files;
            fileType = filesList[0].type.substring(0, 5);

            if (fileType == 'video') {
                // duration validation
                window.URL = window.URL || window.webkitURL;
                var video = document.createElement('video');
                video.preload = 'metadata';
                video.onloadedmetadata = function() {
                    window.URL.revokeObjectURL(video.src);
                    var duration = video.duration;
                    if (duration > 180) {
                        toastr.error('can not upload more than 3 minutes video');
                        $('.video-input').val('');
                        showAndHideDiv(['.upload-post-div-image'], ['#edit-vid']);

                    } else {
                        // console.log(filesList);
                        // Check if any file is selected.
                        if (filesList.length > 0) {
                            const filesize = Math.round(filesList[0].size / 1024);
                            // The size of the file.
                            if (filesize >= 102400) {
                                toastr.error("File too Big, please select a file less than 100mb");
                                $('.video-input').val('');
                                showAndHideDiv(['.upload-post-div-image'], ['#edit-vid']);

                            } else {
                                var fileType = filesList[0].type.substring(0, 5);
                                //  file type validation
                                if (fileType == 'video') {
                                    handleFileUploadEdit(filesList, obj);
                                } else {
                                    toastr.error('please upload video');
                                    $('.video-input').val('');
                                    showAndHideDiv(['.video-modal-image'], ['#edit-vid']);

                                }

                            }
                        }
                    }

                }

                video.src = URL.createObjectURL(filesList[0]);

            } else {
                toastr.error('please upload video');
                $('.video-modal-image').css("display", "block");

            }


        });


        obj.on('dragenter', function(e) {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('dragover', function(e) {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('drop', function(e) {

            e.preventDefault();
            var files = e.originalEvent.dataTransfer.files;

            fileType = files[0].type.substring(0, 5);
            if (fileType == 'video') {
                // duration validation
                window.URL = window.URL || window.webkitURL;
                var video = document.createElement('video');
                video.preload = 'metadata';
                video.onloadedmetadata = function() {
                    window.URL.revokeObjectURL(video.src);
                    var duration = video.duration;
                    if (duration > 180) {
                        toastr.error('can not upload more than 3 minutes video');
                        $('.video-input').val('');
                        showAndHideDiv(['.upload-post-div-image'], ['#edit-vid']);

                    } else {
                        // console.log(filesList);
                        // Check if any file is selected.
                        if (files.length > 0) {
                            const filesize = Math.round(files[0].size / 1024);
                            // The size of the file.
                            if (filesize >= 102400) {
                                toastr.error("File too Big, please select a file less than 100mb");
                                $('.video-input').val('');
                                showAndHideDiv(['.upload-post-div-image'], ['#edit-vid']);
                            } else {
                                var fileType = files[0].type.substring(0, 5);
                                //  file type validation
                                if (fileType == 'video') {
                                    handleFileUploadEdit(files, obj);
                                } else {
                                    toastr.error('please upload video');
                                    $('.video-input').val('');
                                    showAndHideDiv(['.upload-post-div-image'], ['#edit-vid']);
                                }

                            }
                        }
                    }

                }

                video.src = URL.createObjectURL(files[0]);

            } else {
                toastr.error('please upload video');
            }


        });
        $(document).on('dragenter', function(e) {
            e.stopPropagation();
            e.preventDefault();
        });
        $(document).on('dragover', function(e) {
            e.stopPropagation();
            e.preventDefault();
            //  obj.css('border', '2px dotted #0B85A1');
        });
        $(document).on('drop', function(e) {
            e.stopPropagation();
            e.preventDefault();
        });

        // clear button display video
        $('.video-play, .delete-video').hover(function() {

            $('.delete-video').css('display', 'block');

        }, function() {
            $('.delete-video').css('display', 'none');
        });

        // clear button functionality in video div
        $(document).on('click', '.delete-video', function() {
            $('.video-play').empty();
            $('.video-input').val('');
            $('.video-play').attr('src', '');
            uploadedFilesIdEdit = [];
            showAndHideDiv(['.upload-post-div-image'], ['.video-play']);
        });

    });
</script>
