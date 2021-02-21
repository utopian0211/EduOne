require('./bootstrap');

$(document).ready(function() {

    //parallax
    window.onscroll = function() {
        var scroll = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;
        document.documentElement.style.setProperty('--scroll-var', scroll + "px");
    };
    //hide the navigation toggle
    $("#nav_btn").click(function() {
        $(".nav_container").toggle("fast");
        //$("#nav_slide").toggle("slow");
    });
    $(".close").click(function() {
        $(".nav_container").hide("fast");
    });

    //open search bar on click search_btn
    $("#search_btn").click(function() {
        $("#search_bar").toggle("fast");
        $("#logo").css("left", "0px");
        //$(this).hide();
    });
    //search on click 
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
    });
    //open notification
   /* $("#not_btn").click(function() {
        $('.not_container').load("notification.php", function(responseTxt, statusTxt, xhr) {

            if (statusTxt == "error")
                alert("Error" + xhr.status + ":" + xhr.statusTxt);
        });
    });*/
   

});