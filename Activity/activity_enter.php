<?php
include_once('../db connection.php');
if(isset($_POST['submit']))
{
     $Act_date = $_POST['actdate'].":00"; 
     $Act_type = $_POST['acttype']; 
     $Act_name= $_POST['actname'];
     $Act_detail = $_POST['actdetail'];
     $Act_point = $_POST['actpoint'];
    // $PASS= PASSWORD($PASSWORD);


//$conn=mysqli_connect('localhost','root','');
//mysqli_select_db($conn,'ktu');
$Act_query="INSERT INTO `activity` (`ACTIVITY_ID`, `ACTIVITY_DATE`, `ACTIVITY_TYPE`, `ACTIVITY_NAME`, `ACTIVITY_DESCRIPTION`, `ACTIVITY_POINT`) VALUES (NULL, '$Act_date', '$Act_type', '$Act_name', '$Act_detail', '$Act_point')";

//$q="insert into user (EMAIL_ID, password, NAME, GENDER, DOB, COLLEGE, AGE, SEMESTER, BRANCH, ACCOUNT_TYPE, SITE_POINT, ACT_POINT) values ('$EMAIL_ID', '$PASSWORD_HASH', '$NAME', '$GENDER', '$DOB', '$COLLEGE', $AGE, $SEMESTER, '$BRANCH', '$ACCOUNT_TYPE', 0,0)";

$i=mysqli_query($con,$Act_query);

if($i==1)
{
  header("location:activity.php");
}
mysqli_close($con);
}
?>