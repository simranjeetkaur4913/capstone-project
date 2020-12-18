 <?php 
require('C:\xampp\htdocs\capstoneproject\projectcoding\php\mysqli_connect.php');
session_start();
if(isset($_SESSION['username'])){
	echo "<a style='width:100px;padding:10px;box-sizing:border-box;margin-left:50%;margin-top:10px;' href ='logout.php'><input type=button value=logout name=logout></a>";
	//echo "<h3>".$_SESSION['username']."</h3>";
	//echo "<br><a href='login.php'><input type=button name=back value=back></a><br>";
	//echo "<br><a href = 'logout.php'><input type=button value=logout name=logout></a>";
}
else{
	echo "<script>location.href='.login.php'</script>";
}
?>

<?php
$pattern = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
$flag="false";
      if($_SERVER['REQUEST_METHOD']=='POST'){
	if((empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['department']) && empty($_POST['ph']))){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location.pathname= "staff-administration.php";
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
					window.location.pathname= "staff-administration.php";
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
					window.location.pathname= "staff-administration.php";
     			</script>';
				$flag="false";
			}
			   if(!empty($_POST['email']) && isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				$email = mysqli_real_escape_string($dbc,$_POST['email']);
				   $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter valid email username"); 
					window.location.pathname= "staff-administration.php";
     			</script>';
				$flag="false";
			}
		  if(!empty($_POST['department']) && isset($_POST['department']) && preg_match("/^[a-zA-Z ]+$/",$_POST['department'])){
				$department = mysqli_real_escape_string($dbc,$_POST['department']);
			  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter department having lowercase or uppercase letters only"); 
					window.location.pathname= "staff-administration.php";
     			</script>';
				$flag="false";
			}
			      if(!empty($_POST['phone']) && isset($_POST['phone']) && preg_match($pattern,$_POST['phone'])){
				$phone = mysqli_real_escape_string($dbc,$_POST['phone']);
					  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter phone number like 000-000-0000 "); 
					window.location.pathname= "staff-administration.php";
     			</script>';
				$flag="false";
			}
		 
	 }

				$id = $_GET['id'];
			 if($flag =="true"){
				$q = "UPDATE staff SET id ='$id', firstname ='$firstname',lastname = '$lastname',email = '$email',department = '$department',phone = '$phone' WHERE id = '$id'";
			 $query = mysqli_query($dbc,$q);
				if(!$query){
					echo "error";
				}
				else{
					echo "success";
				}
				header('location:staff-administration.php');
				
        }
	  }
?>
<html>
<head>
<title>Admin Panel-Delta School-Staff</title>
	<link rel="stylesheet" type="text/css" href="css/administration.css">
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
	</head>
	<body>
		<div class="container-fluid">
              <div class="row">
                <div class="col-sm-4 " >  
                </div>
                <div class="col-sm-8" >
                    <center><h2>Staff Page</h2></center>
		
        <center><table height="300px" width="120px" border="1px">
			<form method="post" >
		
            <tr>
                <td class="table-data">First Name</td>
                <td class="table-data"><input type="text" name="firstname" /></td>
            </tr>
            <tr>
                <td class="table-data">Last Name</td>
                <td class="table-data"><input type="text" name="lastname" /></td>
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
                <td class="table-data"><input type="text" name="phone" /></td>
            </tr>
            <tr>
            
            <tr>
                <td colspan="2" class="table-data"><input type="submit" name="submit" ></td>
            </tr>
				</form>
        </table></center>
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
