$(document).ready(function() {
    //Create animations for "Blog" menu item
    $("#menuItemBlog").mouseenter(function() {
        $(this).animate({
            paddingLeft: "+=10px",
        }, 50);
    });
    
    $("#menuItemBlog").mouseleave(function() {
        $(this).animate({
            paddingLeft: "-=10px",
        }, 50);
    });
    
    //Create animations for "About" menu item
    $("#menuItemAbout").mouseenter(function() {
        $(this).animate({
            paddingLeft: "+=10px",
        }, 50);
    });
    
    $("#menuItemAbout").mouseleave(function() {
        $(this).animate({
            paddingLeft: "-=10px",
        }, 50);
    });
    
    //Create animations for "Changelog" menu item
    $("#menuItemChangelog").mouseenter(function() {
        $(this).animate({
            paddingLeft: "+=10px",
        }, 50);
    });
    
    $("#menuItemChangelog").mouseleave(function() {
        $(this).animate({
            paddingLeft: "-=10px",
        }, 50);
    });
});