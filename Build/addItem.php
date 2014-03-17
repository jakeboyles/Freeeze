<!doctype html>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><html class="no-js" lang="en"><![endif]-->

<head>

	<!-- activate Google Chrome Frame if Installed -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Title Tag</title>
	
	<!-- seo meta stuff -->
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- mobile meta -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- favicons & icons -->
	<!-- For iPhone 4 -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="lib/images/h/apple-touch-icon.png"> -->
	<!-- For iPad 1-->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="lib/images/m/apple-touch-icon.png"> -->
	<!-- For the new iPad -->
	<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="lib/images/h/apple-touch-icon-144x144-precomposed.png"> -->
	<!-- For iPhone 3G, iPod Touch and Android -->
	<!-- <link rel="apple-touch-icon-precomposed" href="lib/images/l/apple-touch-icon-precomposed.png"> -->
	<!-- For Nokia -->
	<!-- <link rel="shortcut icon" href="lib/images/l/apple-touch-icon.png"> -->
	<!-- For everything else -->
	<link rel="shortcut icon" href="lib/images/favicon.ico">
		
	<!-- loading stylesheets -->
	<link rel="stylesheet" href="lib/css/style.css"> 
	<link rel="stylesheet" href="Bariol/stylesheet.css">

	<!--[if (lt IE 9) & (!IEMobile)]>
		<link rel="stylesheet" href="lib/css/ie.css">
	<![endif]-->
	
	<!-- typekit or google web font scripts -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
	<script src="lib/js/UITouch.js"></script>
	<script src="lib/js/jqtouch-1.0-b4-rc/src/jqtouch.min.js"></script>
	<script src="lib/js/jquery.mobile-events.min.js"></script>


  	
	<!-- Load Scripts -->
	<script src="lib/js/main.js"></script>
	<script src="lib/js/libs/modernizr.custom.min.js"></script>
	
</head>

<body>

	<header role="banner" class="header">
	<div class="center">
	<a href="#" id="menuButton"></a>
	<div class="logoDiv">
	<a href="index.php"><img class="logo" src="lib/images/logo.png"></a>
	</div>
	<a href="addItem.php" id="addMenu"></a>
	</div>
	</header>
	
	<div role="main" class="content">
	<div class="toDo">
	<h1>To Do</h1>
	</div>
	</div>
	
	<div role="complementary" class="sidebar">
	<div class="center">
	
<div class="addToDo adding">
<h2>Add To-Do</h2>
<form method="GET" action="addToDo.php" >
<div class="description">
<label for="desc">Description:</label>
<input name="desc" type="text" />
</div>

<div class="project">
<label for="project">Project:</label>
<select name="project">
<option disabled="true">Please Choose:</option>
<?php 
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
$query= "SELECT * FROM `wpallday_Freeze`.`Project`";
$result= mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
	
	echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
}
?>
</select>
</div>
<input class="submit" type="submit" name="submit" value="Submit" />
</form>
</div>	

<div class="addProject adding">
<h2>Add Project</h2>
<form method="GET" action="addProject.php" >
<label for="name">Project Name</label>
<input name="name" type="text" />
<input class="submit" type="submit" name="submit" value="Submit" />
</form>
</div>

<div class="addProject adding">
<form method="GET" action="removeProject.php" >
<h2>Remove Project</h2>
<select name="name">
<option disabled="true">Please Choose:</option>
<?php 
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
$query= "SELECT * FROM `wpallday_Freeze`.`Project`";
$result= mysql_query($query);
while ($row = mysql_fetch_assoc($result)) {
	
	echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
}
?>
</select>
<input class="submit" type="submit" name="submit" value="Submit" />
</form>
</div>
	</div>	
	
	<!-- Grab Google CDN's jQuery, without a fallback (if Google fails, the world will implode) -->
		
	<!-- scripts complied and minified for speed -->

	
	<!-- below prompts IE6 users to install Google Chrome Frame -->
	<!--[if lt IE 7 ]>
    	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
  
</body>

</html> <!-- end page, what a ride! -->