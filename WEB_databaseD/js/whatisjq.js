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

 

 $(document).ready(function(){
    $("#tora").click(function(){
      $("#room_all").show();
      $("#room_n").hide();
      $("#room_y").hide();
     
    });
});
$(document).ready(function(){
    $("#torn").click(function(){
      $("#room_n").show();
      $("#room_all").hide();
      $("#room_y").hide();
    });
});
$(document).ready(function(){
    $("#tory").click(function(){
		
      $("#room_y").show();
      $("#room_all").hide();
      $("#room_n").hide();
    });
});

$(document).ready(function(){
    $("#tojoin").click(function(){
			$("#join").show();
			$("#room_y").hide();
      $("#room_all").hide();
      $("#room_n").hide();
    });
});

$(document).ready(function(){
	$("#tocret").click(function(){
		
		$("#cre_tenant").show();
		$("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});



$(document).ready(function(){
	$("#tolease").click(function(){
        $("#cre_lease").show();
        
        $("#cre_tenant").hide();
		$("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});


$(document).ready(function(){
	$("#tocout").click(function(){
        $("#cre_checkout").show();
        
        $("#cre_tenant").hide();	
		$("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});
$(document).ready(function(){
	$("#tocout_admin").click(function(){
        $("#cre_checkout_admin").show();
        
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});


$(document).ready(function(){
	$("#toc_l").click(function(){
        $("#select_lease_c").show();
        
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});


$(document).ready(function(){
	$("#showbill").click(function(){
        $("#select_bill").show();
        
        $("#home").hide();
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});

$(document).ready(function(){
	$("#tobill").click(function(){
        $("#cre_bill").show();
        
        $("#home").hide();
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});

$(document).ready(function(){
	$("#to_home").click(function(){
       
        
        $("#home").show();
       
	});
});

$(document).ready(function(){
	$("#to_tenant").click(function(){
        $("#select_tenant").show();
        $("#update_rent").hide();
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});

$(document).ready(function(){
	$("#to_rent").click(function(){
        $("#update_rent").show();
        $("#select_bill").hide();
        $("#select_tenant").hide();
        $("#cre_tenant").hide();
        $("#join").hide();
		$("#room_y").hide();
		$("#room_all").hide();
		$("#room_n").hide();
	});
});
