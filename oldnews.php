<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="style/css" href="./style.css" />
<link href='http://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>

<title>Jeff Bell | Home</title>
</head>

<body>

<div class="main">

<div class="jcontainer">
<div class="j1"></div>
<div class="j2"></div>
</div>

<div class="hm1"></div>
<div class="hm2"></div>

<div class="b1"></div>
<div class="b2"></div>

<header>
<a href="./index.html" class="logo">
<h1>J H Bell</h1>
</a>
</header>

<br />
<br />

<nav>
<p>
<a href="./index.html" class="navi">Home</a>
&nbsp; &nbsp; &nbsp; &nbsp;
<a href="./news.php" class="navi">News</a>
&nbsp; &nbsp; &nbsp; &nbsp;
<a href="./bio.html" class="navi">Bio</a>
&nbsp; &nbsp; &nbsp; &nbsp;
<a href="./projects.html" class="navi">Projects</a>
&nbsp; &nbsp; &nbsp; &nbsp;
<a href="./contact.html" class="navi">Contact</a>
</nav>

<br />
<br />

<section>
<h2>Old News</h2>
<?php
$filename = './blogs/titles/title0.php';
$x = 0;
while (file_exists($filename)) {
	$x++;
	$filename = './blogs/titles/title' . $x . '.php';
}
for ($x-=1; $x>=0; $x--) {
	$filename = './blogs/titles/title' . $x . '.php';
	echo '<a href="./blogpages/blog' . $x . '.php"><p>';
	include $filename;
	echo '</p></a>';
}
?>
<a href="oldnews.php"><p>Old News</p></a>
</section>

</div>
</body>

</html>
