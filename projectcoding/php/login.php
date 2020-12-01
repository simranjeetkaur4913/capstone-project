   <?php
	require('C:\xampp\htdocs\capstoneproject\projectcoding\php\mysqli_connect.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$username=mysqli_real_escape_string($dbc,$_POST['username']);
	$password=mysqli_real_escape_string($dbc,$_POST['password']);
	$q="select * from signup where username='$username' AND password='$password'";
	$s=@mysqli_query($dbc,$q) or die(mysqli_error($dbc));
	$total = mysqli_num_rows($s);
//$username="admin";
//$password="admin";
			if((empty($_POST['username']) && empty($_POST['password']) )){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location.pathname= "capstoneproject/projectcoding/login.html";
     			</script>';
		}
		   else{
			   if(!empty($_POST['username']) && isset($_POST['username'])){
				echo $_POST['username']."<br/>";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter username"); 
					window.location.pathname= "capstoneproject/projectcoding/login.html";
     			</script>';
			}
			      if(!empty($_POST['password']) && isset($_POST['password'])){
				echo $_POST['password']."<br/>";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter Password"); 
					window.location.pathname= "capstoneproject/projectcoding/login.html";
     			</script>';
			}
			   
		   }
		session_start();
			if($total ==1){
		
		$_SESSION['username'] = $username;
		echo "<script>location.href='admin-panal.php'</script>";
	
	}
	
	else{
	        echo "<script>alert('username or password incorrect!')</script>";
	     	echo "<script>location.href='../login.html'</script>";
	}
	}
       ?>