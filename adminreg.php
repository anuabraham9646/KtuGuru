<?php
include_once('db connection.php');
if(isset($_POST['ademail']))
{
    //echo "keri";
     $ADEMAIL_ID = $_POST['ademail']; 
     $ADPASSWORD = $_POST['adpassword']; 
     $ADPASSWORD_HASH= md5($ADPASSWORD);
     $ADNAME = $_POST['adname'];
     $ADGENDER = $_POST['adgender'];
     //$ADREVIEW= 0;
     //$ADACCOUNT='A';
     
$q1="INSERT INTO `adminlogin` (`ADMIN_ID`, `password`, `NAME`, `GENDER`, `ACCOUNT_TYPE`) VALUES ('$ADEMAIL_ID', '$ADPASSWORD_HASH', '$ADNAME', '$ADGENDER', 'A')";
//INSERT INTO `adminlogin` (`ADMIN_ID`, `password`, `NAME`, `GENDER`, `REVIEW`, `ACCOUNT_TYPE`) VALUES ('a', 'a', 'a', 'm', NULL, 'A');
$i1=mysqli_query($con,$q1);
echo $i1;
mysqli_close($con);
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

        <!-- Top content -->
        <div class="top-content">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>ADMIN-Sign-Up</strong></h1>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-4 col-lg-offset-4 form-box">
                    	<form role="form" action="adminreg.php" method="post" class="f1">

                    
                    		<fieldset>
                    		   
                                <form>
                                    <div class="form-group">
                                        <label class="" for="email">Email address:</label>
                                        <input type="email" class="form-control" name="ademail" placeholder="Email" required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password">Password:</label>
                                        <input type="password" class="form-control" name="adpassword" placeholder="Password" required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="name">Name:</label>
                                        <input type="text" class="form-control" name="adname" placeholder="Name" required="yes">
                                    </div>
                                    <div class="form-group">
                                        <label class="radio‐inline">Gender:
                                        <input type="radio" name="adgender" id="gender" value="Male"> Male
                                        </label>
                                        <label class="radio‐inline">
                                        <input type="radio" name="adgender" id="gender" value="female"> Female
                                        </label>
                                    </div>
                                
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