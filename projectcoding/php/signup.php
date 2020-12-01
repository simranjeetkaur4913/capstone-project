   <?php
		require('C:\xampp\htdocs\capstoneproject\projectcoding\php\mysqli_connect.php');
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
      if($_SERVER['REQUEST_METHOD']=='POST'){
	if((empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['username']) && empty($_POST['password']))){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
		}
	 else{
			    if(!empty($_POST['firstname']) && isset($_POST['firstname']) && preg_match("/^[a-zA-Z]*$/",$_POST['firstname']) ){
				$firstname = mysqli_real_escape_string($dbc,$_POST['firstname']);
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter firstname having lowercase or uppercase letters only"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
		  if(!empty($_POST['lastname']) && isset($_POST['lastname']) && preg_match("/^[a-zA-Z]*$/",$_POST['lastname'])){
				$lastname = mysqli_real_escape_string($dbc,$_POST['lastname']);
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter lastname having lowercase or uppercase letters only"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
			   if(!empty($_POST['username']) && isset($_POST['username']) && filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
				$username = mysqli_real_escape_string($dbc,$_POST['username']);
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter valid email username"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
			      if(!empty($_POST['password']) && isset($_POST['password']) && preg_match($pattern,$_POST['password'])){
				$password = mysqli_real_escape_string($dbc,$_POST['password']);
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter Password having minium 5 character ,speacial character,one uppercase,one digit "); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
		 
	 }
	$query = mysqli_query($dbc,"INSERT INTO signup(firstname,lastname,username,password) values('$firstname','$lastname','$username','$password')");
	if(!$query){
		echo "error";
	}
	else{
		echo "sucess";
	}
	
}
     
        ?>