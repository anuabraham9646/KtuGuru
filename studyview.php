<?php
include_once('../db connection.php');
session_start();
if(isset($_POST['topic']) && isset($_SESSION['EMAIL_ID']))
{
  $topic= $_POST['topic'];
  if($_SESSION['ACCOUNT_TYPE'] == 'A')
  {
    $_SESSION['topic']= $topic;
    header("Location:adminstudyreq.php");

  }
  $email = $_SESSION['EMAIL_ID'];
  $subject_id = $_SESSION['SUBJECT_ID'];
  $topic= $_POST['topic'];
  $view_query="SELECT `EMAIL_ID`, `SUBJECT_ID`, `TOPIC`, `CONTENT` FROM `studentstudy` WHERE (TOPIC LIKE '$topic' AND SUBJECT_ID LIKE '$subject_id' AND `REVIEW` = 1)";
  $view_sql = $con->query($view_query);
  $view_sql_fetch = $view_sql->fetch_all(MYSQLI_ASSOC);

  function printstudy($arraylist){
  foreach ($arraylist as $arrayob => $novalue) {

    echo "<tr>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['SUBJECT_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['TOPIC']."</td>";
    //echo "<td align = 'center' <a href=".$arraylist[$arrayob]['CONTENT']."</a> >".$arraylist[$arrayob]['CONTENT']."</td>";
    $cont=$arraylist[$arrayob]['CONTENT'];
    echo "<td align = 'center' >";
    echo "<a href='$cont' target='_blank'>".$arraylist[$arrayob]['CONTENT']."</a>";
    //  var_dump($cont);
    echo "</td>";
    echo"</tr>";
    
  }
}

}
elseif(isset($_POST['topic']))
{
  $topic= $_POST['topic'];
  $subject_id = $_SESSION['SUBJECT_ID'];
  $view_query="SELECT `EMAIL_ID`, `SUBJECT_ID`, `TOPIC`, `CONTENT` FROM `studentstudy` WHERE (TOPIC LIKE '$topic' AND SUBJECT_ID LIKE '$subject_id' AND `REVIEW` = 1)";
  $view_sql = $con->query($view_query);
  $view_sql_fetch = $view_sql->fetch_all(MYSQLI_ASSOC);

  function printstudy($arraylist){
  foreach ($arraylist as $arrayob => $novalue) {

    echo "<tr>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['SUBJECT_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['TOPIC']."</td>";
    //echo "<td align = 'center' <a href=".$arraylist[$arrayob]['CONTENT']."</a> >".$arraylist[$arrayob]['CONTENT']."</td>";
    $cont=$arraylist[$arrayob]['CONTENT'];
    echo "<td align = 'center' >";
    echo "<a href='$cont' target='_blank'>".$arraylist[$arrayob]['CONTENT']."</a>";
    //  var_dump($cont);
    echo "</td>";
    echo"</tr>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Study Materials</title>

    <!-- Bootstrap -->
    <link href="../Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <meta charset="UTF-8">
  <title>Study Materials</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
  <div id="page">
    <div id="header">
      <div class="background">
        <h1 id="logo"> <a href="../home&afterlogin/afterlogin.php">Study Materials</a> </h1>
        <div id="navigation">
          <ul>
            <li>
              <a href="../home&afterlogin/afterlogin.php">Home</a>
            </li>
            <li>
              <a href="../home&afterlogin/afterlogin.php">Study materials</a>
            </li>

                        <li><a href="../Activity/activity.php">Upload Details</a></li>       
                        <li><a href="../Activity/activity_show.php">View Activity</a></li>
                        <li><a href="../Activity/myactprint.php">My Activity</a></li>

          </ul>
        </div>
      </div>
    </div>
  <div class="container-fluid">
   <br>
        <br>
        <br>
    <div class="panel panel-primary">
      <div class="panel-heading">
       <h2 class="panel-title " align="center">Study Materials</h2>
      </div>
      <!--<div class="panel-body">-->
      <div class="container-fluid">
        <table class="table table-striped">
          <thead>
            <tr>
              <td align = 'center'>Posted By</th>
              <td align = 'center'>Subject ID</th>
              <td align = 'center'>Topic</th>
              <td align = 'center'>Content</th>
              
              <!--<th>Activity Description</th>
              <th>Activity Point</th>
              <th>Return Date</th>
              <th>Return Time</th>
              <th>Warden Approval</th>-->
              

          </tr>
          </thead>
          <tbody>
            <?php printstudy($view_sql_fetch); ?>            
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
