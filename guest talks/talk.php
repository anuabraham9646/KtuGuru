<?php
session_start();
if(isset($_SESSION['EMAIL_ID']))
{
  $email = $_SESSION['EMAIL_ID'];
  $acpt = $_SESSION['ACCOUNT_TYPE'];
  if($acpt=='S')
  {
  	header("location:talk_show.php");
  }
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
				<h1 id="logo"> <a href="../home&afterlogin/afterlogin.php">GUEST TALKS</a> </h1>
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
		<div id="footer">
			<div class="background">
				<div class="body">
					<form action="talk_enter.php" method="post" id="message" class="section" enctype="multipart/form-data">
						<h3>UPLOAD GUEST TALKS DETAILS</h3>
						<ul>
							<li>
								<label>Date:</label>
								<input type="date" value="" name="actdate">
							</li>
							<li>
								<label>TOPIC:</label>
								<input type="text" value="" name="topic">
							</li>
							<li>
								<label>TALK</label>
								<input type="file"  name="talk">
							</li>
							<li>
								<input type="submit" value="submit" name="submit">
							</li>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
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