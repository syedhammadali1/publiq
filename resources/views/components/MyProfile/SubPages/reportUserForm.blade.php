<form class="account-setting-form report-user-form">
    <div class="row">

        <div class="col-lg-12 col-md-21">
            <div class="form-group">
                <label>Please select a problem:</label>
                <select class="form-control" name="problem">
                    <option value="">Select a problem</option>
                    <option value="Fake Account">Fake Account</option>
                    <option value="Fake Name">Fake Name</option>
                    <option value="Pretending to be someone">Pretending to be someone</option>
                    <option value="Posting inappropriate things">Posting inappropriate things</option>
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
        <input type="hidden" name="user" value="{{ $user->name }}">
        <div class="col-lg-12 col-md-12">
            @include('components.sub-components.loadmoreloading')
            <button type="submit" class="default-btn report-user-submit-btn" id="help-submit-btn">Submit</button>
        </div>
    </div>
</form>

<script>
    $('.report-user-form').submit(function(e) {
        e.preventDefault();
        loadMoreToggle($('.report-user-submit-btn'), 'hide');
        $.ajax({
            type: "GET",
            url: "{{ route('frontend.report.user') }}",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                loadMoreToggle($('.report-user-submit-btn'), 'show');
                // $('#single-profile-app').html(response.html);
                $('.fullScreenModalBody').html(response.successHtml);
                $('.fullScreenModalClose').trigger('click');
                toastr.success('Report Noted');
            },
            error: function(errors) {
                loadMoreToggle($('.report-user-submit-btn'), 'show');
                $.each(JSON.parse(errors.responseText).errors, function(indexInArray,
                    valueOfElement) {
                    $('#' + indexInArray).show();
                    $('#' + indexInArray + ' > strong').text(valueOfElement)
                });
            }
        });
    });
</script>
