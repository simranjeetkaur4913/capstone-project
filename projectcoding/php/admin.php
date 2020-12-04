<?php
session_start();
if(isset($_SESSION['username'])){
	echo "<h1 style=background-color:yellow;>Welcome to admin Panel <a style=float:right;width:100px;padding:10px;box-sizing:border-box; href = 'logout.php'><input type=button value=logout name=logout></a></h1>";
	echo "<h3>".$_SESSION['username']."</h3>";
	//echo "<br><a href='login.php'><input type=button name=back value=back></a><br>";
	//echo "<br><a href = 'logout.php'><input type=button value=logout name=logout></a>";
}
else{
	echo "<script>location.href='login.html'</script>";
}
?>
<html>
<head>
<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	</head>
	<body>
		 <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Staff</a>
            <a href=#>Classes</a>
            <a href=#>Our Gallery</a>
			<a href=#>Department</a>
	</body>
</html>
