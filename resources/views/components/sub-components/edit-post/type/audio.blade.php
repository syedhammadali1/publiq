{{-- audio --}}
<div class="form-group" id="audio-hidden-div">
    <div>
        <div class="modal-content media-upload-height upload-media-div modal-contentt dragandrophandler audio"
            data-type='audio'>
            <label for="edit-audio" class="btn btn-default media-upload-height" flow-btn>
                <h4 class="click1"></h4>
                <img src="{{ asset('frontend/assets/images/upload-audio-image.png') }}" alt=""
                    class="upload-post-div-image audio-modal-image" style="display: none">
                <input type="file" class="upload audio-show audio-input @error('audio')  @enderror" id="edit-audio"
                    name="audio" hidden accept=".mp3">

                <div class="row" style="justify-content: center;">
                    <div class="col-12 audio-contain">
                        <div style="justify-content: end;display: flex;">
                            <button type="button" class="delete-audio">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                        <audio id="edit-aud" class="audio-play" controls=""
                            src="{{ @$user_post->getFirstMediaUrl('audio') }}">
                        </audio>
                    </div>
                </div>
            </label>
        </div>
    </div>
</div>

<script>

    function audioPreview(file) {
        showAndHideDiv(['#edit-aud'], ['.audio-modal-image']);
        const profileAudURL = URL.createObjectURL(file);
        $('.audio-play').attr('src', profileAudURL);

    }

    $(document).ready(function() {

        uploadedFilesIdEdit = {!! json_encode($user_post->media[0]->id) !!}

        $("#sortable").sortable();
        var obj = $(".dragandrophandler");

        document.getElementById('edit-audio').addEventListener('change', () => {

            filesList = document.getElementById('edit-audio').files;
            var fileType = filesList[0].type.substring(0, 5);
            if (fileType == 'audio') {
                handleFileUploadEdit(filesList, obj);
            } else {
                toastr.error('please upload audio');
                $('.audio-input').val('');
                showAndHideDiv(['.audio-modal-image'], ['#edit-aud']);

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



        // clear button display audio
        $('#edit-aud, .delete-audio').hover(function() {
            $('.delete-audio').css('display', 'block');

        }, function() {
            $('.delete-audio').css('display', 'none');
        });


        // clear button functionality in audio div
        $('.delete-audio').on('click', function() {
            uploadedFilesIdEdit = [];
            $('.audio-input').val('');
            showAndHideDiv(['.upload-post-div-image'], ['.audio-play']);
        });

        $('.upload').change(function(e) {
            e.preventDefault();
            $('.upload-post-div-image').hide();

        });
    });
</script>
