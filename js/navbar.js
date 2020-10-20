
$(document).ready(function () {



    $(window).scroll(function () {
        var pageHeight = $(window).height();
        changeNavbar(pageHeight);

    });

    $(window).onload(function () {
        var pageHeight = $(window).height();
        changeNavbar(pageHeight);

    });


});


function changeNavbar(height){
    if ($('header').is('.index-nav')) {

        if ($(document).scrollTop() > (height - 50)) {
            $(".navbar").css("background-color", "#f8f8f8");
            $(".navbar a").css("color", "#000000");
            $(".navbar-toggler").css("border-color", "black");

            document.getElementById('media-link').style.display = "none";
            document.getElementById("icon").style.color = "#000000";


        } else {
            $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
            $(".navbar a").css("color", "#FFFFFF");

            document.getElementById('media-link').style.display = "block";

        }
    } else {
        $(".navbar a").css("color", "#000000");
        $(".navbar-fixed-top").css("background-color", "#FFFFFF"); // if not, change it back to transparent

        if ($(document).scrollTop() > 50) {
            document.getElementById('media-link').style.display = "none";
        } else {
            document.getElementById('media-link').style.display = "block";
        }

    }
}