


$(document).ready(function () {




        var pageHeight = $(window).height();
        changeNavbar(pageHeight);


    $(window).scroll(function () {
        var pageHeight = $(window).height();
        changeNavbar(pageHeight);

    });


});


function changeNavbar(height){
    if ($('header').is('.index-nav')) {

        if ($(document).scrollTop() > (height - 50)) {
            $(".navbar").css("background-color", "rgba(255,255,255,0.7)");
            $(".navbar .nav-link").css("color", "#000000");
            $(".navbar-toggler").css("border-color", "black");

            document.getElementById('media-link').style.display = "none";
            document.getElementById("icon").style.color = "#000000";


        } else {
            $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
            $(".navbar .nav-link").css("color", "#FFFFFF");
            document.getElementById('media-link').style.display = "block";

            document.getElementById("icon").style.color = "#ffffff";
            $(".navbar-toggler").css("border-color", "white");

        }
    } else {
        $(".navbar .nav-link").css("color", "#000000");
        $(".navbar-fixed-top").css("background-color", "rgba(255,255,255,0.7)"); // if not, change it back to transparent
        document.getElementById("icon").style.color = "#000000";
        $(".navbar-toggler").css("border-color", "black");

        if ($(document).scrollTop() > 50) {
            document.getElementById('media-link').style.display = "none";
        } else {
            document.getElementById('media-link').style.display = "block";
        }

    }
}