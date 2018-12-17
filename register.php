<html>
<head>
<title>Knock,Knock - Torrents.ServerClouD</title>
<link rel="shortcut icon" href="//cdn.servercd.cf/favicon.ico">
<link rel="icon" sizes="16x16 32x32" href="//cdn.servercd.cf/favicon.ico">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//cdn.servercd.cf/servercd/torrents/style-reg.css" rel="stylesheet" id="torrents-css">
<script src="//cdn.servercd.cf/servercd/torrents/js.js"></script>
</head>
<body id="register" onload="document.getElementById('start-here').focus()">

<div id="register-prompt" class="container">
<form action="register_process.php" method="post">
<h1 class="form-title" onclick="alert('Make sure you know where to find torrents sauce~');">Someone is boarding to our new world~~~</h1>
  <label>
    <p class="label-txt">Your Email:</p>
    <input tabindex="1" id="start-here" name="e" type="email" placeholder="Joe@My.Wife" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Your Password:</p>
    <input tabindex="2" name="p1" type="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Your Password (again):</p>
    <input tabindex="3" name="p2" type="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button tabindex="5" type="submit" value="Click it and you are enrolled into a new world ;)" >Welcome Aboard! &raquo;</button>
</form>
<div class="aro-pswd_info">
	<div id="pswd_info">
		<h4>Password must meet requirements</h4>
			<ul>
				<li id="letter" class="invalid">At least <strong>one letter</strong></li>
				<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
				<li id="number" class="invalid">At least <strong>one number</strong></li>
				<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
				<li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>