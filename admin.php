
<html>
<head>
<title>Admin Panel</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/administration.css">
    <style>
    .btnAdminLogout
        {
            padding: 10px;
            background-color: #F07114;
            font-size: 20px;
            color:#FAFAFA;
        }
    </style>
	</head>
	<body>
		<input type="checkbox" name="" checked="checked">
        <span class="closebtn" style="text-align:center;color:#FAFAFA; font-size:20px;padding-top:15px;box-sizing:border-box; font-weight:bold">Menu</span>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="contact-admin.php">Contact</a></li>
            <li><a href="staff-administration.php">Staff</a></li>
           
             <li><a href="signup.php">Create Login Credentials For Staff</a></li>
        </ul>
<div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-12" style="height:100%; padding-top: 150px; text-align:center; box-sizing:border-box;">
        <h2>Administration:</h2> 
        <p style="font-weight:bold; color:#555555">Gurmeet Singh <br>
        Simranjeet Kaur <br>
        Rajdeep Kaur <br> </p>
        <?php
session_start();
if(isset($_SESSION['username'])){
	echo "<a  href ='logout.php'><input type=button value=Logout name=logout class='btnAdminLogout'></a>";
	//echo "<h3>".$_SESSION['username']."</h3>";
	//echo "<br><a href='login.php'><input type=button name=back value=back></a><br>";
	//echo "<br><a href = 'logout.php'><input type=button value=logout name=logout></a>";
}
else{
	echo "<script>location.href='login.php'</script>";
}
?>
      </div>
     
    
      
  </div>
</div>
	</body>
</html>


