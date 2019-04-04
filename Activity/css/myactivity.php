<?php
include_once('../db connection.php');
session_start();
$email = $_SESSION['EMAIL_ID'];
if(isset($_POST['actid']))
  {
    
    $actid=$_POST['actid'];
    $sel="select * from `activity_involved` where EMAIL_ID = '$email' AND ACTIVITY_ID= '$actid'";
    $run= mysqli_query($con,$sel);
    $check= mysqli_num_rows($run);


  if($check==0)
  {
    $que = $con->prepare("SELECT ACTIVITY_POINT FROM activity where ACTIVITY_ID = '$actid'");
    $que->execute();
    $res= $que->get_result();
    $r= $res->fetch_array(MYSQLI_ASSOC);
    $actpt= $r['ACTIVITY_POINT'];
   // echo $actpt;

    $que = $con->prepare("update user set ACT_POINT=ACT_POINT+'$actpt' where EMAIL_ID='$email'");
    $que->execute();
 
    $q= "insert into `activity_involved` (`EMAIL_ID`, `ACTIVITY_ID`, `CERTIFICATE`) VALUES ('$email', '$actid', NULL)";

    $i=mysqli_query($con,$q);
    echo "Registered Successfully";
  }
  else
    {
      echo "Sorry You have registered for this event";
    }

  }

else
{
    $myactivity_query = "select * from `activity_involved` WHERE `EMAIL_ID` LIKE '$email' order by `ACTIVITY_ID` " ;
  $myact_sql = $con->query($myactivity_query);
  $myact_sql_fetch = $myact_sql->fetch_all(MYSQLI_ASSOC);


function myprintactivity($arraylist){
  foreach ($arraylist as $arrayob => $novalue) 
  {
    echo "<tr>";
    //echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";
    /*echo '<td align= "center">
      <form action="myactivity.php" method="post" >
      
        <button name="actid" type="submit" class="btn btn-primary" value = "'.$arraylist[$arrayob]['ACTIVITY_ID'].'" >'.$arraylist[$arrayob]['ACTIVITY_ID'].'</button>
     </form>
    </td>';
    echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";*/
   // echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_NAME']."</td>";
   // echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";
  }
}


}















?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Activity Points</title>

    <!-- Bootstrap -->
    <link href="G:/Useful Junks/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title " align="left">My Activity</h2>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead class="thead-inverse">
            <tr>
             <!-- <th>Activity No.</th>
              <th>Activity Date</th>
              <th>Activity Type</th>
              <th>Activity Name</th>-->
              <th>Activity ID</th>
              <th>My Points</th>

             <!-- <th>Return Date</th>
              <th>Return Time</th>
              <th>Warden Approval</th>-->
              

          </tr>
          </thead>
          <tbody>
            <?php myprintactivity($myact_sql_fetch); ?>            
          </tbody>
        </table>
      </div>
    </div>
    </div>
    

  </body>
</html>
