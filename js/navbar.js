function scrollDownNavChange() {

    var myNav = document.getElementById('main-navbar');
    window.onscroll = function () {
        "use strict";
        if (document.body.scrollTop >= 200) {
            myNav.classList.add("nav-colored");
            myNav.classList.remove("nav-transparent");
        } else {
            myNav.classList.add("nav-transparent");
            myNav.classList.remove("nav-colored");
        }
    };
}