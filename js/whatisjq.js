$(document).ready(function(){
    $("#bbutton").click(function(){
       $(this).hide();
        $("#mbutton").show();
    });
    $("#mbutton").click(function(){
        $(this).hide();
        $("#bbutton").show();
    });
});