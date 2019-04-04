<?php
include_once('../db connection.php');
session_start();
if(isset($_SESSION['EMAIL_ID']))
{
  $email = $_SESSION['EMAIL_ID'];

$activity_query = "select * from activity order by ACTIVITY_ID " ;
$act_sql = $con->query($activity_query);
$act_sql_fetch = $act_sql->fetch_all(MYSQLI_ASSOC);


function printactivity($arraylist){
  foreach ($arraylist as $arrayob => $novalue) {
    echo "<tr>";

    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_ID']."</td>";
    $hidden=$arraylist[$arrayob]['ACTIVITY_ID'];
    
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_DATE']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_TYPE']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_NAME']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_DESCRIPTION']."</td>";
    //echo "<td align = 'center' >".$arraylist[$arrayob]['ACTIVITY_POINT']."</td>";
    echo '<td align= "center">
      <form action="myactivity.php" method="post" >
        <input type="hidden" name="actid" value="'.$hidden.'">
        <button name="actpt" type="submit" class="btn btn-primary" value = "'.$arraylist[$arrayob]['ACTIVITY_POINT'].'" >'.$arraylist[$arrayob]['ACTIVITY_POINT'].'</button>
     </form>
    </td>';
    
  }

}
}
else
{
  header("Location:../login.php");
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Activity Points</title>

    <!-- Bootstrap -->
    <link href="../Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <meta charset="UTF-8">
  <title>ACTIVITY POINTS</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">

  </head>

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

          </ul>
        </div>
      </div>
    </div>
  <body>
  <div class="container-fluid">
  <br>
  <br>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title " align="center">ACTIVITY POINT NOTIFICATION</h2>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead class="thead-inverse">
            <tr>
              <th>Activity No.</th>
              <th>Activity Date</th>
              <th>Activity Type</th>
              <th>Activity Name</th>
              <th>Activity Description</th>
              <th>Activity Point</th>
             <!-- <th>Return Date</th>
              <th>Return Time</th>
              <th>Warden Approval</th>-->
              

          </tr>
          </thead>
          <tbody>
            <?php printactivity($act_sql_fetch); ?>            
          </tbody>
        </table>
      </div>
    </div>
    </div>
    






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
