<style>

    .paid-model {
        -webkit-transition: var(--transition);
        transition: var(--transition);
        /* background-image: linear-gradient(#521e68, #702d74); */
        margin: initial;
        justify-content: center;
        display: grid;
    }

    .paid-subs {
        text-align: center;
        padding-top: 3%;
    }

    .paid-model-content {
        background: url(/frontend/assets/images/subspaid.png);
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 405px;
        padding-right: 0%;
        width: 100%;
        margin-top: 10%;
        margin-bottom: 5%;
        padding-left: 1%;
    }

    .paid-model-text h6 {
        margin-top: -2%;
    }

    .paid-model-note {
        font-size: 18px;
        padding-top: 3%;
    }

    .mediumModalClose i{
    color: #ffffff ! important;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {

    .paid-model-content {
    background: url(/frontend/assets/images/subspaid.png);
    text-align: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: auto ! important;
    padding-top: 36%;
    padding-right: 0%;
    width: 100%;
    margin-top: 10%;
    margin-bottom: 5%;
    padding-left: 1%;
}

.paid-subs-button {
    display: inline-block;
    background-color: #542068;
    color: var(--white-color) !important;
    padding: 9px 15px ! important;
    font-size: 9px ! important;
    border-radius: 8px;
    -webkit-transition: var(--transition);
    transition: var(--transition);
}

.paid-model-text p {
    font-size: 13px ! important;
}

.paid-model-note {
    font-size: 13px ! important;
    padding-top: 0% ! important;
    padding-bottom: 3px ! important;
}

.paid-model-text h6 {
    margin-top: -3% ! important;
    font-size: 11px ! important;
}

.paid-subs {
    text-align: center ! important;
    padding-top: 3% ! important;
    padding-bottom: 8px ! important;
}

}


    .paid-model-text p {
        font-size: 17px;
    }

    /* .paid-model-background297637825683752 {
        margin: 0px !important;
        background-image: url('/frontend/assets/images/model-main-back.png') ! important;
        object-fit: fill;
        background-size: cover;
    } */
    #modal-content-medium {
        background-image: url('/frontend/assets/images/model-main-back.png') ! important;
        object-fit: fill;
        background-size: cover;
    }

    .modal-header1 {
        border-bottom: 0px solid #dee2e6 !important;
    }

    .theme-dark .mediumModalBody {
        background-color: transparent !important;
    }
</style>


<div class="row h-100 justify-content-center align-items-center" style="margin: auto;">
    <div class="col-12" style="">
        <div class="paid-model"
            style="-webkit-transition: var(--transition);transition: var(--transition);margin: initial;display: grid;padding-left: 11px;justify-content: center;">
            <div class="row">
                <div class="col-12" style="">
                    <div class="paid-model-content"
                        style="background: url(/frontend/assets/images/new-envo.png);text-align: center;background-size: cover;background-repeat: no-repeat;padding-top: 36%;width: 100%;padding-left: 1%;">
                        <div class="row">
                            <div class="col-12">
                                <div class="paid-model-text mt-2">
                                    <p>This content is paid if you want see this content please subscribe</p>
                                    <h6>{{ $user->full_name }}</h6>
                                </div>
                                <div class="paid-subs"><a href="{{ route('frontend.single.profile', $user) }}"
                                        class="paid-subs-button">Subscribe Now</a>
                                </div>
                                <p class="paid-model-note">Note : Subscription fee is 1$ per
                                    month for this person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {
    // $('.modal-content').addClass('paid-model-background297637825683752');
    // $('.mediumModalHeader').addClass('d-none');
    // });

    $('.paid-subs-button').on("click", function(e) {
        e.preventDefault();
        $('#mediumModal').modal('hide');
        $('#loaderModal').modal('show')
        $.ajax({
            type: "GET",
            url: "{{ route('frontend.render.component') }}",
            data: {
                'comp_for': 'payment',
                'user': {!! json_encode($user->name) !!}
            },
            dataType: 'html',
            success: function(response) {
                $('.fullScreenModalBody').html(response);
                $('#fullScreenModal').modal('show');
                $('#fullScreenModalLabel').text('Payment Method');
                $('#loaderModal').modal('hide')
            }
        });
    });
</script>
