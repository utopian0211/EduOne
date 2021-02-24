$(document).ready(function() {
    //toggle all div and closer other div
    //load notification-content from another file
    $(".notification_container").load("notification.php", function(responseTxt, statusTxt, xhr) {
        //$(".notification_container").show("fast");
        if (statusTxt == "error")
            alert("Error" + xhr.status + ":" + xhr.statusTxt);
    });
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
        $('.notification_container').hide("fast");
        $("#logo").hide();
        //$("#logo").css("left", "0px");
        $(this).hide();
    });

    //open notification

    $("#notification_btn").click(function() {
        $('.notification_container').toggle("fast");
        $("#search_bar").hide("fast");
        $("#logo").show("fast");
        $("#search_btn").show("fast");

    });

    $(".main").click(function() {
        $("#search_bar").hide("fast");
        $("#logo").show("fast");
        $("#search_btn").show("fast");
        $('.notification_container').hide("fast");
    });
    //search on click 
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
    });

    /*// when the carousel slides, auto update
    $('#myCarousel').on('slide.bs.carousel', function(e) {
        var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
        $('[id^=carousel-selector-]').removeClass('selected');
        $('[id=carousel-selector-' + id + ']').addClass('selected');
    });*/

});