$(document).ready(function() {
    $("#hidden").hover(function() {         //When I hover over text
        $(this).css("color", "black");      //Change the text color to black
    },
    function() {                            //When I hover away from the text
        $(this).hide();                     //Hide this text
    });
});