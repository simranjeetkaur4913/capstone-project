
<html>
    <head>
        <title>
            Delta English School --Staff
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" type="text/css" href="css/about.css">
        <link rel = "stylesheet" type="text/css" href="css/main.css">
        <link rel = "stylesheet" type="text/css" href="css/staff.css">
		<script src="javascript/accessibilty.js"></script>


    </head>
    <body>
        <div class="container-fluid">
  			<div class="row" style="background-color:#F07114; color:#FAFAFA;padding-left:0px;padding-top:20px;padding-bottom:20px;box-sizing:border-box">
    				<div class="col-sm-6">
						<span style="font-size:20px;font-weight:bold">DELTA&nbsp;&nbsp; ENGLISH&nbsp;&nbsp;   SCHOOL</span>
             		</div>
				<div class="col-sm-6">
					<input type="button" onclick="chBackcolor();" value="Dark" style="margin-left: 25%" id="btnback">
				   <input type="button" onclick="originalcolor();" value="Original" id="btnback1">
				   <input type="button" onclick="fontsmall();" value="A-" id="btnback2">
				   <input type="button" onclick="fontnormal();" value="A" id="btnback3">
				   <input type="button" onclick="fontlarge();" value="A+" id="btnback4">
				 </div>
      
		   </div>
</div>
        <div class="small-menu-container">
            <label for="small-menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <input type="checkbox" id="small-menu" />
        <div class="nav" id="navchange">
           <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="staff.php">Staff</a>
            <a href="department.php">Department</a>
            <a href="video.php">Our Gallery</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.php">Admin Login</a>
        </div>
        
        <div class = "part0"> Staff Directory </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" style="padding-top:30px;padding-bottom:30px; box-sizing:border-box;">
                    <center>
                        <div class="chairman">
                            <img src="images/gurmeet.jpg" width="100%" height="200px" alt="Gurmeet Singh" style="border-radius:100%;">
                            <div style="padding-top:10px; box-sixing:border-box;color:#555555;font-weight:bold;">
                                Gurmeet Singh (CHAIRMAN)
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-4" style="padding-top:30px;padding-bottom:30px; box-sizing:border-box;">
                    <center>
                        <div class="chairman">
                            <img src="images/Rajdeep.jpg" width="100%" height="200px" alt="Rajdeep Kaur" style="border-radius:100%;">
                            <div style="padding-top:10px; box-sixing:border-box;color:#555555;font-weight:bold;">
                                Rajdeep Kaur (PRINCIPAL)
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-4" style="padding-top:30px;padding-bottom:30px; box-sizing:border-box;">
                    <center>
                        <div class="chairman">
                            <img src="images/simran.jpg" width="100%" height="200px" alt="Simranjeet Kaur" style="border-radius:100%;">
                            <div style="padding-top:10px; box-sixing:border-box;color:#555555;font-weight:bold;">
                                Simranjeet (CO-ORDINATOR)
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-6">
                    <center>
                        <div>
                            <h3> Full Time Employee Directory </h3> 
        <h4> Please fill out first name of staff member to see the detailed information </h4>
        <div style="margin-bottom:50px;padding-left:30px;padding-right:30px;border:2px solid #F07114">
            <form action="staff.php" method="post">
                <label>Name:</label>
                <input type="text" name="firstname" style="margin:10px"><br>
			         <!--<label>Email:</label>
                    <input type="text" name="email" ><br><br>-->
			    <input type="submit" value="Search" class="contactbtn">
            </form>
        </div>
        
        <div class="container-fluid">
            <?php
            require('mysqli_connect.php');
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if(!empty($_POST['firstname']) && isset($_POST['firstname']) && preg_match("/^[a-zA-Z]*$/",$_POST['firstname'])){
				$firstname=mysqli_real_escape_string($dbc,$_POST['firstname']);
                }
                else
                {
                    echo '<script type="text/JavaScript">  
     				alert("Please enter firstname having lowercase or uppercase letters only"); 
					window.location.pathname= "capstoneproject/projectcoding/staff.php";
                    </script>';
                }
                $q="select * from staff where firstname='$firstname'";
                $s=@mysqli_query($dbc,$q) or die(mysqli_error($dbc));
                if($row = mysqli_fetch_array($s))
                {
					echo '<div class="container-fluid">
					<table width="100%" height="auto" border="2px" style="margin-bottom:30px;text-align:center" >
						 <tr>
						    <th>First Name</th>
						    <th>Last Name</th>
							 <th>Email</th>
							<th> Department</th>
							 <th>Phone</th>
						 </tr>
						 <tr><td>'
						 .$row['firstname'].' </td><td>'
                        .$row['lastname'].'</td><td>'
                        .$row['email'].'</td><td>'
                        .$row['department'].'<br></td><td>'
                        .$row['phone'].'</td><tr>
						 </table>
					</div>';
                }
                else
                {
                    echo 'no matching data available';
                }
            }
            ?>
        </div>
                        </div>
                    </center>
                </div>
                <div class="col-sm-3" style="padding-top:30px;padding-bottom:30px; box-sizing:border-box;">
                    
                </div>
            </div>
        </div>
        

       
        
        
      
		
<div class="footer-upper-part">
            <center>Address: 76, Knotty Pine Ave, Cambridge</center>
        </div>
        <div class="container-fluid">
              <div class="row footer-main">
                <div class="col-sm-3 footer-inner-1"><h5 style="color:#F07114;font-weight:bold">Who We Are ?</h5>
                    <p style="font-size:11px;text-align:justify;color:#555555">Delta English School is a name you can relia upon. We are proving our services since 2008. we have a dedicated team and every team member is well qualified and experienced in his/her field. We are provding very good result every session and we also get appreciation from parents as well as from other educational bodies. Our school has world class infrastructure. We always organize different type of activities and programs for students which prove very benificial for their overall growth.</p>
                </div>
                <div class="col-sm-3 footer-inner-2"><h5 style="color:#F07114;font-weight:bold">Visit Here:</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">Who We Are?</a></li>
                        <li><a href="department.php">Department</a></li>
                        <li><a href="video.php">Our Gallery</a></li>
                        <li><a href="pay.php">Visit for payment Here</a></li>
                        <li><a href="staff.php">Know About Our Staff</a></li>
                        <li><a href="login.php">Admin Login</a></li>
                    </ul>
                    
                </div>
                <div class="col-sm-3 footer-inner-3"><h5 style="color:#F07114;font-weight:bold">Our Location:</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.400050548506!2d-80.40736348508851!3d43.38956717745703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9018e9e89adf%3A0x2043c24369ede07e!2sConestoga%20College!5e0!3m2!1sen!2sca!4v1603666155898!5m2!1sen!2sca" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-3 footer-inner-4"><h5 style="color:#F07114;font-weight:bold">Expect Call From Us:</h5>
                    <form action="callreq.php" method="post">
                        <input type="text" name="visitors" placeholder="Name" style="padding:6px;box-sizing:border-box;width:100%;border-radius:30px;"><br><br>
                        <input type="text" name="username" placeholder="E-mail" style="padding:6px;box-sizing:border-box;width:100%;border-radius:30px;"><br><br>
                        <input type="submit" value="Send Now" class="btn btn-danger">
                    </form>
                </div>
              </div>
        </div>
        <div class="footer-lower-part">
            <center>Created By: Conestoga College Students</center>
        </div>
    </body>
</html>