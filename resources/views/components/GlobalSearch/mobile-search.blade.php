<style>

.sb-search {
    overflow: hidden;
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    transition: width 0.5s;
    -webkit-backface-visibility: hidden;
}
    .bborder{
        opacity: 1;
    }
    .noborder{
        opacity: 0;
    }

    .sb-search-input {
    position: absolute;
    top: -16px;
    right: -48px;
    border: none ! important;
    outline: none;
    width: 77%;
    background: transparent;
    height: 47px;
    margin: 0;
    color: white ! important;
    z-index: 10;
    padding: 20px 65px 20px 20px;
    font-family: inherit;
    font-size: 16px;
    color: #2c3e50;
}


    input[type="search"].sb-search-input {
        -webkit-appearance: none;
        -webkit-border-radius: 0px;
        border:1px black solid;
    }
    .sb-search-input::-webkit-input-placeholder {
        color: #fff;
    }

    .sb-search-input:-moz-placeholder {
        color: #fff;
    }

    .sb-search-input::-moz-placeholder {
        color: #fff;
    }

    .sb-search-input:-ms-input-placeholder {
        color: #fff;
    }

    .sb-icon-search,
    .sb-search-submit  {
        width: 60px;
        height: 60px;
        display: block;
        position: absolute;
        right: 0;
        top: 0;
        padding: 0;
        margin: 0;
        line-height: 60px;
        text-align: center;
        cursor: pointer;
    }

    .sb-search-submit {
        background: #fff; /* IE needs this */
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; /* IE 8 */
        filter: alpha(opacity=0); /* IE 5-7 */
        opacity: 0;
        color: transparent;
        border: none;
        outline: none;
        z-index: -1;
    }

    .sb-icon-search {
    color: white;
    background: #fff;
    width: 35px;
    height: 0px;
    z-index: 90;
    margin: -5px;
    top: -13px;
    right: 36px;
    font-size: 22px;
    font-family: 'icomoon';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
}

    .sb-icon-search:before {
        content: "";
    }
    .global-search-filter{
    background-color: #7b215e;
    border: none;
    color: white;
    margin-left: 22px;
    margin-top: 7%;
    }

    .memeber-mobile-category{
        display:none;
    }

.fa-times {
    margin-left: 73px;
    color: white;
    font-size: 19px;
}

    .sb-search.sb-search-open,
    .no-js .sb-search {
        width: 299px;
    background: #721f57;
    height: 44px;
    border-radius: 24px;
    margin-top: -12px;
    }

    .sb-search.sb-search-open .sb-icon-search,
    .no-js .sb-search .sb-icon-search {
        background: #fff;
        color: black;
        z-index: 11;
    }

    .wticons {
        line-height: 1;
    }


    .wticons:before {
        font-family: wticons !important;
        font-style: normal;
        font-weight: normal !important;
        vertical-align: top;
    }
    </style>


<div id="sb-search" class="sb-search">
    <form>
        <div class="col-3 p-1 memeber-mobile-category">
            <select class="global-search-filter" name="global_search_filter">
                <option value="Member">Member
                </option>
                <option value="Post">Post
                </option>
            </select>
        </div>
    <input class="sb-search-input qutu noborder" onkeyup="buttonUp();" placeholder="Enter your search term..." onblur="monkey();" type="search" value="" name="search" id="search">
    <input class="sb-search-submit" type="submit" value="">
    <span class="sb-icon-search"><i class="fa fa-search"></i></span>
    </form>
    <ul id="myUL" class="global-search-suggestions">
    </ul>
    </div>

    <script type="text/javascript">
        function buttonUp(){
         var valux = $('.sb-search-input').val();
            valux = $.trim(valux).length;
            if(valux !== 0){
                $('.sb-search-submit').css('z-index','99');
            } else{
                $('.sb-search-input').val('');
                $('.sb-search-submit').css('z-index','-999');
            }
    }

    $(document).ready(function(){
        var submitIcon = $('.sb-icon-search');
        var submitInput = $('.sb-search-input');
        var searchBox = $('.sb-search');
        var qutu = $('.qutu');
        var isOpen = false;

        $(document).mouseup(function(){
            if(isOpen == true){
            submitInput.val('');
            $('.sb-search-submit').css('z-index','-999');
            submitIcon.click();
            }
        });

        submitIcon.mouseup(function(){
            return false;
        });

        searchBox.mouseup(function(){
            return false;
        });

        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('sb-search-open');
                qutu.removeClass('noborder');
                qutu.addClass('bborder');
                searchBox.find('i.fa').removeClass('fa-search');
                searchBox.find('i.fa').addClass('fa-times');
                isOpen = true;
                $('.dot-menu').hide();
                $('.site-logo').hide();
                $('.mobile-menu-burger').hide();
                $('.memeber-mobile-category').show();

            } else {
                searchBox.removeClass('sb-search-open');
                qutu.removeClass('bborder');
                qutu.addClass('noborder');
                searchBox.find('i.fa').removeClass('fa-times');
                searchBox.find('i.fa').addClass('fa-search');
                isOpen = false;
                $('.dot-menu').show();
                $('.site-logo').show();
                $('.mobile-menu-burger').show();
                $('.memeber-mobile-category').hide();
            }
    });

});
    </script>

<script>
    $(document).on('click', '.global-search-suggestions li a', function() {
        $('.sb-search-input').val($(this).text());
        $('.global-search-suggestions').hide();
        $('.global-search-form').submit();
    })

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    $('.sb-search-input').on('keyup', function(e) {
        e.preventDefault();
        filter = $('.global-search-filter').val();
        keyword = $(this).val();
        $('.global-search-suggestions').show();
        $.ajax({
            type: "GET",
            url: "{{ route('frontend.global.search') }}",
            data: {
                'global_search_filter': filter,
                'suggestion': keyword
            },
            success: function(response) {
                $(".global-search-suggestions").html('');
                $.each(response.data, function(indexInArray, valueOfElement) {
                    $(".global-search-suggestions").append(
                        `<li value="${valueOfElement}"><a href="#"> ${capitalizeFirstLetter(valueOfElement)}</a></li>`
                    );
                });
            }
        });

    });
</script>
