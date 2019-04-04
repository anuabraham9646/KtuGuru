<?php
include_once('../db connection.php');
if(isset($_POST['submit']))
{
	session_start();
	$email = $_SESSION['EMAIL_ID'];
     $talk_date = $_POST['actdate'].":00"; 
     $talk_topic = $_POST['topic']; 
     //$talk_cont= $_POST['talk'];
    // $PASS= PASSWORD($PASSWORD);





$target= "guest/";
$target = $target . basename( $_FILES['talk']['name']);
var_dump($target);

$Filename=basename( $_FILES['talk']['name']);
echo $Filename;
//var_dump(move_uploaded_file($_FILES['content']['tmp_name'], $target));
$move=move_uploaded_file($_FILES['talk']['tmp_name'], $target);
sleep(10);

if($move) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['talk']['name']). " has been uploaded, and your information has been added to the directory";


	//$review= 1;

	/*$q= "insert into `studentstudy` (`STUDY_ID`, `EMAIL_ID`, `SUBJECT_ID`, `TOPIC`,  `CONTENT`, `uploaddate`, `REVIEW`) VALUES (NULL, '$email', '$subject_id', '$topic', '$Filename',  CURRENT_TIMESTAMP , '0')";

	$i=mysqli_query($con,$q);
    echo $i;
	mysqli_close($con);
	header("Location:CS101engphy-2.php");*/








$guest_query="INSERT INTO `guest` (`TALK_ID`, `TALKDATE`, `EMAIL_ID`, `TOPIC`, `TALK`) VALUES (NULL, '$talk_date', '$email', '$talk_topic', '$Filename')";

//$q="insert into user (EMAIL_ID, password, NAME, GENDER, DOB, COLLEGE, AGE, SEMESTER, BRANCH, ACCOUNT_TYPE, SITE_POINT, ACT_POINT) values ('$EMAIL_ID', '$PASSWORD_HASH', '$NAME', '$GENDER', '$DOB', '$COLLEGE', $AGE, $SEMESTER, '$BRANCH', '$ACCOUNT_TYPE', 0,0)";

$i=mysqli_query($con,$guest_query);
echo "ok";

if($i==1)
{
  header("location:talk.php");
}
mysqli_close($con);
}






}
else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}












//$conn=mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'ktu');

?>
