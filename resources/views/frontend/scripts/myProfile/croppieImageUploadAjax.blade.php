 <script>
     var resizeDP;
     var resizeCover;

     function showLoadingOnDpOrCover(btnToHide, loadingIcon, divForSkeleton, state, className = null) {
         if (className == null) {
             className = 'skeleton'
         }
         if (state == 'show') {
             divForSkeleton.addClass(className);
             btnToHide.hide();
             loadingIcon.show();
         }
         if (state == 'hide') {
             divForSkeleton.removeClass(className);
             btnToHide.show();
             loadingIcon.hide();
         }
     }

     $('#dpchange').on('change', function() {
         if (!$('#dp-croppie').data('croppie')) {
             showLoadingOnDpOrCover(
                 $('#btn-select-image'),
                 $('.dp-loading-icon'),
                 $('#dpDiv'), 'show', 'skeleton-dark');
             resizeDP = $('#dp-croppie').croppie({
                 enableExif: true,
                 enableOrientation: true,
                 viewport: { // Default { width: 100, height: 100, type: 'square' }
                     width: $('.info-image').width(),
                     height: $('.info-image').height(),
                     type: 'square' //square
                 },
                 boundary: {
                     width: $('.info-image').width(),
                     height: $('.info-image').height()
                 }
             });

             setTimeout($.proxy(function() {
                 showLoadingOnDpOrCover(
                     $('#btn-select-image'),
                     $('.dp-loading-icon'),
                     $('#dpDiv'), 'hide', 'skeleton-dark');
             }, showLoadingOnDpOrCover()), 3000);

             setTimeout(() => {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                     resizeDP.croppie('bind', {
                         url: e.target.result
                     }).then(function() {

                     });
                 }
                 reader.readAsDataURL(this.files[0]);
                 reader.onloadend = () => {
                     $('#dp-croppie').show()
                     $('#dpDiv').hide()
                     $('#btn-select-image').hide()
                     $('.dp-croppie-actions-btn').show()
                 }
             }, 3000);
         } else {
             var reader = new FileReader();
             reader.onload = function(e) {
                 resizeDP.croppie('bind', {
                     url: e.target.result
                 }).then(function() {

                 });
             }
             reader.readAsDataURL(this.files[0]);
         }
     });

     $('#btn-close-image').on('click', function(ev) {
         $('#dp-croppie').hide()
         $('#dpDiv').show()
         $('#btn-select-image').show()
         $('.dp-croppie-actions-btn').hide()
         $('#dp-croppie').croppie('destroy')
     });

     $('#btn-upload-image').on('click', function(ev) {
         showLoadingOnDpOrCover(
             $('.dp-croppie-actions-btn'),
             $('.dp-loading-icon'),
             $('#dp-croppie > .cr-boundary > .cr-vp-square'),
             'show');

         resizeDP.croppie('result', {
             type: 'canvas',
             size: {
                 width: 250,
                 height: 250,
                 type: 'square'
             },
             format: 'png'
         }).then(function(img) {
             $.ajax({
                 url: "{{ route('frontend.upload.media') }}",
                 type: "POST",
                 data: {
                     "avatar": img
                 },
                 success: function(data) {
                     $('#dp-croppie').hide()
                     $('#dpDiv').show()
                     $('#btn-select-image').show()
                     $('.dp-croppie-actions-btn').hide()
                     $('.dp-loading-icon').hide()
                     $('#dpDiv').attr('src', img);
                     $('#header-profile').attr('src', img);
                     $('#dp-croppie').croppie('destroy')
                 }
             });
         });
     });

     $('#coverchange').on('change', function() {
         if (!$('#cover-croppie').data('croppie')) {
             showLoadingOnDpOrCover($('#btn-select-cover'), $('.cover-loading-icon'), $('#coverDiv'), 'show');
             resizeCover = $('#cover-croppie').croppie({
                 enableExif: true,
                 enableOrientation: true,
                 viewport: { // Default { width: 100, height: 100, type: 'square' }
                     width: $('.profile-cover-image').width(),
                     height: $('.profile-cover-image').height(),
                     type: 'square' //square
                 },
                 boundary: {
                     width: $('.profile-cover-image').width(),
                     height: $('.profile-cover-image').height(),
                 }
             });

             setTimeout($.proxy(function() {
                 showLoadingOnDpOrCover($('#btn-select-cover'), $('.cover-loading-icon'), $(
                         '#coverDiv'),
                     'hide');
             }, showLoadingOnDpOrCover()), 3000);

             setTimeout(() => {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                     resizeCover.croppie('bind', {
                         url: e.target.result
                     }).then(function() {

                     });
                 }
                 reader.readAsDataURL(this.files[0]);
                 reader.onloadend = () => {
                     $('#coverDiv').hide();
                     $('#btn-select-cover').hide();
                     $('#cover-croppie').show();
                     $('.cover-croppie-actions-btn').show();
                 }
             }, 3000);
         } else {
             var reader = new FileReader();
             reader.onload = function(e) {
                 resizeCover.croppie('bind', {
                     url: e.target.result
                 }).then(function() {

                 });
             }
             reader.readAsDataURL(this.files[0]);
         }
     });

     $('#btn-close-cover').on('click', function(ev) {
         $('#cover-croppie').hide()
         $('#coverDiv').show()
         $('#btn-select-cover').show()
         $('.cover-croppie-actions-btn').hide()
         $('#cover-croppie').croppie('destroy')
     });

     $('#btn-upload-cover').on('click', function(ev) {
         showLoadingOnDpOrCover(
             $('.cover-croppie-actions-btn'),
             $('.cover-loading-icon'),
             $('#cover-croppie > .cr-boundary > .cr-vp-square'),
             'show');
         resizeCover.croppie('result', {
             type: 'canvas',
             size: {
                 width: 1920,
                 height: 350,
                 type: 'square',
             },
             format: 'png'
         }).then(function(img) {
             $.ajax({
                 url: "{{ route('frontend.upload.media') }}",
                 type: "POST",
                 data: {
                     "cover": img
                 },
                 success: function(data) {
                     $('#coverDiv').attr('src', img);
                     $('#cover-croppie').hide()
                     $('.cover-croppie-actions-btn').hide()
                     $('.cover-loading-icon').hide()
                     $('#btn-select-cover').show()
                     $('#coverDiv').show()
                     $('#cover-croppie').croppie('destroy')
                 }
             });
         });
     });
 </script>
