<?php
session_start();
if(isset($_POST['subject_id']) && isset($_SESSION['EMAIL_ID']))
{
  $email = $_SESSION['EMAIL_ID'];
  $subject_id=$_POST['subject_id'];
  $_SESSION['SUBJECT_ID'] = $subject_id;
  if($subject_id=='CS101')
  	header("Location:study/CS101engphy-2.php");

}
elseif(isset($_POST['subject_id']))
{
	$subject_id=$_POST['subject_id'];
  $_SESSION['SUBJECT_ID'] = $subject_id;
  if($subject_id=='CS101')
  	header("Location:study/CS101engphy-2.php");

}
elseif (isset($_POST['home'])) {
	if(! isset($_SESSION['EMAIL_ID']))
            {
    header("Location:home&afterlogin/home.html");}  
              else { 
              header("Location:home&afterlogin/afterlogin.php");}
}

?><!DOCTYPE html>
<html>
<head>
	<title>Study Materials</title>
</head>
<body bgcolor="grey">


<form action="stud-2.php" method="post">
<center><font size="5" color="red">STUDY MATERIALS</font><hr>
</br>
<h2>SEMESTER 1&2:</h2></center>
<center><input type="submit" name="home" value="HOME"></input></center></h2>
<hr>

	<h2>
	<input type="radio" name="subject_id" value="CS100">Calculus</input><br>
	<input type="radio" name="subject_id" value="CS101">Engineering Physics</input><br>
	<input type="radio" name="subject_id" value="CS102">Engineering Chemistry</input><br>
	<input type="radio" name="subject_id" value="CS103">Engineering Mechanics</input> <br>
	<input type="radio" name="subject_id" value="CS104">Engineering Graphics</input><br>
	<input type="radio" name="subject_id" value="CS105">Introduction to Civil Engineering </input><br>
	<input type="radio" name="subject_id" value="CS106">Introduction to Mechanical Engineering Sciences </input><br>
	<input type="radio" name="subject_id" value="CS107">Introduction to Electrical Engineering </input><br>
	<input type="radio" name="subject_id" value="CS108">Introduction to Electronics Engineering </input><br>
	<input type="radio" name="subject_id" value="CS109">Introduction to Computing and Problem Solving </input><br>
	<input type="radio" name="subject_id" value="CS110">Introduction to Chemical Engineering</input><br>
	<input type="radio" name="subject_id" value="CS111">Introduction to Sustainable Engineering </input><br>
	<input type="radio" name="subject_id" value="CS112">Basics of Civil Engineering</input><br>
	<input type="radio" name="subject_id" value="CS113">Basics of Mechanical Engineering</input><br>
	<input type="radio" name="subject_id" value="CS114">Basics of Electrical Engineering </input><br>
	<input type="radio" name="subject_id" value="CS115">Basics of Electronics  Engineering</input><br>
	<input type="radio" name="subject_id" value="CS116">Differential Equations</input><br>
	<input type="radio" name="subject_id" value="CS117">Design and Engineering </input><br>
	</br>
	<br/>
	<center><input type="submit" value="submit"></input></center></h2>
	
</form>
</h2>
</body>
</html>