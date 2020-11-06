   <?php
       if($_SERVER['REQUEST_METHOD']=='POST'){
		if((empty($_POST['username']) && empty($_POST['password']) )){
			echo '<script type="text/JavaScript">  
     				alert("fill the fields"); 
					window.location= "login.html";
     			</script>';
		}
		   else{
			   if(!empty($_POST['username']) && isset($_POST['username'])){
				$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
			}
			else{
				echo '<script type="text/JavaScript">  
     				alert("Please enter username"); 
					window.location= "login.html";
     			</script>';
			}
		   }
	   }
        ?>