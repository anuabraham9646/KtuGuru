<?php
session_start();
if(isset($_SESSION['EMAIL_ID']))
{
  $email = $_SESSION['EMAIL_ID'];
  $actp = $_SESSION['ACCOUNT_TYPE'];
//echo"Hello";
//echo "Welcome $email" ;
//session_destroy();
}
else
{
  header("location:../login.php");
}

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KTUGURU</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div id="container" class="width">
  
    <header>

    	<h1><a href="afterlogin.php">KTU<span>guru</span></a></h1>

    </header>

    
	<!--<div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>-->

<nav id="mainav" class="fl_right" align="left">
        <ul class="clear">
          <li class="active"><a href="afterlogin.php">home</a></li>
          <li><a class="drop" href="#">study materials</a>
            <ul>
              <li><a class="drop" href="pages/CSE.html">COMPUTER SCIENCE</a>	
            <ul>
              <li><a href="../stud-2.php" target="_blank">SEMESTER 1</a></li>				
              <li><a href="pages/SEM2.html">SEMESTER 2</a></li>
              <li><a href="pages/SEM3.html">SEMESTER 3</a></li>
              <li><a href="pages/SEM4.html">SEMESTER 4</a></li>
            </ul>
          </li>
			
              <li><a class="drop" href="pages/CE.html">CIVIL </a>

		<ul>
              <li><a href="pages/SEM1.html">SEMESTER 1</a></li>				
              <li><a href="pages/SEM2.html">SEMESTER 2</a></li>
              <li><a href="pages/SEM3.html">SEMESTER 3</a></li>
              <li><a href="pages/SEM4.html">SEMESTER 4</a></li>
            </ul>
          </li>
              <li><a href="pages/ME.html">MECHANICAL</a>
              
		<ul>
              <li><a href="pages/SEM1.html">SEMESTER 1</a></li>				
              <li><a href="pages/SEM2.html">SEMESTER 2</a></li>
              <li><a href="pages/SEM3.html">SEMESTER 3</a></li>
              <li><a href="pages/SEM4.html">SEMESTER 4</a></li>
            </ul>
          </li>
			

	<li><a href="pages/EC.html">ELECTRONICS AND COMMUNICATION</a>

		<ul>
              <li><a href="pages/SEM1.html">SEMESTER 1</a></li>				
              <li><a href="pages/SEM2.html">SEMESTER 2</a></li>
              <li><a href="pages/SEM3.html">SEMESTER 3</a></li>
              <li><a href="pages/SEM4.html">SEMESTER 4</a></li>
            </ul>
          </li>
            </ul>
          </li>
          <li><a class="drop" href="#">ACTIVITY POINTS</a>
          <ul>
              <li><a href="../Activity/activity.php">Upload Details</a></li>       
              <li><a href="../Activity/activity_show.php">View Activity</a></li>
              <li><a href="../Activity/myactprint.php">My Activity</a></li>
          </ul>
           </li>
          <!--<li><a href="#">DISCUSSIONS</a></li>-->
          <li><a href="../guest talks/talk.php">GUEST TALKS</a></li>
        
		</ul>
        	</ul>

	</nav>

	</div>

		<p align="right">
	<footer>
        <ul class="nospace inline pushright" align = "right">
          <li><a class="btn inverse" ><?php echo "Welcome ".$email ;?></a></li>
          <li><a class="btn inverse" href="../logout.php">LOGOUT</a></li>
        </ul>
      </footer>
</p>

    <div id="pageintro" class="centre">

    <article> 
      <h1 class="heading">A complete website for ktu students and teachers<br>mainly based on ktu syllabus</h1>
      <!--<p class="font-x1 uppercase bold">Register in our site for using all our features</p>-->
    </article>
  </div>
        <aside class="sidebar" class="centre">
	
            <ul>	
               <li>
                    <h4><span>KTU NEWS</span></h4>
                    <marquee direction="up">
                    <ul>
                        <li><a href="index.html">Home Page</a></li>
                        <li><a href="examples.html">M.Tech First Semester Supplementary Examination September 2016 (Palakkad Cluster) Result Published
</a></li>
                        <li><a href="#">B.Tech S1 Examinations - Result published</a></li>
                        <li><a href="#">Affiliation 2017-18 -Corrigendum</a></li>
                        <li><a href="#">Meeting with students organisations</a></li>
                    </ul>
                    </marquee>
                </li>
                
                
                <!--<li>
                	<h4><span>Search site</span></h4>
                    <ul>
                    	<li class="text">
                            <form method="get" class="searchform" action="#" >
                                <p>
                                    <input type="text" size="45" value="" name="s" class="s" />
                                    
                                </p>
                            </form>	
						</li>-->
					</ul>
                </li>
                
                <li>
                    <h4><span>Helpful Links</span></h4>
                    <marquee>
                    <ul>
                        <li><a href="http://www.themeforest.net/?ref=spykawg" title="premium templates">www.ktu.edu.in</a></li>
                        <li><a href="http://www.dreamhost.com/r.cgi?259541" title="web hosting">www.ktustudents.com</a></li>
                        <li><a href="http://tuxthemes.com" title="Tux Themes">www.amazonbooks.com</a></li>
                    </ul>
                    </marquee>
                </li>
                
            </ul>
		
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content">
        <marque>
            <center><h4>KTUGURU</h4></center>
            	

      
            
            <div class="clear"></div>
        </div>
    </footer>
</div>
</body>
</html>