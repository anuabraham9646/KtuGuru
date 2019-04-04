<?php
include_once('../db connection.php');
session_start();
if(isset($_POST['review']))
{
  $review=$_POST['review'];
  $stdid=$_POST['stdid'];
  
    $que = $con->prepare("update studentstudy set REVIEW='$review' where STUDY_ID='$stdid'");
    $que->execute();
    header("Location:../stud-2.php");

}

elseif(($_SESSION['ACCOUNT_TYPE'] == 'A'))
{
  //echo "ghus gaya";
  //echo $_SESSION['ACCOUNT_TYPE'];
  $email = $_SESSION['EMAIL_ID'];
  $subject_id = $_SESSION['SUBJECT_ID'];
  $topic= $_SESSION['topic'];
  //echo $topic;
  $viewreq_query="SELECT * FROM `studentstudy` WHERE (TOPIC LIKE '$topic' AND SUBJECT_ID LIKE '$subject_id')";
  $viewreq_sql = $con->query($viewreq_query);
  $viewreq_sql_fetch = $viewreq_sql->fetch_all(MYSQLI_ASSOC);

  function printreq($arraylist){
  foreach ($arraylist as $arrayob => $novalue) {

    echo "<tr>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['STUDY_ID']."</td>";
    $hidden=$arraylist[$arrayob]['STUDY_ID'];
    echo "<td align = 'center' >".$arraylist[$arrayob]['EMAIL_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['SUBJECT_ID']."</td>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['TOPIC']."</td>";
    //echo "<td align = 'center' >".$arraylist[$arrayob]['CONTENT']."</td>";
    $cont=$arraylist[$arrayob]['CONTENT'];
    echo "<td align = 'center' >";
    echo "<a href='$cont'>".$arraylist[$arrayob]['CONTENT']."</a>";
    echo "<td align = 'center' >".$arraylist[$arrayob]['REVIEW']."</td>";
    echo '<td align= "center">
      <form action="" method="post" >
        <input type="hidden" name="stdid" value="'.$hidden.'">
        <button name="review" type="submit" class="btn btn-primary" value = "1" >ACCEPT</button>
        <button name="review" type="submit" class="btn btn-primary" value = "0" >REJECT</button>
     </form>
    </td>';
    
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
  </head>
  <body>
  <div class="container-fluid">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title " align="center">Study Materials</h2>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
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
