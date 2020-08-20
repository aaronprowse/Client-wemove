/**
 * Created by aaron on 11/06/2016.
 */
$(".box1").click(function(){
    $('html,body').animate({scrollTop: $("#mouseover-area").offset().top},'slow');
    $(".initialise-box").hide();
    $(".box1area").slideDown(1000);
});
$(".box2").click(function(){
    $('html,body').animate({scrollTop: $("#mouseover-area").offset().top},'slow');
    $(".initialise-box").hide();
    $(".box2area").slideDown(1000);
});
$(".box3").click(function(){
    $('html,body').animate({scrollTop: $("#mouseover-area").offset().top},'slow');
    $(".initialise-box").hide();
    $(".box3area").slideDown(1000);
});
