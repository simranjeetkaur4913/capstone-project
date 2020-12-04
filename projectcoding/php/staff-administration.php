<?php
session_start();
if(isset($_SESSION['username'])){
	echo "<a style='width:100px;padding:10px;box-sizing:border-box;margin-left:50%;margin-top:10px;' href ='logout.php'><input type=button value=logout name=logout></a>";
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
<title>Admin Panel-Delta School-Staff</title>
	<link rel="stylesheet" type="text/css" href="../css/administration.css">
    
	</head>
	<body>
        <center><h2>Staff Page</h2></center>
        <center><table height="300px" width="120px" border="1px">
            <tr>
                <td class="table-data">First Name</td>
                <td class="table-data"><input type="text" name="fname" /></td>
            </tr>
            <tr>
                <td class="table-data">Last Name</td>
                <td class="table-data"><input type="text" name="lname" /></td>
            </tr>
            <tr>
                <td class="table-data">Email</td>
                <td class="table-data"><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td class="table-data">Department</td>
                <td class="table-data"><input type="text" name="department" /></td>
            </tr>
            <tr>
                <td class="table-data">Phone Number</td>
                <td class="table-data"><input type="text" name="ph" /></td>
            </tr>
            <tr>
                <td colspan="2" class="table-data"><input type="submit" name="submit1" ></td>
            </tr>
        </table></center>
		<input type="checkbox" name="" checked="checked">
        <span class="closebtn"></span>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="#">Department</a></li>
            <li><a href="staff-administration.php">Staff</a></li>
            <li><a href="#">Gallery</a></li>
             <li><a href="signup.html">Create Login Credentials For Staff</a></li>
            
        </ul>
	</body>
</html>

       