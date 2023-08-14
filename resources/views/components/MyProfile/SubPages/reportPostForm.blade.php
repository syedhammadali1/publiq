<form class="account-setting-form report-post-form">
    <div class="row">
        <div class="col-lg-12 col-md-21">
            <div class="form-group">
                <label>Please select a problem:</label>
                <select class="form-control" name="problem">
                    <option value="">Select a problem</option>
                    <option value="Fake Account">Spam</option>
                    <option value="Fake Name">False Information</option>
                    <option value="Pretending to be someone">Unauthorise sale</option>
                    <option value="Posting inappropriate things">Hate Speech</option>
                </select>
                <span class="text-danger mt-2" id="problem" style="display: none" role="alert">
                    <strong> </strong>
                </span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>Feedback</label>
                <textarea id="help-tex" name="feedback"></textarea>
                <span class="text-danger mt-2" id="feedback" style="display: none" role="alert">
                    <strong> </strong>
                </span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            @include('components.sub-components.loadmoreloading')
            <button type="submit" class="default-btn report-post-submit-btn" id="help-submit-btn">Submit</button>
        </div>
    </div>
</form>

<script>
    $('.report-post-form').submit(function(e) {
        e.preventDefault();
        loadMoreToggle($('.report-post-submit-btn'), 'hide');
        $.ajax({
            type: "GET",
            url: "{{ route('frontend.report.post', ['user' => $post->user->name, 'post' => $post]) }}",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                loadMoreToggle($('.report-post-submit-btn'), 'show');
                // $(this).hide();
                $('.fullScreenModalBody').html(response.successHtml);
                $('.fullScreenModalClose').trigger('click');
                toastr.success('Report Noted');
            },
            error: function(errors) {
                loadMoreToggle($('.report-post-submit-btn'), 'show');
                $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                    valueOfElement) {
                    $('#' + indexInArray).show();
                    $('#' + indexInArray + ' > strong').text(valueOfElement)
                });
            }
        });
    });
</script>
