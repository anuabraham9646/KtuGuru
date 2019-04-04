<?php
include_once('../db connection.php');
session_start();
$email = $_SESSION['EMAIL_ID'];
if(isset($_POST['actpt']))
  {
    
    $actpt=$_POST['actpt'];
    $actid=$_POST['actid'];
    $sel="select * from `activity_involved` where EMAIL_ID = '$email' AND ACTIVITY_ID= '$actid'";
    $run= mysqli_query($con,$sel);
    $check= mysqli_num_rows($run);


  if($check==0)
  {
    /*$que = $con->prepare("SELECT ACTIVITY_POINT FROM activity where ACTIVITY_ID = '$actid'");
    $que->execute();
    $res= $que->get_result();
    $r= $res->fetch_array(MYSQLI_ASSOC);
    $actpt= $r['ACTIVITY_POINT'];*/
   // echo $actpt;

    $que = $con->prepare("update user set ACT_POINT=ACT_POINT+'$actpt' where EMAIL_ID='$email'");
    $que->execute();
 
    $q= "insert into `activity_involved` (`EMAIL_ID`, `ACTIVITY_ID`) VALUES ('$email', '$actid')";

    $i=mysqli_query($con,$q);
    //header("location:activity_show.php");
    echo "Registered Successfully";
  }
  else
    {
      //header("location:activity_show.php");
      echo "Sorry You have registered for this event";
    }
      
  }


?>
