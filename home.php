<?php

session_start();
if(!isset($_SESSION['email'])){
	header('location:index.php');
}

?>

<html>
<head>
	<title>Welcome</title>
	<link rel= "stylesheet" type="text/css" href= "welcome.css">
</head>
<body>

<!--Navigation Bar - linking other pages to index page-->
<ul>
		<li><a href="http://blogss.gearhostpreview.com/pages/about.html">&nbsp; About Us &nbsp; </a></li>
		<li><a href="http://blogss.gearhostpreview.com/pages/topics.html">&nbsp; Topics &nbsp;</a></li>
		<li style="float:right"><a class="active" href="http://blogss.gearhostpreview.com/pages/contact.html">Contact Us</a></li>
		<li style="float:right"><a class="active" href="../index.php">Sign Up/Login</a></li>
		<!--Page Heading-->
		<h1> 
		<?php 
		echo '<a  href="http://blogss.gearhostpreview.com/index.html"> <img src="S&S Blogs Logo.jpg" alt="Home" width="150" height="150"/></a>';
		?>
		</h1>
</ul>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	
	<h2>Welcome <?php echo $_SESSION['email']; ?></h2>
	
	
	<div class="container">
	<div class="center">
	<a href="https://writingpage.herokuapp.com/index.php"><button type="button" class="logoutbtn"> WRITE HERE</button></a>
	</div>
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
	
	<div class="container">
	
	<div class="center">
	<a href="logout.php"><button type="button" class="logoutbtn"> LOG OUT</button></a>
	</div>
	</div>
	
	
<div class="footer">
  <p>Follow us on <a  href="https://www.instagram.com/ssblogs2/">Instagram</a> and <a  href="https://twitter.com/siobhan_saoirse">Twitter</a></p>
  <p> All Rights Reserved By S&S Blogs</p> <p>&nbsp; © 2021 S&S Blogs&nbsp;</p>

</div>


</body>

</html>
