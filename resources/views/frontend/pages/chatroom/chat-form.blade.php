<div class="flex-grow-0 py-3 px-4 border-top position-absolute w-100 bottom-0 msg-backgound ">
    <div class="row mb-2 chat-image-preview-container-parent" style="display: none">
        <div class="col-12">
            <div class="row d-flex">


                <div class="row chat-image-preview-container">
                    <div class="col-2 chat-add-more-image">
                        <label for="message_attachment" class="btn btn-default" flow-btn>
                            <img src="{{ asset('frontend/assets/images/more-images.png') }}" alt=""
                                data-toggle="tooltip" data-placement="top" title="ADD MORE">
                        </label>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="form-group">
        <div>
            <div class="modal-content media-upload-height video-drop upload-media-div modal-contentt drop dragandrophandler chat-image-container"
                data-type='image' id="dragandrophandler" style="display: none">
                <label for="message_attachment" class="btn btn-default media-upload-height image-label" flow-btn>

                    <img src="{{ asset('frontend/assets/images/upload-pics-image.png') }}" alt=""
                        class="upload-post-div-image image-modal-image" id=".">

                    <input type="file" name="message_attachment[]" multiple id='message_attachment' accept="image/*" />


                    <div class="more-images m-3" style="display: none">
                        <img src="{{ asset('frontend/assets/images/more-images.png') }}" alt=""
                            style="height: 2rem" data-toggle="tooltip" data-placement="top" title="ADD MORE">
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="input-group">
        <input type="text" class="form-control" name="message" id="message_box" placeholder="Type your message" autocomplete="off">
        <label class="message_attachment_label"><i class="ri-attachment-line"></i></label>
        <input type="hidden" name="chat_with" id="chat_with">
        <button class="btn btn-primary" id="message_send_btn">Send</button>
    </div>
</div>
