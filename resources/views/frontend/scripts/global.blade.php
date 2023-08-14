 <script>
     var PerviousUrl = null;
     var currentRoute = document.URL.replace({!! json_encode(env('APP_URL')) !!}, "")
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         data: {
             'DOMURL': currentRoute
         }
     });

     function copyText() {
         /* Get the text field */
         var copyText = document.getElementById("external-share-content");
         /* Select the text field */
         copyText.select();
         copyText.setSelectionRange(0, 99999); /* For mobile devices */

         /* Copy the text inside the text field */
         navigator.clipboard.writeText(copyText.value);
         /* Alert the copied text */
     }

     (function($) {
         $.fn.shorten = function(settings) {
             var config = {
                 showChars: 100,
                 ellipsesText: "...",
                 moreText: "Show More",
                 lessText: "Show Less"
             };

             if (settings) {
                 $.extend(config, settings);
             }

             $(document).off("click", '.morelink');

             $(document).on({
                 click: function() {

                     var $this = $(this);
                     if ($this.hasClass('less')) {
                         $this.removeClass('less');
                         $this.html(config.moreText);
                     } else {
                         $this.addClass('less');
                         $this.html(config.lessText);
                     }
                     $this.parent().prev().toggle();
                     $this.prev().toggle();
                     return false;
                 }
             }, '.morelink');

             return this.each(function() {
                 var $this = $(this);
                 if ($this.hasClass("shortened")) return;

                 $this.addClass("shortened");
                 var content = $this.html();
                 if (content.length > config.showChars) {
                     var c = content.substr(0, config.showChars);
                     var h = content.substr(config.showChars, content.length - config.showChars);
                     var html = c + '<span class="moreellipses">' + config.ellipsesText +
                         ' </span><span class="morecontent"><span>' + h +
                         '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
                     $this.html(html);
                     $(".morecontent span").hide();
                 }
             });

         };

     })(jQuery);

     function getTitle(params, forclass) {
         $.ajax({
             url: "{{ route('frontend.get.count') }}",
             type: "POST",
             data: {
                 for: params
             },
             success: function(response) {
                 var title = {
                     "all-Following": "Followings",
                     "Followers-added": "Followers",
                     "all-Subscribed": "Subscribeds",
                     "Subscribed-added": "Subscribers",
                     "all-photos": "Free Photos Posts",
                     "photos-albums": "Paid Photos Posts",
                     "all-audio": "Free Audios Posts",
                     "audio-albums": "Paid Audios Posts",
                     "all-free": "Free Videos Posts",
                     "paid-added": "Paid Videos Posts",
                     "member-free-audio": "Free Audios",
                     "member-paid-audio": "Paid Audios",
                     "member-free-photos": "Free Photos",
                     "member-paid-photos": "Paid Photos",
                     "member-users": "Member",
                 }
                 $('.title-' + forclass + ' > h3').html(title[params]);
                 $('.title-' + forclass + ' > span').html(response.count);
             }
         });
     }

     function showLoading(workdiv, searchingdiv) {
         if (searchingdiv != null) {

         }
         if (workdiv != null) {
             $(workdiv).toggleClass('loading-work');
         }
     }

     function loadMoreToggle(item, state, loaddivclass = null) {
         if (state == 'show') {
             item.show();
             if (loaddivclass != null) {
                 $(loaddivclass).hide();
             } else {
                 $('.load-more-loading-div').hide();
             }
         }
         if (state == 'hide') {
             item.hide();
             if (loaddivclass != null) {
                 $(loaddivclass).show();
             } else {
                 $('.load-more-loading-div').show();
             }
         }
     }

     $(document).on('input', '.user-comment', function(e) {
         this.style.height = 'auto';
         this.style.height = (this.scrollHeight) + 'px';
     })

     $(document).on('click', '.user-comment-send', function(e) {
         let btn = $(this)
         post = $(btn.parent().siblings()[0])
         comment = post.val()
         if (comment.trim().length > 0) {
             $.ajax({
                 type: "POST",
                 url: "{{ route('frontend.comment.post') }}",
                 data: {
                     'post_id': post.data('post-id'),
                     'message': comment,
                 },
                 dataType: "json",
                 success: function(response) {
                     post.val('')
                     post.height(10)
                 }
             });
         }
     })

     //  $(document).on("keypress", ".user-comment", function(e) {
     //      if (e.which == 13) {
     //          post = $(this);
     //          comment = post.val();
     //          if (comment.trim().length > 0) {
     //              $.ajax({
     //                  type: "POST",
     //                  url: "{{ route('frontend.comment.post') }}",
     //                  data: {
     //                      'post_id': post.data('post-id'),
     //                      'message': comment,
     //                  },
     //                  dataType: "json",
     //                  success: function(response) {
     //                      post.val('')
     //                      post.height(10)
     //                  }
     //              });
     //          }
     //      }
     //  });

     function userlike(id) {
         $.ajax({
             type: 'POST',
             url: "{{ route('frontend.like.post') }}",
             data: {
                 id: id
             },
             success: function(data) {
                 if (data.status) {
                     $('.post-like-icon-' + id).attr('class', 'fa fa-thumbs-up post-like-icon-' + id);
                     $('.post-like-text-' + id).c('Like');
                 } else {
                     $('.post-like-icon-' + id).attr('class', 'flaticon-like post-like-icon-' + id);
                     $('.post-like-text-' + id).text('Like');
                 }
             }
         });
     }

     $(document).on("click", ".noti-follow-action", function(e) {
         post = $(this);
         $.ajax({
             type: "POST",
             url: "{{ route('frontend.notifications.follow-request') }}",
             data: {
                 'sender_id': post.data('sender-id'),
                 'notification_id': post.data('notification-id'),
                 'action': post.data('action'),
             },
             dataType: "json",
             success: function(response) {
                 //  if (post.data('for-page')) {
                 //      alert('page')

                 //  } else {
                 //      alert('no page')

                 $('.unreadfollow-count').text(response.unreadCount);
                 $('.fndiv-' + post.data('notification-id')).attr('class', 'd-none');

                 if ($('.unreadfollow-count').hasClass(
                         'unreadfollow-notiticaton-count')) {
                     $('.unreadfollow-count').removeClass(
                         'unreadfollow-notiticaton-count');
                 }
                 //  }
             }
         });
     });


     $(document).on("click", ".setMarkAsRead", function(e) {
         var element = $(this);
         if (element.data('action') == 'open') {
             $.ajax({
                 type: "get",
                 url: "{{ route('frontend.notification.markAsRead') }}",
                 data: {
                     foruse: element.data('foruse')
                 },
                 dataType: "json",
                 success: function(response) {}
             });
             if (element.data('foruse') == 'notification') {
                 $('.unreadnotifications-count').text('0');
                 if ($('.unreadnotifications-count').hasClass(
                         'unreadnotifications-note-count')) {
                     $('.unreadnotifications-count').removeClass(
                         'unreadnotifications-note-count');
                 }
             }

             if (element.data('foruse') == 'message') {
                 $('.unreadmessage-count').text('0');
                 if ($('.unreadmessage-count').hasClass(
                         'unreadnotifications-note-count')) {
                     $('.unreadmessage-count').removeClass(
                         'unreadnotifications-note-count');
                 }
             }

             $(this).data('action', 'close')
         } else {
             $(this).data('action', 'open')
         }
     });

     function OpenSinglePost(post) {
         if (post.data('element-type')) {
             //  alert(post.data('element-type'))
             //  if (post.data('element-type') == 'video') {
             //      a = jQuery(post.get(0)).children().get(0)
             //      //  if (a.paused) {
             //      //     jQuery("#video").trigger('play');
             //      //     jQuery(".play").fadeOut(500);
             //      // } else {
             //      //     jQuery("#video").trigger('pause');
             //      //     jQuery(".play").fadeIn(500);
             //      // }
             //      b = a.pause
             //      console.log(a.pause)
             //     //  document.querySelector('input[value="14"]')
             //      console.log(b)
             //  }
         }
         if (post.data('id')) {
             $('#loaderModal').modal('show')
             $.ajax({
                 type: "get",
                 url: "{{ route('frontend.single.post.render') }}",
                 data: {
                     id: post.data('id'),
                 },
                 dataType: 'json',
                 success: function(response) {
                     if ('postNotAvailable' in response) {
                        toastr.error('This post has been deleted')
                     } else {
                         if ('subToView' in response) {
                             $('.mediumModalBody').html(response.html);
                             $('#mediumModal').modal('show')
                         } else {
                             $('#fullScreenModal').modal('show')
                             $('#fullScreenModalLabel').text('Post');
                             $('.fullScreenModalBody').html(response.html);
                         }
                     }

                     $('#loaderModal').modal('hide')
                 }
             });
         }
     }

     function OpenPostLikes(post) {
         $('.mediumModalBody').html(`@include('components.SinglePost.like.feedpost.skeleton')`);
         $('#mediumModal').modal('show')
         $('#mediumModalLabel').text('Likes');
         $.ajax({
             type: "get",
             url: '/render' + '/post/' + post.data('post-id') + '/likes',
             data: {},
             dataType: 'html',
             success: function(response) {
                 $('.mediumModalBody').html(response);
             }
         });
     }

     function OpenPostShares(post) {
         $('.mediumModalBody').html(`@include('components.SinglePost.like.feedpost.skeleton')`);
         $('#mediumModal').modal('show')
         $('#mediumModalLabel').text('Shares');
         $.ajax({
             type: "get",
             url: '/render' + '/post/' + post.data('post-id') + '/shares',
             data: {},
             dataType: 'html',
             success: function(response) {
                 $('.mediumModalBody').html(response);
             }
         });
     }

     function OpenCommentLikes(comment) {
         $('.mediumModalBody').html(`@include('components.SinglePost.like.feedpost.skeleton')`);
         $('#mediumModal').modal('show')
         $('#mediumModalLabel').text('Likes');
         $.ajax({
             type: "get",
             url: '/render' + '/comment/' + comment.data('commentId') + '/likes',
             data: {},
             dataType: 'html',
             success: function(response) {
                 $('.mediumModalBody').html(response);
             }
         });
     }

     $(document).on('click', '.show-likes', function(e) {
         //  $('.main-content-wrapper').addClass('bodyblur');
         if ($(this).data('foruse') == 'post') { //basically it's for likes
             OpenPostLikes($(this));
         }
         if ($(this).data('foruse') == 'comment') {
             OpenCommentLikes($(this));
         }
         if ($(this).data('foruse') == 'share') {
             OpenPostShares($(this));
         }
     })

     $(document).on("click", ".post-modal", function(e) {
         PerviousUrl = document.URL;
         post = $(this);
         if (post.data('element-type')) {
             if (post.data('element-type') == 'video') {
                 element = jQuery(post.get(0)).children().get(0)
                 if (element.paused) {
                     e.preventDefault();
                 }
             }
         }
         OpenSinglePost(post);
     });

     $(document).on("click", ".fullScreenModalClose", function(e) {
         $('.fullScreenModalBody').html(`@include('components.sub-components.loadMoreModal')`);
     });
     $(document).on("click", ".post-modal-close-btn", function(e) {
         window.history.back()
         $(window).unbind('popstate');
     });

     $(document).on("click", ".modal", function(e) {
         //  $('.main-content-wrapper').removeClass('bodyblur');
     });

     $(document).on("click", ".mediumModalClose", function(e) {
         //  $('.main-content-wrapper').removeClass('bodyblur');
         $('.mediumModalHeader').removeClass('d-none');
         $('.mediumModalBody').html(`@include('components.sub-components.loadMoreModal')`);
         $('#mediumModalLabel').text('');
     });

     $(document).on("click", ".add-follow-member", function(e) {
         e.preventDefault();
         user = $(this);
         username = user.data('username');
         foruser = user.data('foruse');
         if (foruser == 'global_search') {
             data = {
                 'global_search': true
             }
         }
         if (foruser == 'like_user') {
             data = {
                 'like_user': true
             }
         }
         $.ajax({
             type: "GET",
             url: "/send-follow-request" + "/" + username,
             data: data,
             dataType: 'html',
             success: function(response) {
                 if (foruser == 'global_search') {
                     $('.global-single-member-' + username.replace(".", "-")).html(response);
                 }
                 if (foruser == 'like_user') {
                     $('.like-single-user-' + username.replace(".", "-")).html(response);
                 }
             }
         });
     });

     $(document).on("click", '.pending-follow-member', function(e) {
         e.preventDefault();
         user = $(this);
         username = $(this).data('username');
         foruser = user.data('foruse');
         if (foruser == 'global_search') {
             data = {
                 'global_search': true
             }
         }
         if (foruser == 'like_user') {
             data = {
                 'like_user': true
             }
         }
         $.ajax({
             type: "GET",
             url: "/remove-follow-request" + "/" + username,
             data: data,
             dataType: 'html',
             success: function(response) {
                 if (foruser == 'global_search') {
                     $('.global-single-member-' + username.replace(".", "-")).html(response);
                 }
                 if (foruser == 'like_user') {
                     $('.like-single-user-' + username.replace(".", "-")).html(response);
                 }
             }
         });
     });

     $(document).on('click', '.edit-post', function() {
         //  alert('edit');
         $('#mediumModal').modal('show');
         $('#mediumModalLabel').text('Edit Post');
         userPost = $(this).data('post_id');
         $.ajax({
             type: "GET",
             url: "/post/{{ auth()->user()->name }}" + "/" + userPost + '/edit',
             dataType: 'html',
             success: function(response) {
                 $('.mediumModalBody').html(response);
             }
         });
     });

     $(document).on('click', '.share-post', function() {
         share = $(this);
         if (share.data('foruse') && share.data('post_id')) {
             $('#mediumModal').modal('show');
             $('#mediumModalLabel').text('Share Post');
             $.ajax({
                 type: "GET",
                 url: "/post/share",
                 data: {
                     'post': share.data('post_id'),
                     'foruse': share.data('foruse')
                 },
                 dataType: 'html',
                 success: function(response) {
                     $('.mediumModalBody').html(response);
                 }
             });
         }
     });

     $(document).on('click', '.report-post-btn', function() {
         userPost = $(this).data('post_id');
         $('#fullScreenModal').modal('show');
         $('#fullScreenModalLabel').text('Report');
         $.ajax({
             type: "GET",
             url: "{{ route('frontend.render.component') }}",
             data: {
                 'comp_for': 'report-post',
                 'post': userPost
             },
             dataType: 'html',
             success: function(response) {
                 $('.fullScreenModalBody').html(response);
             }
         });
     });

     function commentLike(id) {
         $.ajax({
             type: 'POST',
             url: "{{ route('frontend.like.comment') }}",
             data: {
                 id: id
             },
             success: function(data) {
                 if (data.status) {
                     $('.comment-like-icon-' + id).attr('class',
                         'fa fa-thumbs-up comment-like comment-like-icon-' + id);
                 } else {
                     $('.comment-like-icon-' + id).attr('class',
                         'flaticon-like comment-like comment-like-icon-' + id);
                 }
             }
         });
     }

     $(document).on('click', '.comment-like', function() {
         commentLike($(this).data('commentId'));
     });

     $(document).on('click', '.toggle-comments', function(e) {
         e.preventDefault()
         element = $(this);
         $('.post-all-comments-' + element.data('id')).slideToggle();
         element.toggleClass("less")
         if (element.hasClass("less")) {
             element.html("View Less");
             $(`.more-comments > div > .previous-comments[data-id="` + element.data('id') + `"]`).show();
         } else {
             element.html("View More");
             $(`.more-comments > div > .previous-comments[data-id="` + element.data('id') + `"]`).hide();
         }
     });

     $(document).on('click', '.previous-comments', function(e) {
         e.preventDefault()
         var post = $(this);
         $.ajax({
             type: "get",
             url: '/render/post/' + post.data('id') + '/previous-comments',
             data: {
                 'page': post.data('page')
             },
             dataType: 'json',
             success: function(response) {
                 if (post.data('page') == 1) {
                     $(`.more-comments > .toggle-comments[data-id="` + post.data('id') + `"]`)
                         .show();
                 }
                 post.data('page', post.data('page') + 1);
                 $('.post-all-comments-' + post.data('id')).prepend(response.html);
                 if ("has_finish" in response) {
                     post.remove();
                 }
             }
         });
     });


     function showAndHideDiv(show, hide) {
         show.forEach((div) => {
             if (typeof div == 'object') {
                 $(div['name']).show(parseInt(div['time']));
             } else {
                 $(div).show();
             }
         })
         hide.forEach((div) => {
             $(div).hide();
         })
     }

     $(document).on('click', '.show-single-image-modal', function(e) {
        //   $('#imagePreview').modal('show');
         $('#imagePreview').fadeIn('slow');
         $('#modalImage').attr('src', $(this).prop('src'));

     });
     $(document).on('click', '.ImageModalClose', function(e) {
        //   $('#imagePreview').modal('show');
         $('#imagePreview').fadeOut('slow');
         $('#modalImage').attr('src', '#');

     });


     function imagePreviewChat(file = null, index = null, url = null, randomId = null) {
         showAndHideDiv(['.chat-image-preview-container-parent', '.chat-image-preview-container',
             '.chat-add-more-image'], ['.message_attachment_label']);
         $('.chat-image-preview-container').append(`<div class="col-2 text-center position-relative chat-image-div">
            <button type="button" class="chat-image-delete-btn" data-file-index="${index}" data-delete-id="1" onclick="deleteChatImage(this)">
                                   <i style="font-size: 20px;" class="fa"></i>

                               </button>
                    <img class="rounded float-left mb-1 show-single-image-modal" alt="200x200" style="width: 100%; height: 100px;object-fit: contain;" data-randomId="${randomId}"
                    src="${url}"
                    data-holder-rendered="true">
                </div>`);
     }

     function sendFileToServerChat(formData, status, fileUrl, _randomId = null) {
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
                 $('.chat-image-container').hide();
                 //  uploadedFilesId.push(data.id);
                 if (data.mimeType == 'video') {
                     //  uploadedFilesId = [];
                     //  uploadedFilesId.push(data.id);
                     //  videoPreview(fileUrl);
                 } else if (data.mimeType == 'image') {
                     const id = data.id;
                     const object = {};
                     object['id'] = id;
                     object['url'] = data.url;
                     chat_image_ids.push(object);
                     $("[data-randomId=" + _randomId + "]")
                         .siblings('.chat-image-delete-btn')
                         .attr("data-delete-id", id);



                     //  $('.upload-post-div-image').hide();
                     //  imagePreviewChat(fileUrl, data.id, data.url);

                 } else {
                     //  uploadedFilesId = [];
                     //  uploadedFilesId.push(data.id);
                     //  audioPreview(fileUrl)
                 }
                 $("#status1").append("File upload Done<br>");
             }
         });

         status.setAbort(jqXHR);
     }

     var rowCount = 0;

     function createStatusbarChat(obj) {
         //  rowCount++;
         //  var row = "odd";
         //  if (rowCount % 2 == 0) row = "even";
         //  this.statusbar = $("<div class='statusbar'></div>");
         //  this.filename = $("<div class='filename'></div>").appendTo(this.statusbar);
         //  this.size = $("<div class='filesize'></div>").appendTo(this.statusbar);
         //  this.progressBar = $("<div class='progressBar'><div></div></div>").appendTo(this.statusbar);
         //  this.abort = $("<div class='abort'>Abort</div>").appendTo(this.statusbar);
         this.statusbar = $("<div class='statusbar position-relative' style='bottom:19px'></div>");
         this.filename = $("<div class='filename'></div>").appendTo(this.statusbar);
         this.size = $("<div class='filesize'></div>").appendTo(this.statusbar);
         this.progressBar = $(
             "<div class='progressBar bg-transparent'><div class='progress-bar' style='border-radius: 15px 15px 8px 8px;background: radial-gradient(#542068, #54206861)'></div></div>"
             ).appendTo(
             this
             .statusbar);
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



             //  this.filename.html(name);
             //  this.size.html(sizeStr);
         }
         this.setProgress = function(progress) {
             var progressBarWidth = progress * this.progressBar.width() / 100;
             this.progressBar.find('div').animate({
                     width: progressBarWidth,
                     height: '15px',

                 }, 100)
                 .html(progress + "% ");
             if (parseInt(progress) >= 100) {

                 this.abort.hide();

                 setTimeout(() => {
                     this.progressBar.fadeOut()
                 }, 3000);

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

     function handleFileUploadChat(files, obj, type) {
         for (var i = 0; i < files.length; i++) {
             if (files[i].type.substring(0, 5) == type) {
                 var fd = new FormData();
                 fd.append('file', files[i]);
                 // document.getElementById('image-modal-image').style.display = 'none';

                 let _randomId = Math.floor(Math.random() * 100000000);
                 imagePreviewChat('', '12', URL.createObjectURL(files[i]), _randomId);
                 let div = $("[data-randomId=" + _randomId + "]")
                 var status = new createStatusbarChat(div); //Using this we can set progress.
                 status.setFileNameSize(files[i].name, files[i].size, );
                 sendFileToServerChat(fd, status, files[i], _randomId);
             } else {
                 alert('all media must have same type')
             }


         }
     }

     function deleteChatImage(event) {
         event.preventDefault;
         const id = event.getAttribute("data-delete-id");
         //  const index = chat_image_ids.indexOf(parseInt(id));

         const index = chat_image_ids.findIndex(function(image) {
             return image.id == parseInt(id)
         });

         if (index > -1) { // only splice array when item is found
             chat_image_ids.splice(index, 1); // 2nd parameter means remove one item only
         }


         //   event.parentNode.style.display = 'none';
         event.parentNode.remove();

         !chat_image_ids.length ? showAndHideDiv(['.message_attachment_label'],['.chat-image-preview-container']) : ''
     }
 </script>
