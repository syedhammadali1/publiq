{{-- images --}}
<div class="form-group photos-hidden-div" id="photos-hidden-div">
    <div>
        <div class="modal-content media-upload-height video-drop upload-media-div modal-contentt drop dragandrophandler image"
            data-type='image' id="dragandrophandler">
            <label for="edit-image" class="btn btn-default media-upload-height image-label image-label-edit" flow-btn>
                <h4 class="click"></h4>

                <img src="{{ asset('frontend/assets/images/upload-pics-image.png') }}" alt=""
                    class="upload-post-div-image image-modal-image d-none" id="image-modal-image">
                <input type="file" class="upload image-input" id="edit-image" name="images[]" hidden accept="image/*"
                    multiple>

                <div class="row justify-content-center display-image-div" id="editsortable">
                    @foreach ($user_post->media as $index => $image)
                        <div class="col-4 position-relative img-modal-div-edit HJSfdghr" data-media-id={{ $image->id }}
                            style="overflow: hidden;height: 100%;" data-media-id="{{ $image->id }}">
                            <button type="button" id="delete-image-upload-comp-btn"
                                class="delete-image-upload-comp-btn" data-id="{{ $image->id }}"
                                onclick="addToDeleteArray(this)">
                                <i style="font-size: 10px;" class="fa"></i>
                            </button>
                            <img src='{{ @$image->getFullUrl() }}' class="mt-3 "
                                style="max-height: 75px;width: 100%;height: auto;object-fit: contain;">
                        </div>
                    @endforeach
                </div>
                <div class="more-images m-3">
                    <img src="{{ asset('frontend/assets/images/more-images.png') }}" alt="" style="height: 2rem"
                        data-toggle="tooltip" data-placement="top" title="ADD MORE">
                </div>
            </label>
        </div>
    </div>
</div>

<script>
    var deleteImageArray = [],
        sortableFiles = [];

    addToDeleteArray = (e) => {
        deleteImageArray.push($(e).data('id'));
        // e.parentNode.style.display = 'none';
        $('.image-label-edit').attr('for', '');
        setTimeout(() => {
            $('.image-label-edit').attr('for', 'edit-image');
        }, 100);
        e.parentNode.remove();
    }

    // images preview
    function customFileReaderEdit(file, index,url) {

            $('.display-image-div').append(`<div class="col-4 position-relative img-modal-div-edit" style="overflow: hidden;height: 100%;" data-media-id="${index}">
              <button type="button" id="delete-image-upload-comp-btn" class="delete-image-upload-comp-btn" data-file-index="${index}" onclick="deleteInputfileEdit(this,${index})">
                               <i style="font-size: 10px;" class="fa"></i>
                           </button>
              <img src='${url}' class="mt-3 " style="max-height: 75px;width: 100%;height: auto;object-fit: contain;"  >
              </div>`);

    }



    $(document).ready(function() {
        $("#editsortable").sortable();
        var obj = $(".dragandrophandler");

        document.getElementById('edit-image').addEventListener('change', () => {

            filesList = document.getElementById('edit-image').files;

            var fileType = filesList[0].type.substring(0, 5);
            if (fileType == 'image') {
                handleFileUploadEdit(filesList, obj);
            } else {
                toastr.error('please upload image');
                $('.image-input').val('');
                $('.image-modal-image').show();
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

            var fileType = files[0].type.substring(0, 5);

            if ($(this).hasClass(fileType)) {
                handleFileUploadEdit(files, obj);
            } else {
                toastr.error("please upload " + $(this).data('type'))
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

        $('.upload').change(function(e) {
            e.preventDefault();
            $('.upload-post-div-image').hide();

        });

    });


    function deleteInputfileEdit(event, i) {
        event.preventDefault;
        const index = uploadedFilesIdEdit.indexOf(i);
        if (index > -1) { // only splice array when item is found
            uploadedFilesIdEdit.splice(index, 1); // 2nd parameter means remove one item only
        }

        // event.parentNode.style.display = 'none';
        $('.image-label-edit').attr('for', '');
        setTimeout(() => {
            $('.image-label-edit').attr('for', 'edit-image');
        }, 100);
        event.parentNode.remove();

    }

    $(document).on('mouseover', '.img-modal-div-edit', function() {
        $(this).children('.delete-image-upload-comp-btn').show();
    });
    $(document).on('mouseout', '.img-modal-div-edit', function() {
        $(this).children('.delete-image-upload-comp-btn').hide();
    });
</script>
