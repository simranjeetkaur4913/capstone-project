<?php
session_start();
if(isset($_SESSION['username'])){
	echo "<a style='width:100px;padding:10px;box-sizing:border-box;margin-left:50px;margin-top:100px;' href ='logout.php'><input type=button value=logout name=logout style='background-color:#F07114;padding:10px;margin-top:10px'></a>";
	//echo "<h3>".$_SESSION['username']."</h3>";
	//echo "<br><a href='login.php'><input type=button name=back value=back></a><br>";
	//echo "<br><a href = 'logout.php'><input type=button value=logout name=logout></a>";
}
else{
	echo "<script>location.href='login.php'</script>";
}
?>   
<?php
		require('mysqli_connect.php');
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{5,20}$/';
$flag="false";
      if($_SERVER['REQUEST_METHOD']=='POST'){
	if((empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['username']) && empty($_POST['password']))){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location= "signup.php";
     			</script>';
		$flag="false";
		}
	 else{
			    if(!empty($_POST['firstname']) && isset($_POST['firstname']) && preg_match("/^[a-zA-Z ]+$/",$_POST['firstname']) ){
				$firstname = mysqli_real_escape_string($dbc,$_POST['firstname']);
					$flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter firstname having lowercase or uppercase letters only"); 
					window.location= "signup.php";
     			</script>';
				$flag="false";
			}
		  if(!empty($_POST['lastname']) && isset($_POST['lastname']) && preg_match("/^[a-zA-Z ]+$/",$_POST['lastname'])){
				$lastname = mysqli_real_escape_string($dbc,$_POST['lastname']);
			  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter lastname having lowercase or uppercase letters only"); 
					window.location= "signup.php";
     			</script>';
				$flag="false";
			}
			   if(!empty($_POST['username']) && isset($_POST['username']) && filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
				$username = mysqli_real_escape_string($dbc,$_POST['username']);
				   $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter valid email username"); 
					window.location= "signup.php";
     			</script>';
				$flag="false";
			}
			      if(!empty($_POST['password']) && isset($_POST['password']) && preg_match($pattern,$_POST['password'])){
				$password = mysqli_real_escape_string($dbc,$_POST['password']);
					  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter Password having minium 5 character ,speacial character,one uppercase,one digit "); 
					window.location= "signup.php";
     			</script>';
				$flag="false";
			}
		 
	 }
		  if($flag =="true"){
			  $query = mysqli_query($dbc,"INSERT INTO signup(firstname,lastname,username,password) values('$firstname','$lastname','$username','$password')");
	if(!$query){
		echo "error";
	}
	else{
		echo "sucess";
	}
		  }
	
	
}
 ?>

<html>
<head>
<title>Admin Panel-Delta School-Staff</title>
	<link rel="stylesheet" type="text/css" href="css/administration.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    
	</head>
	<body>
            <div class="container-fluid">
              <div class="row" >
                <div class="col-sm-3 contact-form-part">
                    
                </div>
                <div class="col-sm-6 contact-form-part">
                    <div classs="loginpage" >
			<h1 >Sign Up</h1>
            <div class="loginformdecoration" >
                <form action="signup.php" method="post">
			<label>First Name:</label>
		<input type="text" name="firstname" placeholder="First Name"><br><br>
                <label>Last Name:</label>
		<input type="text" name="lastname" placeholder="Last Name"><br><br>
			<label>Username:</label>
		<input type="text" name="username" placeholder="Email"><br><br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="password"><br><br>
					
		<input type="Submit" value="Sign Up" class="contactbtn" >
		
			</form>
            </div>
		
		</div>
                </div>
                <div class="col-sm-3 contact-address-part">
                    
                </div>
              </div>
        </div>
		<input type="checkbox" name="" checked="checked">
        <span class="closebtn"></span>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="contact-admin.php">Contact</a></li>
            <li><a href="staff-administration.php">Staff</a></li>
             <li><a href="signup.php">Create Login Credentials For Staff</a></li>
            
        </ul>
	</body>
</html>


       