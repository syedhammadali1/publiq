 {{-- This component has been used in home page and profile timeline page for uploading post --}}

 <div class="mb-2 uohiUOSDGeuoehiaguidaugd3daojg3huibn">

     <div class="news-feed news-feed-form">
         <div class="row">
             <div class="col-10 text-start">
                 <h3 class="news-feed-title">Whats in your mind?</h3>
             </div>
             <div class="col-2 text-end reset-form-upload" style="display: none">
                 <i class="flaticon-loading"></i>
             </div>
         </div>
         <form action="{{ route('frontend.post.store') }}" id="cform" method="POST" class="upload-post-form"
             enctype="multipart/form-data">
             @csrf
             {{-- title --}}
             <div class="form-group">
                 <input name="title" class="form-control @error('title')  @enderror  news-title-feed-input"
                     placeholder="Enter Title" />
                 <span class="text-danger mt-2" id="title" style="display: none" role="alert">
                     <strong> </strong>
                 </span>
             </div>
             {{-- description --}}
             <div class="form-group">
                 <textarea placeholder="Write Something Here" class="form-control" id="editor" name="description"></textarea>
                 <span class="text-danger mt-2" id="description" style="display: none" role="alert">
                     <strong> </strong>
                 </span>
             </div>

             {{-- <input type="hidden" name="type" value="text"> --}}


             <progress class="w-100 progress-barr" style="display: none"></progress>

             {{-- images --}}
             <div class="form-group photos-hidden-div hidden-div" id="photos-hidden-div" style="display: none">
                 <div>
                     <div class="modal-content media-upload-height video-drop upload-media-div modal-contentt drop dragandrophandler image"
                         data-type='image' id="dragandrophandler">
                         <label for="image" class="btn btn-default media-upload-height image-label" flow-btn>
                             <h4 class="click"></h4>

                             <img src="{{ asset('frontend/assets/images/upload-pics-image.png') }}" alt=""
                                 class="upload-post-div-image image-modal-image" id=".">
                             <input type="file" class="upload image-input" id="image" name="images[]" hidden
                                 accept="image/*" multiple>


                             {{-- <input type="file" name="test" id="test" multiple> --}}

                             <div class="row justify-content-center edit-display-image-div" id="sortable">
                                 {{-- <div id="status1"></div> --}}
                             </div>
                             <div class="more-images m-3" style="display: none">
                                 <img src="{{ asset('frontend/assets/images/more-images.png') }}" alt=""
                                     style="height: 2rem" data-toggle="tooltip" data-placement="top" title="ADD MORE">
                             </div>
                         </label>
                     </div>
                 </div>
             </div>




             @error('images.*')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror




             {{-- video --}}
             <div class="form-group hidden-div" id="video-hidden-div" style="display: none">
                 <div>
                     <div class="modal-content media-upload-height video-drop upload-media-div modal-contentt dragandrophandler video"
                         data-type='video'>
                         <label for="fileUp" class="btn btn-default media-upload-height" flow-btn>
                             <h4 class="click"></h4>

                             <img src="{{ asset('frontend/assets/images/upload-video-image.png') }}" alt=""
                                 class="upload-post-div-image video-modal-image">
                             <input type="file" class="upload video-input @error('video')  @enderror" id="fileUp"
                                 name="video" hidden accept="video/*">

                             <div class="row display-video-div" style="justify-content: center;">
                                 <div class="col-6">
                                     <div style="justify-content: end;display: flex;">
                                         <button type="button" class="delete-video" style="display: none;">
                                             <i style="font-size: 17px;" class="fa"></i>
                                         </button>
                                     </div>
                                     <video id="vid" style="display: block;width: 100%;height: 100%;"
                                         class="video-play" controls="">
                                         Your browser does not support the video tag.
                                     </video>
                                 </div>
                             </div>
                     </div>
                 </div>
             </div>


             @error('video')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror

             {{-- audio --}}
             <div class="form-group hidden-div" id="audio-hidden-div" style="display: none">
                 <div>
                     <div class="modal-content media-upload-height upload-media-div modal-contentt dragandrophandler audio"
                         data-type='audio'>
                         <label for="audio" class="btn btn-default media-upload-height" flow-btn>
                             <h4 class="click1"></h4>
                             <img src="{{ asset('frontend/assets/images/upload-audio-image.png') }}" alt=""
                                 class="upload-post-div-image audio-modal-image">
                             <input type="file" class="upload audio-show audio-input @error('audio')  @enderror"
                                 id="audio" name="audio" hidden accept=".mp3">

                             <div class="row" style="justify-content: center;">
                                 <div class="col-12 audio-contain">
                                     <div style="justify-content: end;display: flex;">
                                         <button type="button" class="delete-audio">
                                             <i class="fa fa-close"></i>
                                         </button>
                                     </div>
                                     <audio id="aud" class="audio-play" style="display: none" controls="">
                                     </audio>
                                 </div>
                                 {{-- <label for="audio" class="upload-more-btn-audio" style="display: none">
                                        upload another audio
                                    </label> --}}
                             </div>
                         </label>
                     </div>
                 </div>
             </div>

             @error('audio')
                 <span class="text-danger" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror


             <ul class="button-group d-flex justify-content-between align-items-center mt-2">
                 <li class="photo-btn">
                     <p id="myBtnImage"><i class="flaticon-gallery"></i> Photo</p>
                 </li>
                 <li class="video-btn">
                     <button type="file" id="myBtnVideo"><i class="flaticon-video"></i> Video</button>
                 </li>
                 <li class="audio-btn">
                     <button type="file" id="myBtnAudio">
                         <img src="{{ asset('frontend/assets/images/audio/audio-icon.png') }}"/>
                         Audio
                     </button>
                 </li>
                 <li class="free-btn">Free <input type="radio" value="0" name="is_paid" /></li>
                 <li class="Paid-btn">Paid <input type="radio" value="1" name="is_paid" /></li>
             </ul>
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
                 <button class="go-pubilq-btn" type="submit">
                     <img class="gopubliqimg" src="{{ asset('frontend/assets/images/go-pubilq.png') }}"
                         alt="image1" />GO
                     PUBILQ
                 </button>
                 @include('components.sub-components.loadmoreloading', [
                     'class' => 'gopubliq-post-upload-btn',
                 ])
             </div>
         </form>
     </div>

     {{-- scripts --}}

     {{-- tempupload , media preview , status bar , drag and drop , validation --}}
     <script>
         function resetInput(array) {
             array.forEach((input) => {
                 $(input).val('');
             })
         }



         function videoValidation(filesList, obj) {
             window.URL = window.URL || window.webkitURL;
             var video = document.createElement('video');
             video.preload = 'metadata';
             video.onloadedmetadata = function() {
                 window.URL.revokeObjectURL(video.src);
                 var duration = video.duration;

                 if (duration > 180) {
                     uploadedFilesId = [];
                     mediaType = '';
                     toastr.error('can not upload more than 3 minutes video');
                     resetInput(['.video-input'])
                     showAndHideDiv(['.upload-post-div-image'], ['#vid']);

                 } else {
                     // Check if any file is selected.
                     if (filesList.length > 0) {
                         const filesize = Math.round(filesList[0].size / 1024);
                         // The size of the file.
                         if (filesize >= 102400) {
                             uploadedFilesId = [];
                             mediaType = '';
                             toastr.error("File too Big, please select a file less than 100mb");
                             resetInput(['.video-input'])
                             showAndHideDiv(['.upload-post-div-image'], ['#vid']);
                         } else {
                             var fileType = filesList[0].type.substring(0, 5);
                             //  file type validation
                             if (fileType == 'video') {
                                 mediaType = 'video';
                                 handleFileUpload(filesList, obj);
                             } else {
                                 uploadedFilesId = [];
                                 mediaType = '';
                                 toastr.error('please upload video');
                                 resetInput(['.video-input'])
                                 showAndHideDiv(['.video-modal-image'], ['#vid']);

                             }

                         }
                     }
                 }

             }

             video.src = URL.createObjectURL(filesList[0]);
         }

         function showResetIcon() {
             $('.reset-form-upload').show();
             window.onbeforeunload = function() {
                 return true;
             };
         }

         function resetForm(form, hiddenDiv) {
             window.onbeforeunload = null;
             $('.' + form).trigger("reset");
             $('.' + hiddenDiv).hide();
             uploadedFilesId = [];
             obj = [];
             mediaType = 'text';
         }
         // images preview
         function customFileReader(file, index, url) {
             $('.more-images').show();

             $('.edit-display-image-div').append(`<div class="col-4 position-relative img-modal-div " style="overflow: hidden;height: 100%;" data-media-id="${index}"   >
                  <button type="button" id="delete-image-upload-comp-btn" class="delete-image-upload-comp-btn" data-file-index="${index}" onclick="deleteInputfile(this,${index})">
                                   <i style="font-size: 10px;" class="fa"></i>
                               </button>
                  <img src='${url}' class="mt-3" style="max-height: 75px;width: 100%;height: auto;object-fit: contain;" data-sort-id='${uploadedFilesId.length}' >
                  </div>`);
         }

         function videoPreview(file) {
             $('.upload-post-div-image').hide();
             document.getElementById("vid").style.display = "block";
             let blobURL = URL.createObjectURL(file);
             document.querySelector("video").src = blobURL;
         }

         function audioPreview(file) {

             $('.audio-modal-image').hide();
             $('#aud').show();
             const profileAudURL = URL.createObjectURL(file);
             document.querySelector('#aud').setAttribute('src', profileAudURL);
         }

         var uploadedFilesId = [];

         function sendFileToServer(formData, status, fileUrl) {
             //  $('.Uploading').show()
             $('.progress-barr').show()
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
                     //  $('.Uploading').hide();
                     $('.progress-barr').hide();
                     status.setProgress(100);
                     uploadedFilesId.push(data.id);

                     if (data.mimeType == 'video') {
                         uploadedFilesId = [];
                         uploadedFilesId.push(data.id);
                         videoPreview(fileUrl);
                     } else if (data.mimeType == 'image') {
                         $('.upload-post-div-image').hide();
                         customFileReader(fileUrl, data.id, data.url);

                     } else {
                         uploadedFilesId = [];
                         uploadedFilesId.push(data.id);
                         audioPreview(fileUrl)
                     }
                     $("#status1").append("File upload Done<br>");
                 }
             });

             status.setAbort(jqXHR);
         }

         var rowCount = 0;

         function createStatusbar(obj) {
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

         function handleFileUpload(files, obj) {
             for (var i = 0; i < files.length; i++) {
                 var fd = new FormData();
                 fd.append('file', files[i]);
                 // document.getElementById('image-modal-image').style.display = 'none';

                 var status = new createStatusbar(obj); //Using this we can set progress.
                 status.setFileNameSize(files[i].name, files[i].size);
                 sendFileToServer(fd, status, files[i]);

             }
         }
         $(document).ready(function() {
             mediaType = '';
             $("#sortable").sortable();
             var obj = $(".dragandrophandler");
             document.getElementById('image').addEventListener('change', () => {

                 filesList = document.getElementById('image').files;
                 var fileType = filesList[0].type.substring(0, 5);
                 if (fileType == 'image') {
                     $('.image-modal-image').hide();
                     mediaType = 'image'
                     handleFileUpload(filesList, obj);
                 } else {
                     toastr.error('please upload image');
                     resetInput(['.image-input'])

                     $('.image-modal-image').show();
                     //  $('#aud').hide();
                 }

             });
             document.getElementById('fileUp').addEventListener('change', () => {

                 filesList = document.getElementById('fileUp').files;

                 var videoFileType = filesList[0].type.substring(0, 5);

                 if (videoFileType != 'video') {
                     uploadedFilesId = [];
                     mediaType = '';
                     toastr.error('please upload video');
                     resetInput(['.video-input'])

                     showAndHideDiv(['.video-modal-image'], ['#vid']);
                 }


                 // duration validation
                 videoValidation(filesList, obj)


             });

             document.getElementById('audio').addEventListener('change', () => {

                 filesList = document.getElementById('audio').files;
                 var fileType = filesList[0].type.substring(0, 5);
                 //  alert(fileType);
                 if (fileType == 'audio') {
                     mediaType = 'audio';
                     handleFileUpload(filesList, obj);
                 } else {
                     uploadedFilesId = [];
                     mediaType = '';
                     toastr.error('please upload audio');
                     resetInput(['.audio-input'])

                     showAndHideDiv(['.audio-modal-image'], ['#aud']);
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
                 showResetIcon();
                 var files = e.originalEvent.dataTransfer.files;

                 var fileType = files[0].type.substring(0, 5);

                 if (fileType == 'video' && $(this).hasClass(fileType)) {
                     // duration validation
                     videoValidation(files, obj)

                 } else {
                     if ($(this).hasClass(fileType)) {
                         mediaType = fileType;
                         handleFileUpload(files, obj);
                     } else {
                         toastr.error("please upload " + $(this).data('type'))
                     }

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

         });
     </script>

     {{-- images delete script --}}
     <script>
         function deleteInputfile(event, i) {
             event.preventDefault;
             const index = uploadedFilesId.indexOf(i);
             if (index > -1) { // only splice array when item is found
                 uploadedFilesId.splice(index, 1); // 2nd parameter means remove one item only
             }
             //  event.parentNode.style.display = 'none';
             event.parentNode.remove();
             $('.image-label').attr('for', '');
             setTimeout(() => {
                 $('.image-label').attr('for', 'image');
             }, 100);

         }

         $(document).on('mouseover', '.img-modal-div', function() {
             $(this).children('.delete-image-upload-comp-btn').show();
         });
         $(document).on('mouseout', '.img-modal-div', function() {
             $(this).children('.delete-image-upload-comp-btn').hide();
         });
     </script>

     {{-- open media container and upload post --}}
     <script>
         $(document).ready(function() {

             $('.upload-post-form').keydown(function(event) {
                 if (event.keyCode == 13) {
                     event.preventDefault();
                     return false;
                 }
             })

             $('.reset-form-upload').click(function(e) {
                 e.preventDefault();
                 resetForm('upload-post-form', 'hidden-div');
                 $(this).hide();
             });


             $(".upload-post-form").find("input , textarea").on("change", function() {
                 showResetIcon();
             });





             // to upload post with ajax
             $('.upload-post-form').submit(function(e) {
                 e.preventDefault();

                 var obj = [{}];
                 $("div.img-modal-div").each(function(index, element) {
                     obj[$(element).index()] = $(element).data('media-id');
                 });

                 btn = $('.go-pubilq-btn');
                 loadMoreToggle(btn, 'hide', '.gopubliq-post-upload-btn');

                 var fd = new FormData(this);
                 fd.append('uploadedFilesId', uploadedFilesId);
                 fd.append('mediaType', mediaType);
                 if (mediaType != 'text' && mediaType != 'audio' && mediaType != 'video') {
                     fd.append('sortedObj', obj);
                 }

                 $.ajax({
                     type: "post",
                     url: "{{ route('frontend.post.store') }}",
                     data: fd,
                     contentType: false,
                     cache: false,
                     processData: false,
                     success: function(response) {
                         window.onbeforeunload = null;

                         loadMoreToggle(btn, 'show', '.gopubliq-post-upload-btn');
                         if (response.post_type != 'text') {
                             toastr.success('Please wait while your post is uploading')
                             $('.upload-post-queue-loader').show();
                         } else {
                             toastr.success('Post Uploaded');
                             $('.post-append').prepend(response.html);
                         }
                         $('.uohiUOSDGeuoehiaguidaugd3daojg3huibn')
                             .replaceWith(response.uploadPostComponent);

                     },

                     error: function(errors) {
                         // window.onbeforeunload = null;
                         $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                             valueOfElement) {
                             loadMoreToggle(btn, 'show', '.gopubliq-post-upload-btn');
                             toastr.error(valueOfElement)
                         });
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
                 resetInput(['.video-input'])
                 uploadedFilesId = [];
                 mediaType = 'text';
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
                 resetInput(['.audio-input'])
                 uploadedFilesId = [];
                 mediaType = 'text';
                 showAndHideDiv(['.upload-post-div-image'], ['.audio-play']);
             });


             //   image
             $('#myBtnImage').click(function(e) {
                 e.preventDefault();
                 uploadedFilesId = [];
                 mediaType = 'text';
                 $('.edit-display-image-div').empty();

                 showAndHideDiv([{
                     name: '#photos-hidden-div',
                     time: '700'
                 }, '.image-modal-image'], ['#video-hidden-div', '#audio-hidden-div',
                     '.more-images'
                 ])

                 resetInput(['.audio-input', '.video-input', '.image-input']);

             });

             // video
             $('#myBtnVideo').click(function(e) {
                 e.preventDefault();
                 uploadedFilesId = [];
                 mediaType = 'text';

                 showAndHideDiv([{
                     name: '#video-hidden-div',
                     time: '700'
                 }, '.upload-post-div-image'], ['#audio-hidden-div', '#photos-hidden-div',
                     '.video-play'
                 ])

                 resetInput(['.audio-input', '.video-input', '.image-input']);

             });

             // audio
             $('#myBtnAudio').click(function(e) {
                 e.preventDefault();
                 uploadedFilesId = [];
                 mediaType = 'text';

                 showAndHideDiv([{
                     name: '#audio-hidden-div',
                     time: '700'
                 }, '.upload-post-div-image'], ['#video-hidden-div', '#photos-hidden-div',
                     '.audio-play'
                 ])

                 resetInput([
                     '.audio-input', '.video-input', '.image-input'
                 ]);

             });

         });
     </script>
 </div>
