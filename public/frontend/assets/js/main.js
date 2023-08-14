jQuery(function ($) {
    'use strict';

    // Metis Menu JS
    $(function () {
        $('#sidemenu-nav').metisMenu();
    });

    // Responsive Burger Menu JS

    $('.responsive-burger-menu').on('click', function () {
        $('.responsive-burger-menu').toggleClass('active');
        $('.sidemenu-area').toggleClass('active-sidemenu-area');
    });


    // Navbar Burger Menu JS
    $('.navbar-burger-menu').on('click', function () {
        $('.navbar-burger-menu').toggleClass('active');
        $('.sidemenu-area').toggleClass('active-sidemenu-area');
    });


    // tooltip
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    });

    // Language Switcher
    $(".language-option").each(function () {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function () {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })

    // Others Option For Responsive JS
    $(".others-option-for-responsive .dot-menu").on("click", function () {
        $(".others-option-for-responsive .container .container").toggleClass("active");
    });

    // Watch Video Slides
    $('.watch-video-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 10,

        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 5
            },
            1200: {
                items: 3
            }
        }
    });

    // Popup Video
    $('.popup-youtube').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Live Chat Slides
    $('.live-chat-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 10,

        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 2
            },
            768: {
                items: 6
            },
            992: {
                items: 8
            },
            1200: {
                items: 9
            }
        }
    });

    // Datepicker
    $("#datepicker").datepicker();

    // Go to Top
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $('.go-top').addClass('active');
        if (scrolled < 600) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 500);
    });

    // Preloader
    $(window).on('load', function () {
        $('.preloader-area').fadeOut();
    });

}(jQuery));

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('publiq_theme', themeName);
    document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('publiq_theme') === 'theme-dark')
    {
        setTheme('theme-light');
    } else
    {
        setTheme('theme-dark');
    }
    // $.ajax({
    //     url: "/processing-session",
    //     data: {
    //         method: 'put',
    //         for: 'publiq_theme',
    //         name: localStorage.getItem('publiq_theme')
    //     },
    //     success: function (response) {
    //     }
    // });
}
// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('publiq_theme') === 'theme-dark')
    {
        // setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else
    {
        // setTheme('theme-light');
        document.getElementById('slider').checked = true;
    }
})();

function loadVal() {
    desc = $("#editor").html();
    document.form1.desc.value = desc;
}

$('#open-photo').click(function () {
    $('#imgupload').trigger('click');
});

// Get the modal
// var modal = document.getElementById("myModal");
var modal = jQuery('#myModal')
// Get the button that opens the modal
// var btn = document.getElementById("myBtn");
var btn = jQuery('#myBtn')

btn.click(function () {
    modal.show();

});
// // When the user clicks the button, open the modal
// btn.onclick = function () {
// }

$('.close').click(function () {
    modal.hide();
});


window.onclick = function (event) {
    if (event.target == modal)
    {
        modal.hide();
    }
}


//    video
var myVideos = [];

window.URL = window.URL || window.webkitURL;

if (document.getElementById('fileUp'))
{
    document.getElementById('fileUp').onchange = setFileInfo;
}

function setFileInfo() {
    var files = this.files;
    myVideos.push(files[0]);
    var video = document.createElement('video');
    video.preload = 'metadata';

    video.onloadedmetadata = function () {
        window.URL.revokeObjectURL(video.src);
        var duration = video.duration;
        myVideos[myVideos.length - 1].duration = duration;
        if (parseInt(duration) > 180)
        {
            document.getElementById('fileUp').value = '';
            alert('Cannot upload more than 3 minutes')
        } else
        {
            updateFile(files[0])
        }
    }
    video.src = URL.createObjectURL(files[0]);
}

function updateFile(file) {
    document.getElementById("vid").style.display = "block";
    let blobURL = URL.createObjectURL(file);
    document.querySelector("video").src = blobURL;

}



// audio

$(document).ready(function () {

    //   image
    $('#myBtnImage').click(function (e) {
        e.preventDefault();
        $('.input-images').empty();
        $('.input-images').imageUploader();
        $('#photos-hidden-div').show(700);
        $('#video-hidden-div').hide();
        $('#audio-hidden-div').hide();

    });

    // video
    $('#myBtnVideo').click(function (e) {
        e.preventDefault();
        $('.input-images').empty();
        $('#video-hidden-div').show(700);
        $('#photos-hidden-div').hide();
        $('#audio-hidden-div').hide();


    });

    $('.upload').change(function (e) {
        e.preventDefault();
        $('.click').hide();

    });

    // audio
    $('#myBtnAudio').click(function (e) {
        e.preventDefault();
        $('.input-images').empty();
        $('#audio-hidden-div').show(700);
        $('#photos-hidden-div').hide();
        $('#video-hidden-div').hide();

    });


    $('#audio').change(function (e) {
        e.preventDefault();
        $('.click1').hide();
        show();
        $('#aud').show();
    });

});

function show() {
    var val = document.querySelector("#audio");
    const profileAudURL = URL.createObjectURL(val.files[0]);
    document.querySelector('#aud').setAttribute('src', profileAudURL);
}





