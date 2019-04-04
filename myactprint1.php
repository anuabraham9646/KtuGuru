<?php
include_once('../db connection.php');
session_start();
$email = $_SESSION['EMAIL_ID'];
    $myactivity_query = "SELECT ACTIVITY_ID,ACTIVITY_DATE,ACTIVITY_TYPE,ACTIVITY_NAME FROM activity WHERE ACTIVITY_ID IN ( SELECT ACTIVITY_ID FROM activity_involved WHERE EMAIL_ID LIKE '$email')" ;
    $myact_sql = $con->query($myactivity_query);
    $myact_sql_fetch = $myact_sql->fetch_all(MYSQLI_ASSOC);

    /*$actque = $con->prepare("SELECT ACTIVITY_DATE,ACTIVITY_TYPE,ACTIVITY_NAME FROM activity WHERE ACTIVITY_ID IN ( SELECT ACTIVITY_ID FROM activity_involved WHERE EMAIL_ID LIKE '$email')");
    $actque->execute();
    $res= $actque->get_result();
    $r= $res->fetch_array(MYSQLI_ASSOC);
    $actdate= $r['ACTIVITY_DATE'];
    $acttype= $r['ACTIVITY_TYPE'];
    $actname= $r['ACTIVITY_NAME'];

    echo "$actdate $acttype $actname";*/


function myprintactivity($arraylist){
  foreach ($arraylist as $arrayob => $novalue) 
  {
    echo "<tr>";
 
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_DATE']."</td>";
   echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_TYPE']."</td>";
   echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_NAME']."</td>";
  //echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";


  }
    
   // echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";
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
    <link href="../Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="UTF-8">
  <title>My Activity Points</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
  <div id="page">
    <div id="header">
      <div class="background">
        <h1 id="logo"> <a href="../home&afterlogin/afterlogin.php">MY ACTIVITY POINTS</a> </h1>
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

          </ul>
        </div>
      </div>
    </div>
  <div class="container-fluid">
  <br>
  <br>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title " align="center">MY REGISTERED ACTIVITY</h2>
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
              <th>Activity Date</th>
              <th>Activity Type</th>
              <th>Activity Name</th>
          

             <!-- <th>Return Date</th>
              <th>Return Time</th>
              <th>Warden Approval</th>-->
              

          </tr>
          </thead>
          <tbody class="tbody-inverse">
            <?php myprintactivity($myact_sql_fetch); ?>            
          </tbody>
        </table>
      </div>
      <br>
    
    </div>
    </div>
    

  </body>
</html>










