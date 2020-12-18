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
$pattern = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
$flag="false";
      if($_SERVER['REQUEST_METHOD']=='POST'){
	if((empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['email']) && empty($_POST['department']) && empty($_POST['ph']))){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location= "staff-administration.php";
     			</script>';
		$flag="false";
		}
	 else{
			    if(!empty($_POST['fname']) && isset($_POST['fname']) && preg_match("/^[a-zA-Z ]+$/",$_POST['fname']) ){
				$fname = mysqli_real_escape_string($dbc,$_POST['fname']);
					$flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter firstname having lowercase or uppercase letters only"); 
					window.location= "staff-administration.php";
     			</script>';
				$flag="false";
			}
		  if(!empty($_POST['lname']) && isset($_POST['lname']) && preg_match("/^[a-zA-Z ]+$/",$_POST['lname'])){
				$lname = mysqli_real_escape_string($dbc,$_POST['lname']);
			  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter lastname having lowercase or uppercase letters only"); 
					window.location= "staff-administration.php";
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
					window.location= "staff-administration.php";
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
					window.location= "staff-administration.php";
     			</script>';
				$flag="false";
			}
			      if(!empty($_POST['ph']) && isset($_POST['ph']) && preg_match($pattern,$_POST['ph'])){
				$ph = mysqli_real_escape_string($dbc,$_POST['ph']);
					  $flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter phone number like 000-000-0000 "); 
					window.location= "staff-administration.php";
     			</script>';
				$flag="false";
			}
		 
	 }
		  if($flag =="true"){
			  $query = mysqli_query($dbc,"INSERT INTO staff(firstname,lastname,email,department,phone) values('$fname','$lname','$email','$department','$ph')");
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
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
            table
            {
                background-color:#333;
                color:#eee;
                width:60%;
                margin:auto;
                border-collapse:collapse;
            }
            table, th, td
            {
                border:1px solid #eee;
            }
            th, td
            {
                padding:5px;
            }
            tr:nth-of-type(odd)
            {
                background-color:#777;
            }
            @media only screen and (max-width:800px)
            {
              table
                {
                    width:100%;
                }
              table *
                {
                    display:block;
                }
                thead
                {
                    position:absolute;
                    left:-9999px;
                }
                td:nth-of-type(1):before
                {
                    content: "First Name"  
                }
                td:nth-of-type(2):before
                {
                    content: "Last Name"  
                }
                td:nth-of-type(3):before
                {
                    content: "Job Title"  
                }
                td:before
                {
                    display:inline-block;
                    width:200px;
                    padding-left:5px;
                    
                }
            }
        </style>
	</head>
    
	<body>
        <center><h2>Staff Page</h2></center>
         <table>
             <form action="staff-administration.php" method="post">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Phone Number</th>
                    <th>Submit here</th>
                </tr>
                </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="fname" style="color:black"/></td>
                    <td><input type="text" name="lname" style="color:black" /></td>
                    <td><input type="text" name="email" style="color:black"/></td>
                    <td><input type="text" name="department" style="color:black"/></td>
                    <td><input type="text" name="ph" style="color:black" /></td>
                    <td><input type="submit" name="submit" style="color:black"></td>
                </tr>
                
            </tbody>
             </form>
        </table>
        <!--second table-->
          <table style="margin-top:20px;margin-bottom:40px">
             
            <thead>
                <tr>
                    <th>ID</th>
						    <th>First Name</th>
						    <th>Last Name</th>
							 <th>Email</th>
							<th> Department</th>
							 <th>Phone</th>
							  <th>Delete</th>
							  <th>Update</th>
                </tr>
                </thead>
               <?php
						
						 $q = "select * from staff";
						 $query = mysqli_query($dbc,$q);
						  while($res = mysqli_fetch_array($query)){
						 
						 
						 ?>
            <tbody>
                <tr>
                   <td><?php echo $res['id']; ?></td>
						    <td><?php echo $res['firstname']; ?></td>
						    <td><?php echo $res['lastname']; ?></td>
							 <td><?php echo $res['email']; ?></td>
							<td> <?php echo $res['department']; ?></td>
							 <td><?php echo $res['phone']; ?></td>
							 <td><button style="background-color:White;" ><a href="delete.php?id=<?php echo $res['id'];?>">DELETE</a></button></td>
							   <td><button style="background-color:White"><a href="update.php?id=<?php echo $res['id'];?>">UPDATE</a></button></td>
                </tr>
                
            </tbody>
              <?php
						 
						  }
						 ?>
             
        </table>
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


       