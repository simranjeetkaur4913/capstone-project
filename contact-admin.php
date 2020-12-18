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
        <center><h2>Contact Page</h2></center>
         <table>
            <thead>
                <tr>
					<th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>City</th>
                </tr>
                </thead>
            <tbody>
                        <?php
						require('mysqli_connect.php');
						 $q = "select * from contact";
						 $query = mysqli_query($dbc,$q);
						  while($res = mysqli_fetch_array($query)){
						 
						 
						 ?>
            
                <tr>
                   <td><?php echo $res['id']; ?></td>
						    <td><?php echo $res['name']; ?></td>
						    <td><?php echo $res['phone']; ?></td>
							 <td><?php echo $res['email']; ?></td>
							<td> <?php echo $res['city']; ?></td>
							
							 
                </tr>
                
            
              <?php
						 
						  }
						 ?>
          
            </tbody>
			 <table>
				 <center><h2>Footer Contacts</h2></center>
            <thead>
                <tr>
					<th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    
                </tr>
                </thead>
            <tbody>
                        <?php
						
						 $q = "select * from contactreq";
						 $query = mysqli_query($dbc,$q);
						  while($res = mysqli_fetch_array($query)){
						 
						 
						 ?>
            
                <tr>
                   <td><?php echo $res['id']; ?></td>
						    <td><?php echo $res['visitors']; ?></td>
						    <td><?php echo $res['username']; ?></td>
							
							 
                </tr>
                
            
              <?php
						 
						  }
						 ?>
          
            </tbody>
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


       