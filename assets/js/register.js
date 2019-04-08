$(document).ready(function(){

    //ON click signup , hide login and show registration form
    $(".signup").click(function(){
            $(".first").slideUp("slow",function(){
                $(".second").slideDown("slow");
            });
    });

    //ON click signup , hide login and show registration form
    $(".signin").click(function(){
        $(".second").slideUp("slow",function(){
            $(".first").slideDown("slow");
        });
});




});