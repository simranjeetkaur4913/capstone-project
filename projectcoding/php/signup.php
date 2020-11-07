   <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){
		if((empty($_POST['username']) && empty($_POST['password']) )){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
		}
		   else{
			   if(!empty($_POST['username']) && isset($_POST['username'])){
				echo $_POST['username']."<br/>";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter username"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
			      if(!empty($_POST['password']) && isset($_POST['password'])){
				echo $_POST['password']."<br/>";
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter Password"); 
					window.location.pathname= "capstoneproject/projectcoding/signup.html";
     			</script>';
			}
			   
		   }
	   }
        ?>