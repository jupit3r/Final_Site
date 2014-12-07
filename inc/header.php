<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $page_title; ?></title>	
	<meta charset="UTF-8">
	<meta content="author" author="Jupiter">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="container">
		<header>
				<h1>UI<span>Brush</span></h1>
				<nav id="mainNav">
					<ul class="dropdown">
						<li <?php if($page == "home"){echo 'class="active"';}?>><a href="index.php">Home</a></li>
						<li <?php if($page == "about"){echo 'class="active"';}?>><a href="about.php">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li <?php if($page == "portfolio"){echo 'class="active"';}?>><a href="portfolio.php">Portfolio</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
		</header>