<?php
session_start();
if(isset($_SESSION['username'])){
	//echo "<h1 style=background-color:yellow;>Welcome to admin Panel <a style=float:right;width:100px;padding:10px;box-sizing:border-box; href = 'logout.php'><input type=button value=logout name=logout></a></h1>";
	//echo "<h3>".$_SESSION['username']."</h3>";
	//echo "<br><a href='login.php'><input type=button name=back value=back></a><br>";
	//echo "<br><a href = 'logout.php'><input type=button value=logout name=logout></a>";
echo "<script>location.href='admin-panal.php'</script>";
}
else{
	echo "<script>location.href='login.html'</script>";
}
?>
<html>
    <head>
        <title>Admin Panal</title>
    </head>
    <frameset rows="20%, 80%">
        <frame src="panal.php" noresize scrolling="no">
        <frameset cols="23%, 77%">
        <frame src="nav-bar-admin.php">
        <frame src="welcome-admin.php" name="mainbody">
    </frameset>
    </frameset>
    
</html>