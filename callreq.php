<?php
		require('mysqli_connect.php');
$flag="false";
 if($_SERVER['REQUEST_METHOD']=='POST'){
	 if((empty($_POST['visitors']) && empty($_POST['visitors']))){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location= "index.php";
     			</script>';
		$flag="false";
		}
	 else{
			    if(!empty($_POST['visitors']) && isset($_POST['visitors']) && preg_match("/^[a-zA-Z ]+$/",$_POST['visitors']) ){
				$visitors = mysqli_real_escape_string($dbc,$_POST['visitors']);
					$flag="true";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter visitors having lowercase or uppercase letters only"); 
					window.location= "index.php";
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
					window.location= "index.php";
     			</script>';
				$flag="false";
			}
	 }
 if($flag =="true"){
			  $query = mysqli_query($dbc,"INSERT INTO contactreq(visitors,username) values('$visitors','$username')");
	if(!$query){
		echo '<script type="text/JavaScript">
		            alert("error");
     				window.location= "index.php";
     			</script>';
		
	}
	else{
		echo '<script type="text/JavaScript">
					alert("success");
					window.location= "index.php";
     			</script>';
	}
		  
 }
 }
	

 ?>