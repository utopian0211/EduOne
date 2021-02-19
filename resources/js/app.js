require('./bootstrap');

$(document).ready(function() {
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
        $("#search_bar").toggle("slide");
    });
});