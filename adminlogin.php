<?php
include_once('db connection.php');
if(isset($_POST['ademail']))
{
	session_start();
	//echo "enter";
	$ademail=$_POST['ademail'];
	$adpass=$_POST['adpassword'];
	$adpass_hash= md5($adpass);
    $adaccount='A';
	$sel1="select * from adminlogin where ADMIN_ID = '$ademail' AND password= '$adpass_hash' AND ACCOUNT_TYPE='$adaccount'";
	$run= mysqli_query($con,$sel1);
	$check= mysqli_num_rows($run);
	if($check==1)
	{
		$_SESSION['EMAIL_ID']= $ademail;
        $_SESSION['ACCOUNT_TYPE']=$adaccount;
		//echo "Access granted";
		header("Location:home&afterlogin/afterlogin.php");
	}
	else
	{
		echo "Sorry You have entered Wrong Credentials";
	}
}
?>
<!DOCTYPE html> <!--<?php session_start();?>-->
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>

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
                        <h1><strong>ADMIN-LOGIN</strong></h1>
                        
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-4 col-lg-offset-4 form-box">                   
                    	<form role="form" action="adminlogin.php" method="post" class="f1">    
                           

                    
                    		<fieldset>
                    		   
                                <form>
                                    <div class="form-group">
                                        <label class="" for="email">Email address:</label>
                                        <input type="email" class="form-control" name="ademail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="password">Password:</label>
                                        <input type="password" class="form-control" name="adpassword" placeholder="Password">
                                    </div>

                                    <input type="submit" name="login" value="LOGIN">
                                    

                                    <br>

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