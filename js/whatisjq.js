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

 $(document).ready(function(){
     $("#toadmin").click(function(){
       $("#admin").show();
       
     });
     // $("#tojoin").click(function(){
     //      $("#sign").hide();
     //     $("#join").show();
     // });
 });