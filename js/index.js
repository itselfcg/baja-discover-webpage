

function toggleMoreInfo(button) {
    var x = $('#bcMoreInfo');
    $(button).find('i').remove();
    if ($(button).text().trim() == 'Show more') {
        $(button).html($('<i/>',{class:'fa fa-eye-slash'})).append(' Hide section');
        x.fadeIn();
    }
    else {
        $(button).html($('<i/>',{class:'fa fa-plus'})).append(' Show more');
        x.fadeOut();
    }
}


function hideMoreInfo() {
    var x = document.getElementById("bcMoreInfo");
    if (x.style.display === "block") {
        x.style.display = "none";



        var button = $('#show-hide-btn');
        button.find('i').remove();
        button.html($('<i/>',{class:'fa fa-plus'})).append(' Show more');

    }

}