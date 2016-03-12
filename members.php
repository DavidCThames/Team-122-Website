<?php
$password = "122pass";
$nonsense = "dfghjkjhgfdsdfghjkjhgf";

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['keypass'] != $password) {
   } else if ($_POST['keypass'] == $password) { 
	   setcookie('PrivatePageLogin', crypt($_POST['keypass'],$nonsense), time()+60*10); 
	   header("Location: $_SERVER[PHP_SELF]"); 
   } else { 
	   echo "Sorry, you could not be logged in at this time."; 
   } 
} ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Team 122 | Home</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script>
		function backgroundChange() {
			if (scrollY > window.innerHeight)
				$("body").css("background", "url(img/sample/big_slider5.jpg)")
		}
	</script>
</head>

<body>
	<div class="header">
		<div class="center">
			<img src="img/FRC.png" alt="" style="float:left;" />
			<h1 style="float:left">NASA Knights |&nbsp;</h1>
			<h2 style="float:left">Team 122</h2>

			<a href="members.php"><h3 style="float:right">Members</h3> </a>
			<a href="team.html"><h3 style="float:right">Our Team</h3></a>
			<a href="history.html"><h3 style="float:right">History</h3></a>
			<a href="FIRST.html"><h3 style="float:right">FIRST</h3> </a>
			<a href="community.html"><h3 style="float:right">Community</h3> </a>
			<a href="index.html"><h3 style="float:right">Home</h3> </a>

		</div>
	</div>
	<img src="img/sample/big_slider1.jpg" alt="" class="header" />

	<div class="headerSpace"></div>

	<div class="floating">
		<div class="center">
			<div class="card"><i class="material-icons" onClick="floatingHide()">arrow_back</i></div>
		</div>
	</div>

	<div class="section s1">
		<div class="card body" style="min-height:0px">
			<div class="title">
				<h1>Members</h1>
			</div>
			<div style="background-color:#FAFAFA" id="login">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post" style="text-align:center">
					<label> Password
						<br>
						<input type="password" name="keypass" id="keypass" style="font-size:24px;" /> </label>
					<br />
					<br/>
					<input type="submit" id="submit" value="Login" />
				</form>
			</div>
		</div>
		<?php

			if (isset($_COOKIE['PrivatePageLogin'])) {
			   if ($_COOKIE['PrivatePageLogin'] == crypt($password, $nonsense)) {
			?>
			<style>
				#login {
					display: none !important;
				}
			</style>
			<div class="card body" style="min-height:0px">
				<div class="title">
					<h1>Link</h1></div>
				<div>
					<p>Description
						<br/>
						<a src="http://link.com">http:link.com</a>
					</p>
				</div>
			</div>
			<!-- LOGGED IN CONTENT HERE -->

			<?php
				  exit;
			   } else {
				  echo "Bad Cookie.";
				  exit;
			   }
			}?>

			


	</div>


	<footer>


	</footer>


	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="content.js"></script>
	<script src="script.js"></script>

</body>

</html>