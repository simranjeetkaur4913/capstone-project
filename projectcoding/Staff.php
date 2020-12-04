
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
        <link rel = "stylesheet" type="text/css" href="about.css">
        <link rel = "stylesheet" type="text/css" href="main.css">
        <link rel = "stylesheet" type="text/css" href="staff.css">


    </head>
    <body>
        <div class="header-part"> Get In Touch With Us: +1 2269728272 </div>
        <div class="small-menu-container">
            <label for="small-menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <input type="checkbox" id="small-menu" />
        <div class="nav">
            <a href="home.html">Home</a>
            <a href="about.php">About Us</a>
            <a href="staff.php">Staff</a>
            <a href="department.html">Department</a>
            <a href="video.php">Our Gallery</a>
            <a href="contact.php">Contact Us</a>
            <a href="signup.html">Admin Login</a>
        </div>
        
        <div class = "part0"> Our School Staff Directory </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 " ><div style ="text-align: center"> <h3>Chairman</h3> </div> </div>
                <div class="col-sm-4 " ><div style ="text-align: center"> <h3> Pricipal </h3> </div> </div>
                <div class="col-sm-4 " ><div style ="text-align: center"> <h3> Vice Principal </h3> </div> </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 aboutcircle" ><div class = "aboutgraphics"> <img src = "images/gurmeet.jpg" alt = "Chairman" height= "260px" width = "100%" style= "border-radius: 100%"> </div></div>
                <div class="col-sm-4 aboutcircle"> <div class = "aboutgraphics"> <img src = "images/Rajdeep.jpg" alt = "Vice Chairman" height= "260px" width = "100%" style= "border-radius: 100%"></div></div>
                <div class="col-sm-4 aboutcircle"> <div class = "aboutgraphics"> <img src = "images/simran.jpg" alt = "CEO" height= "260px" width = "100%" style= "border-radius: 100%"></div> </div>
            </div>
        </div>
       
        <div> <h3> Full Time Employee Directory </h3> </div> 
        <div> <h4 class = "p1"> Please fill out first name of staff member to see the detailed information </h4></div>
        <div class="loginformdecoration" style="margin-bottom:50px;padding-left:30px;padding-right:30px">
            <form action="staff.php" method="post">
                <label>Name:</label>
                <input type="text" name="firstname" style="margin:10px"><br>
			         <!--<label>Email:</label>
                    <input type="text" name="email" ><br><br>-->
			    <input type="submit" value="Search">
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
                    echo '<div class="container-fluid">'
                        .$row['firstname'].'<br>'
                        .$row['lastname'].'<br>'
                        .$row['email'].'<br>'
                        .$row['department'].'<br>'
                        .$row['phone'].'<br>
                        </div>';
                }
                else
                {
                    echo 'no matching data available';
                }
            }
            ?>
            <!--<div class="row">
            <div class="col-sm-4 StaffImage" > <img src = "images/dummypic.jpg" height = "250px" width = "100%" style="border-radius:100%"></div>
            <div class="col-sm-4 StaffImage"><img src = "images/dummypic.jpg" height = "250px" width = "100%" style="border-radius:100%"></div>
            <div class="col-sm-4 StaffImage"><img src = "images/dummypic.jpg" height = "250px" width = "100%" style="border-radius:100%"></div>
            </div>-->
        </div>
        
       <!-- <div class = "staff"> 
            <table height = "400px" width = "100%" border="1px">
                <tr> 
                    <th> NAME</th>
                    <th> CONTACT INFORMATION</th>
                    <th> QUALIFICATION</th>
                    <th> DESIGNATION</th>
                    <th> DEPARTMENT</th>
                </tr>  
                <tr> Management </tr>
                <tr> 
                    <td> John Wick</td>
                    <td> +1 236 982 2667</td>
                    <td> B.Ed, MA (Economics)</td>
                    <td> Principal</td>
                    <td> Management</td>
                </tr> 
                <tr> 
                    <td> Gurmeet Singh</td>
                    <td> +1 677 765 8976</td>
                    <td> BCA, DPWD, MSC</td>
                    <td> Computer Teacher</td>
                    <td> IT</td>
                </tr>  
                <tr> 
                    <td> Rajdeep Kaur</td>
                    <td> +1 645 655 2345</td>
                    <td> Btech, Mtech, MPhil</td>
                    <td> Computer Teacher</td>
                    <td> IT</td>
                </tr>  
                <tr> 
                    <td> Simranjeet Kaur</td>
                    <td> +1 226 455 2387</td>
                    <td> BA, MA (Music)</td>
                    <td> Music Teacher</td>
                    <td> Arts</td>
                </tr>
                <tr> 
                    <td> Simranjeet Kaur</td>
                    <td> +1 226 455 2387</td>
                    <td> BA, MA (Music)</td>
                    <td> Music Teacher</td>
                    <td> Arts</td>
                </tr> 
                <tr> 
                    <td> Simranjeet Kaur</td>
                    <td> +1 226 455 2387</td>
                    <td> BA, MA (Music)</td>
                    <td> Music Teacher</td>
                    <td> Arts</td>
                </tr> 
                <tr> 
                    <td> Simranjeet Kaur</td>
                    <td> +1 226 455 2387</td>
                    <td> BA, MA (Music)</td>
                    <td> Music Teacher</td>
                    <td> Arts</td>
                </tr> 
            </table>
</div>
    
 <div class="col-sm-3 contact-address-part">
                    
                </div> -->
              
        
		
<div class="footer-upper-part">
<center>Address: 76, KNOTTY PINE AVE, CAMBRIDGE, ONTARIO, CANADA</center>
</div>
<div class="container-fluid">
              <div class="row footer-main">
                <div class="col-sm-3 footer-inner-1"><h5 style="color:#EBDC87">Who We Are ?</h5>
                    <p style="font-size:11px;text-align:justify;color:#FAF3DD">Delta Englisgh School is a name you can relia upon. We are proving our services since 2008. we have a dedicated team and every team member is well qualified and experienced in his/her field. We are provding very good result every session and we also get appreciation from parents as well as from other educational bodies. Our school has world class infrastructure. We always organize different type of activities and programs for students which prove very benificial for their overall growth.</p>
                </div>
                  
                <div class="col-sm-3 footer-inner-2"><h5 style="color:#EBDC87">Visit Here:</h5>
                    <ul>
                        <li><a>Home</a></li>
                        <li><a>Who We Are?</a></li>
                        <li><a>Department</a></li>
                        <li><a>Our Gallery</a></li>
                        <li><a>Get In Touch With Us</a></li>
                        <li><a>Know About Our Staff</a></li>
                        <li><a>Admin Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-inner-3"><h5 style="color:#EBDC87">Our Location:</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.400050548506!2d-80.40736348508851!3d43.38956717745703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9018e9e89adf%3A0x2043c24369ede07e!2sConestoga%20College!5e0!3m2!1sen!2sca!4v1603666155898!5m2!1sen!2sca" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-3 footer-inner-4"><h5 style="color:#EBDC87">Who We Are ?</h5></div>
              </div>
        </div>
        <div class="footer-lower-part">
            <center>Created By: Conestoga College Students</center>
        </div>
    </body>
</html> 