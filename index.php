<?php  session_start(); ?>
<html>
	<head>
	<meta charset="utf-8">
	<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
	</script>
	<script>
	$(document).ready(function(){
		$("#error_msg_div").css("width", $("#login_table").css('width'));
		$(".loginform").hide();
		$("h1").hide();
		$("h1.main-title").show();
		$("h1").show('slow');
		$(".loginform").show('slow');
		$("#error_msg_div").hide();
		$("input").click(function(){
				$(".title-background").hide('slow');
		});
		// $(".title-area").mouseenter(function(){
		// 		$(".title-background").show('slow');
		// });

		$("font.back").click(function(){
				$(".title-background").toggle('slow');
		});
		$("font.back").mouseenter(function(){
				$(this).css("background", "black");
		});

		$("font.back").mouseleave(function(){
				$(this).css("background", "#2f4f4f");
		});
		
		$("#error_msg_div").mouseenter(function()
		{
			$(this).css("background", "#ddd");
			$(this).css("color", "black");
			$(this).css("cursor", "pointer");
		});

		$("#error_msg_div").click(function(){
			$(this).hide('fast');
		});
		$("#error_msg_div").mouseleave(function()
		{
			$(this).css("background", "#2f4f4f");
			$(this).css("color", "white");
		});

		$("#submit_bt").click(function(){
			$.post( "pos.handle.php",
									{
										username: $("#username-input").val(),
										password: $("#password-input").val(),
									},
					function(data, status){
						$("#error_msg_div").show('fast');
						$("#error_msg").text("提示："+data);
					}                    );

		});



	});
	</script>
	<title>
		登录-图书管理系统
	</title>
	<style type="text/css">
	font.back{
		background: #2F4F4F;
		color: #FFF;
		position: absolute;
		right: 0px;
		bottom: 80px;
	}
	
	* {
		margin: 0px;
		padding: 0px;

		font-family: 黑体, Serif;
	}
	.title{
		background-color:#FFF;
		color: #000;
		}
	.title-area{

		padding-left:4em;
		padding-bottom:0.3em;
		font-size:1.3em;
	}
	.loginform{
	background-color:#FFF;
		padding-top: 2em;
		padding-left:20em;
		padding-bottom: 3em;
	}
	td {
		font-size: 1.2em;
		width: 10em;
		margin-left: 20px;
	}

	.title-background{
		background: #2F4F4F;
		/*background-image:url("img/jack.jpg");*/
		width: inherit;
 		height: 350px; 
		
	}
	input {
		color: black;
		border-width:1px;
		width:16em;
		height:2em;
	}
	.submit-bt {
		width:4em;
		height: 2em;
		color: #FFF;
		border: 2.2px solid #EEE;
		boder-radius:100px;
		line-height: 2em;
	
		font-size: 1.3em;
		background: #2f4f4f;

	}
	.background-bot{
		background-image:url("img/jack.jpg");
		width: inherit;
 		height: 500px; 
 		margin:0px;
 		padding: 0px;
	}
	.submit-field{
		background-color:#FFF;
		border-radius:25px;
		width:40px;
		height: 30px;
				margin-left: 400px;
		
	}
	#bottom-black{
		height: 300px;
		position: fixed;
		bottom: 0;
	}
	.main-title{
		color:white;
		padding-top: 100px;	
		padding-left: 20px;
		font-size: 100px;
	}
	#error_msg_div{

		font-size: 1em;
		border: 1px #2f4f4f solid;
		background: #2f4f4f;
		width: 20em;
		height: 2em;
		line-height: 2em;
		border-radius: 2px;
		margin-bottom: 1em;
		padding-left: 20px;	
		color: white;
		font-weight: bold;
		border-radius: 2px;

	}
	#error_msg{
		font-size: 1.2em;

	}
	

	</style>
	</head>
	<body>
	<div class="title-background">
	<h1 class="main-title">
	图书管理系统
	</h1>	
	</div>
	<div class="the-last">
	<div class="title">
	<br><br><br><br><br><br>
	<div class="title-area">
	<h1>登录</h1><br></div>

		
	</div>

	<div class="loginform">

		<form action="pos.handle.php" method="post">
            <div id="error_msg_div" title="点我自动消失">

    			<text id="error_msg">提示：用户名或密码错误</text>

    		</div>
		<table id="login_table">
		<tr id="username-row">
		<td><b>管理员帐号</b></td>
		<td><input type="password" name="username" id="username-input" autocomplete="off"></td>
		</tr>
		<tr id="password-row">
		<td><b>密码</b></td>
		<td><input type="password" name="password" id="password-input"></td>
		</tr>
		</table>
		<div class="submit-field" >
        <br>
        <br>
			<input id="submit_bt" class="submit-bt" type="button" value="提交">

		</div>
	</div>
	</form>	
	<!--<div id="bottom-black">
	</div>-->
	</div>

	<font size="20px" class="back"><-</font>
	</body>
</html>