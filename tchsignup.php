<?php
include_once('db connection.php');
if(isset($_POST['email']))
{

     $EMAIL_ID = $_POST['email']; 
     $PASSWORD = $_POST['password']; 
     $PASSWORD_HASH= md5($PASSWORD);
     $NAME = $_POST['name'];
     $DOB = $_POST['dob'].":00";
     $COLLEGE = $_POST['college'];
     //$AGE = $_POST['age']; 
     $GENDER = $_POST['gender'];
     //$SEMESTER = $_POST['semester'];
     $BRANCH = $_POST['branch'];
     //$ACCOUNT_TYPE = $_POST['account_type'];
     $ACCOUNT_TYPE = 'T';
     //$SITE_POINT =0;
     //$ACT_POINT =0; 
    $sel="select * from teacher where EMAIL_ID = '$EMAIL_ID' ";
    $run= mysqli_query($con,$sel);
    $check= mysqli_num_rows($run);
    if($check==0)
    {

    $q="insert into teacher (EMAIL_ID, password, NAME, GENDER, DOB, COLLEGE, BRANCH, ACCOUNT_TYPE) values ('$EMAIL_ID', '$PASSWORD_HASH', '$NAME', '$GENDER', '$DOB', '$COLLEGE', '$BRANCH', '$ACCOUNT_TYPE')";

$i=mysqli_query($con,$q);
//echo $i;
mysqli_close($con);
}
else
{
    echo "This account is already registered";
}
}
elseif(isset($_POST['login']))
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets1/css/form-elements.css">
        <link rel="stylesheet" href="assets1/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head><!DOCTYPE html>
<html>
<head>
<style>
body {  
    background-image: url("KK.jpg");
}
</style>
</body>
</html>
        

    <body>
    	<form action="tchsignup.php" method="post">    
                    	<h1>Already Registered ?</h1><br><input type="submit" name="login" value="login">
                    	</form> 
                <div class="row">
        <!-- Top content -->
        <div class="top-content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Sign-Up</strong></h1>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-4 col-lg-offset-4 form-box">
                    	<form role="form" action="tchsignup.php" method="post" class="f1">

                    
                    		<fieldset>
                    		   
                                <form>
                                    <div class="form-group">
                                        <label class="" for="email">Email address:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password">Password:</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password 8 characters long" pattern=".{8,}"required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="name">Name:</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="dob">Date-Of-Birth:</label>
                                        <input type="date" class="form-control" name="dob" placeholder="Date-Of_Birth" max="1996-01-01" required="yes">
                                    </div>
                                    <!--<div class="form-group">
                                        <label class="" for="branch">Branch:</label> <br>
                                        <input type="text" class="branch" name="branch" placeholder="Branch" required="yes">
                                    </div>-->
                                     BRANCH:<select name="branch">
                                    <option value="cse">COMPUTER</option>
                                    <option value="ce" >CIVIL</option>
                                    <option value="me" >MECHANICAL</option>
                                    <option value="sel"s selected disabled>Select</option>
                                    </select>















                                    <div class="form-group">
                                        <label class="radio‐inline">Gender:
                                        <input type="radio" name="gender" id="gender" value="Male"> Male
                                        </label>
                                        <label class="radio‐inline">
                                        <input type="radio" name="gender" id="gender" value="female"> Female
                                        </label>
                                    </div>
                                    COLLEGE:<select name="college">
                                    <option value="ajce">AJCE</option>
                                    <option value="sjcet" >SJCET</option>
                                    <option value="cet" >CET</option>
                                    <option value="sel"s selected disabled>Select</option>
                                    </select>
                                    <br>
                                    <br>
                                    <input type="submit" value="REGISTER">
                                </form>

                            </fieldset>


                    </div>
                </div>
                    
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets1/js/jquery-1.11.1.min.js"></script>
        <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets1/js/jquery.backstretch.min.js"></script>
        <script src="assets1/js/retina-1.1.0.min.js"></script>
        <script src="assets1/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets1/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>