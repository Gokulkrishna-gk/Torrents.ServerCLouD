<?php

// login page if they are not already logged in

require_once('login_check.php');

// otherwise, wtf? 
if (isset($current_user) && isset($current_user['loggedin']) && $current_user['loggedin'] == true) {
	header('Location: protected.php');
	die();
}

?>
<html>
<head>

<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Torrents.ServerClouD</title>
<link rel="shortcut icon" href="//cdn.servercd.cf/favicon.ico">
<link rel="icon" sizes="16x16 32x32" href="//cdn.servercd.cf/favicon.ico">

<!--STYLESHEETS-->
<link href="//cdn.servercd.cf/servercd/torrents/style-index.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
</head>
<body id="login" onload="document.getElementById('start-here').focus()">

<div id="login-prompt">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->
	

<?php
if (isset($_GET['register_success'])) {
	?>
	<p><span class="registered">Oh, it looks like you've registered. Log in now.</span></p>
	<?php
}
?>
<form name="login-form" class="login-form" action="index.php" method="post">
<div class="header">
<!--TITLE--><h1>Present your ID</h1><!--END TITLE-->
<!--DESCRIPTION--><span>Key In Your Magical Words.You need authorization in order to visit our magical land :)</span><!--END DESCRIPTION-->
</div>
<div class="content">
<input tabindex="1" class="input username" name="e" type="email" placeholder="Joe@My.Love" onfocus="this.value=''" id="start-here" />
<input tabindex="2" class="input password" name="p" type="password" value="JoeIsMyWife" onfocus="this.value=''"/>
</div>
<div class="footer">
<input tabindex="4" type="button" onclick="location.href = 'register.php';" value="Register" class="register" />
<input tabindex="3" type="submit" value="Hop In &raquo;" class="button" />
</div>
</form>
</div>

</body>
</html>