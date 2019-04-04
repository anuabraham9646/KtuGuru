<?php
session_start();
if(isset($_SESSION['EMAIL_ID']))
{
  $email = $_SESSION['EMAIL_ID'];
//echo"Hello";
//echo "Welcome $email" ;
//session_destroy();
}
else
{
  header("location:../login.php");
}

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPLOAD</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div id="page">
		<div id="header">
			<div class="background">
				<h1 id="logo"> <a href="../home&afterlogin/afterlogin.php">ACTIVITY POINTS</a> </h1>
				<div id="navigation">
					<ul>
						<li>
							<a href="../home&afterlogin/afterlogin.php">Home</a>
						</li>
						<li>
							<a href="../home&afterlogin/afterlogin.php">Study materials</a>
						</li>

              					<li><a href="activity.php">Upload Details</a></li>       
              					<li><a href="activity_show.php">View Activity</a></li>
              					<li><a href="myactprint.php">My Activity</a></li>
						<li>
							<a href="#">Guest Talks</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<br>
		<br>
		<br>
		<div id="footer">
			<div class="background">
				<div class="body">
					<form action="activity_enter.php" method="post" id="message" class="section">
						<h3>upload your activity details</h3>
						<ul>
							<li>
								<label>Activity Date:</label>
								<input type="date" value="" name="actdate">
							</li>
							<li>
								<label>Activity type:</label>
								<input type="text" value="" name="acttype">
							</li>
							<li>
								<label>Acivity Name:</label>
								<input type="text" value="" name="actname">
							</li>
							<li>
								<label>Details:</label>
								<textarea name="actdetail"></textarea>
							</li>
							<li>
								<label>Acivity Points:</label>
								<input type="number" value="" name="actpoint">
							</li>
							<li>
								<input type="submit" value="submit" name="submit">
							</li>
						</ul>
					</form>
					<p id="footnote">
						
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>