$(document).ready(
   function() {
	$("ul").hide();
	$("ul").show('slow');
	$("#borrow_form_div").hide();
	$("#return_form_div").hide();
	$("#conf_div").hide();
	$("#query_comple_list").hide();

	$("#exit_reg").click(function(){
		if(confirm("确定要退出吗？")){
			window.location='index.php';
			//window.location.href="index.php";
			// window.open("","_self").close()  
		} else {
			 ;
		}
	});

	
   var windowHeight = $(window).height();
   var winWidth = $(window).width();
   $("div.side-bar").css("height", window.outerHeight);
   $("div.side-bar").css("width", winWidth*0.2);
   $("div.side-bar").css("right", 0);
    $("div.side-bar").css("top", 0);
   $("#admin_info").css("padding", "2em");
      $("#admin_info").css("paddingBottom", "3em");
	  $("#admin_info").css("paddingTop", "3em");
      $("#manager-item").css("padding", "2em");
   
   	$("#main_content").css("width", winWidth*0.8);
	$("#main_content").css("left","0");
   $(".manager-item").mouseenter(function(){
   		$(this).css("fontSize", "1.8em");
		$(this).css("width", "6em");
		$(this).css("cursor", "pointer");
		
   });
   $(".manager-item").mouseleave(function(){
   		$(this).css("fontSize", "1.2em");

   });
   
   
   $("#admin_info").mouseenter(function(){
   		$(this).css("cursor", "pointer");
		//$(this).css("color", "black");
		$(this).css("background", "black");
   });
   
   $("#admin_info").mouseleave(function(){
		$(this).css("color", "white");
		$(this).css("background", "#2f4f4f");
   });
   $("#admin_info").click(function(){
		$("#borrow_form_div").hide();
		$("#return_form_div").hide();
		$("#new_msg").show('fast');
   });
   
   $("#borrow_reg").click(function(){
	   $("#new_msg").hide('fast');
	   $("#return_form_div").hide('fast');
	   $("#borrow_form_div").show('slow');

	   });
	   
	$("#return_reg").click(function(){
		$("#new_msg").hide();
		$("#borrow_form_div").hide();
		$("#return_form_div").show('slow');
	});
	
	$("#menu_bt").mouseenter(function(){		
		$(this).css("background", "black");
		$(this).css("cursor", "pointer");
	});
	
	$("#menu_bt").mouseleave(function(){		
		$(this).css("background", "#2f4f4f");
	});
	
	$("#menu_bt").click(function(){
		if($("#sidebar_switcher").text() == '1'){
				$("div.side-bar").hide('fast');
				$("#sidebar_switcher").text('2');
				$("#main_content").animate({width: winWidth});
				// $("#menu_bt").animate({width: 10px},'slo');
			} else {
				$("div.side-bar").show('slow');
				$("#sidebar_switcher").text('1');
				$("#main_content").animate({width: winWidth*0.8});

			}
		
		});

	$(".compled-item").mouseenter(function(){
		$(this).addClass("compled-item-selected");
		$(this).css("cursor", "pointer");
	});

	$(".compled-item").mouseleave(function(){
		$(this).removeClass("compled-item-selected");
	});

	$(".compled-item").click(function(){
		var word = $(this).text();
		$("#query_input_box").val(word);
		$("#query_comple_list").hide('fast');
	});

	$(this).keypress(function(){
		if ($("#query_input_box").focus()){
			//$("#query_comple_list").show('fast');
		}

	});

	$(this).click(function(){
		$("#query_comple_list").hide('fast');
	});
	$(".compled-item-close-bt").mouseenter(function(){
		$(this).css("color", "#2f4f4f");
		$(this).css("cursor","pointer");
	});
	$(".compled-item-close-bt").mouseleave(function(){
		$(this).css("color", "#ddd");
	});
	$(".compled-item-close-bt").click(function(){
		$("#query_input_box").val('');
		$("#query_comple_list").hide('fast');
	});

	var old_query_word = '';
	var cur_query_word = '';
	$(this).keyup(function(){
		cur_query_word = $("#query_input_box").val();
		if ( cur_query_word != old_query_word) {
			$("#query_comple_list").show('fast');
			$(".compled-item").text($("#query_input_box").val());
			old_query_word = cur_query_word;
		}
	});
	
	$("#query_input_box").blur($(".compled-item").text($("#query_input_box").val()));
	// }
	// $("#query_input_box").click(function(){
	// 		$("#query_comple_list").hide('fast');
	// });
	// $("#query_input_box").focus(function()
	// {
	// 	$("#query_comple_list").show('fast');
	// });
} // 这里是ready的结尾， 不要删掉
);