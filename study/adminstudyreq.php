<?php
include_once('../db connection.php');
session_start();
if(isset($_POST['review']))
{
  $review=$_POST['review'];
  $stdid=$_POST['stdid'];
  $emdid=$_POST['emailid'];

  if($review)
  {
    $que = $con->prepare("update studentstudy set REVIEW='$review' where STUDY_ID='$stdid'");
    $que->execute();
    $que1 = $con->prepare("update user set SITE_POINT= SITE_POINT+5 where EMAIL_ID LIKE '$emdid'");
    $que1->execute();
    header("Location:../stud-2.php");
  }

  else
  {
    $que = $con->prepare("DELETE FROM studentstudy WHERE STUDY_ID ='$stdid'");
    $que->execute();
    header("Location:../stud-2.php");
  }
    

}

elseif(($_SESSION['ACCOUNT_TYPE'] == 'A'))
{
  //echo "ghus gaya";
  //echo $_SESSION['ACCOUNT_TYPE'];
  $email = $_SESSION['EMAIL_ID'];
  $subject_id = $_SESSION['SUBJECT_ID'];
  $topic= $_SESSION['topic'];
  //echo $topic;
  $viewreq_query="SELECT * FROM `studentstudy` WHERE (TOPIC LIKE '$topic' AND SUBJECT_ID LIKE '$subject_id' AND REVIEW=0 )ORDER BY uploaddate DESC";
  $viewreq_sql = $con->query($viewreq_query);
  $viewreq_sql_fetch = $viewreq_sql->fetch_all(MYSQLI_ASSOC);

  function printreq($arraylist){
  foreach ($arraylist as $arrayob => $novalue) {

    echo "<tr>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['STUDY_ID']."</td>";
    $hidden=$arraylist[$arrayob]['STUDY_ID'];
    echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    $hidden1=$arraylist[$arrayob]['EMAIL_ID'];
    echo "<td align = 'center' >".$arraylist[$arrayob]['SUBJECT_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['TOPIC']."</td>";
    //echo "<td align = 'center' >".$arraylist[$arrayob]['CONTENT']."</td>";
    $cont=$arraylist[$arrayob]['CONTENT'];
    echo "<td align = 'center' >";
    echo "<a href='material/";echo $cont;echo"' target='_blank'>".$cont."</a>";
   // echo "<a href='$cont'>".$arraylist[$arrayob]['CONTENT']."</a>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['REVIEW']."</td>";
    echo '<td align= "center">
      <form action="" method="post" >
        <input type="hidden" name="stdid" value="'.$hidden.'">
        <input type="hidden" name="emailid" value="'.$hidden1.'">
        <button name="review" type="submit" class="btn btn-primary" value = "1" >ACCEPT</button>
        <button name="review" type="submit" class="btn btn-primary" value = "0" >REJECT</button>
     </form>
    </td>';
    
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
            <?php if(! isset($_SESSION['EMAIL_ID']))
            {echo '<a href="../home&afterlogin/home.html">Home</a>';}  
              else { echo'<a href="../home&afterlogin/afterlogin.php">Home</a>';}?>
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
        <table class="table table-bordered">
          <thead class="thead">
            <tr>
              <th>STUDY ID</th>
              <th>Posted By</th>
              <th>Subject ID</th>
              <th>Topic</th>
              <th>Content</th>
              <th>REVIEW</th>
              <th align="right">ACCEPT/REJECT</th>
              
              <!--<th>Activity Description</th>
              <th>Activity Point</th>
              <th>Return Date</th>
              <th>Return Time</th>
              <th>Warden Approval</th>-->
              

          </tr>
          </thead>
          <tbody>
            <?php printreq($viewreq_sql_fetch); ?>            
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

