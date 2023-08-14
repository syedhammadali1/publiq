<div class="mb-2 news-feed-area">
    {{-- This component has been used in home page and profile timeline page for uploading post --}}

    <div class="news-feed news-feed-form">
        <h3 class="news-feed-title">Whats in your mind?</h3>
        <form id="cform" method="POST" class="update-post-form" data-post_id="{{ $user_post->uuid }}"
            enctype="multipart/form-data">
            @csrf
            <input type="text" name='id' value='{{ $user_post->id }}' hidden>
            {{-- title --}}
            <div class="form-group">
                <input name="title" class="form-control @error('title')  @enderror  news-title-feed-input"
                    placeholder="Enter Title" value="{{ $user_post->title }}" />
                <span class="text-danger mt-2" id="title" style="display: none" role="alert">
                    <strong> </strong>
                </span>
            </div>
            {{-- description --}}
            <div class="form-group">
                <textarea placeholder="Write Something Here" class="form-control" id="editor" name="description">{{ $user_post->description }}</textarea>
                <span class="text-danger mt-2" id="description" style="display: none" role="alert">
                    <strong> </strong>
                </span>
            </div>

            <progress class="w-100 progress-barr" style="display: none"></progress>

            <script>
                var uploadedFilesIdEdit = [],
                    deleteImageArray = [],
                    sortableFiles = [];

                function sendFileToServerEdit(formData, status, fileUrl) {
                    $('.progress-barr').show();

                    var fileUrl = fileUrl;
                    var uploadURL = "{{ route('frontend.temp-upload') }}"; //Upload URL
                    var extraData = {}; //Extra Data.
                    var jqXHR = $.ajax({
                        xhr: function() {
                            var xhrobj = $.ajaxSettings.xhr();
                            if (xhrobj.upload) {
                                xhrobj.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    status.setProgress(percent);
                                }, false);
                            }
                            return xhrobj;
                        },
                        url: uploadURL,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            // $('.Uploading').hide()
                            $('.progress-barr').hide();

                            status.setProgress(100);
                            uploadedFilesIdEdit.push(data.id);


                            if (data.mimeType == 'video') {
                                editVideoPreview(fileUrl);
                            } else if (data.mimeType == 'image') {

                                customFileReaderEdit(fileUrl, data.id, data.url);

                            } else {
                                audioPreview(fileUrl)
                            }
                            $("#status1").append("File upload Done<br>");
                        }
                    });

                    status.setAbort(jqXHR);
                }

                var rowCount = 0;

                function createStatusbarEdit(obj) {
                    rowCount++;
                    var row = "odd";
                    if (rowCount % 2 == 0) row = "even";
                    this.statusbar = $("<div class='d-none statusbar " + row + "'></div>");
                    this.filename = $("<div class='d-none filename'></div>").appendTo(this.statusbar);
                    this.size = $("<div class='filesize'></div>").appendTo(this.statusbar);
                    this.progressBar = $("<div class='progressBar'><div></div></div>").appendTo(this.statusbar);
                    this.abort = $("<div class='abort'>Abort</div>").appendTo(this.statusbar);
                    obj.after(this.statusbar);

                    this.setFileNameSize = function(name, size) {
                        var sizeStr = "";
                        var sizeKB = size / 1024;
                        if (parseInt(sizeKB) > 1024) {
                            var sizeMB = sizeKB / 1024;
                            sizeStr = sizeMB.toFixed(2) + " MB";
                        } else {
                            sizeStr = sizeKB.toFixed(2) + " KB";
                        }

                        this.filename.html(name);
                        this.size.html(sizeStr);
                    }
                    this.setProgress = function(progress) {
                        var progressBarWidth = progress * this.progressBar.width() / 100;
                        this.progressBar.find('div').animate({
                            width: progressBarWidth
                        }, 10).html(progress + "% ");
                        if (parseInt(progress) >= 100) {
                            this.abort.hide();
                        }
                    }
                    this.setAbort = function(jqxhr) {
                        var sb = this.statusbar;
                        this.abort.click(function() {
                            jqxhr.abort();
                            sb.hide();
                        });
                    }
                }

                function handleFileUploadEdit(files, obj) {
                    console.log(files.length);
                    for (var i = 0; i < files.length; i++) {
                        var fd = new FormData();
                        fd.append('file', files[i]);
                        // document.getElementById('image-modal-image').style.display = 'none';

                        var status = new createStatusbarEdit(obj); //Using this we can set progress.
                        status.setFileNameSize(files[i].name, files[i].size);
                        sendFileToServerEdit(fd, status, files[i]);

                    }
                }
            </script>

            @includeWhen($user_post->type == 'images', 'components.sub-components.edit-post.type.image')
            @includeWhen($user_post->type == 'video', 'components.sub-components.edit-post.type.video')
            @includeWhen($user_post->type == 'audio', 'components.sub-components.edit-post.type.audio')

            @if ($user_post->type != 'shared')
                <ul class="button-group d-flex justify-content-between align-items-center mt-2">
                    <li class="free-btn popupfree">Free <input type="radio" value="0" name="is_paid"
                            @if ($user_post->is_paid == 0) checked @endif /></li>
                    <li class="Paid-btn popuppaid">Paid <input type="radio" value="1" name="is_paid"
                            @if ($user_post->is_paid == 1) checked @endif /></li>
                </ul>
            @endif

            <span class="text-danger mt-2" id="is_paid" style="display: none" role="alert">
                <strong> </strong>
            </span>
            @error('is_paid')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{-- submit button --}}
            <div class="go-pubilq mt-4">
                <button class="go-pubilq-btn go-pubilq-btn-edit" type="submit">
                    <img class="gopubliqimg" src="{{ asset('frontend/assets/images/go-pubilq.png') }}"
                        alt="image1" />GO
                    PUBILQ
                </button>
                @include('components.sub-components.loadmoreloading', [
                    'class' => 'gopubliq-post-edit-btn',
                ])
            </div>
        </form>
    </div>

    {{-- scripts --}}
    <script>
        $(document).ready(function() {

            let type = {!! json_encode($user_post->type) !!}

            // to upload post with ajax
            $('.update-post-form').submit(function(e) {
                e.preventDefault();

                var sortEditArry = [{}];
                $(".img-modal-div-edit").each(function(index, element) {
                    sortEditArry[$(element).index()] = $(element).data('media-id');
                });


                btn = $('.go-pubilq-btn-edit');
                loadMoreToggle(btn, 'hide', '.gopubliq-post-edit-btn');

                var fd = new FormData(this);
                if (type != 'shared' && type != 'text') {
                    fd.append('uploadedFilesId', uploadedFilesIdEdit);
                    fd.append('deleteImageArray', deleteImageArray);
                    if (type == 'images') {
                        fd.append('sortEditArry', sortEditArry);
                    } else {
                        fd.append('sortEditArry', null);
                    }
                }

                if (type == 'shared') {
                    fd.append('is_paid', 0);
                }

                post = $(this).data('post_id');

                $.ajax({
                    type: "POST",
                    url: "/post/{{ auth()->user()->name }}" + "/" + post + '/update',
                    data: fd,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $('.post-' + response.uuid)
                            .replaceWith(response.html);
                        $('.mediumModalClose').trigger('click');
                        loadMoreToggle(btn, 'show', '.gopubliq-post-edit-btn');
                        toastr.success(response.success);
                        if ("inQueue" in response) {
                            if (response.inQueue == true) {
                                $('.update-post-queue-loader').show();

                            }
                        }
                    },
                    error: function(errors) {
                        $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                            valueOfElement) {
                            toastr.error(valueOfElement)
                        });
                        loadMoreToggle(btn, 'show', '.gopubliq-post-edit-btn');
                    }
                });

            });
        });

        $(document).ready(function() {

            // clear button display video
            $('.video-play, .delete-video').hover(function() {
                $('.delete-video').css('display', 'block');

            }, function() {
                $('.delete-video').css('display', 'none');
            });

            // clear button functionality in video div
            $('.delete-video').on('click', function() {

                $('.video-input').val('');
                uploadedFilesIdEdit = [];
                showAndHideDiv(['.upload-post-div-image'], ['.video-play']);


            });

            // clear button display audio
            $('#aud, .delete-audio').hover(function() {
                $('.delete-audio').css('display', 'block');

            }, function() {
                $('.delete-audio').css('display', 'none');

            });


            // clear button functionality in audio div
            $('.delete-audio').on('click', function() {
                $('.audio-input').val('');
                uploadedFilesIdEdit = [];
                showAndHideDiv(['.upload-post-div-image'], ['.audio-play']);
            });

            $('.upload').change(function(e) {
                e.preventDefault();
                $('.upload-post-div-image').hide();

            });

        });
    </script>

</div>
