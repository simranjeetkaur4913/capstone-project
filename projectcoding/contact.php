<?php
require('C:\xampp\htdocs\capstoneproject\projectcoding\php\mysqli_connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){

      if(!empty($_POST['name']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['name']) ){
          $name=$_POST['name'];
      }
         else{
              echo '<script type="text/Javascript">
            alert("Please fill the name having lowercase or uppercase letters only included or excluded space !")
            window.location="contact.php"
            </script>';
         }
    if(!empty($_POST['phone']) &&  preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['phone'])){
        $phone = $_POST['phone'];
    }
       else{
           
              echo '<script type="text/Javascript">
            alert("Please fill the phone having order 000-000-0000 ");
            window.location="contact.php"
            </script>';
       }
$phone=$_POST['phone'];
    if(!empty($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email=$_POST['email'];
    }
     else{
              echo '<script type="text/Javascript">
            alert("Please fill the proper email ")
            window.location="contact.php"
            </script>';
         }

$city=$_POST['city'];
    if(!empty($_POST['city']) && preg_match("/^[a-zA-Z]*$/",$_POST['city']) ){
          $name=$_POST['city'];
      }
    else{
        echo '<script type="text/Javascript">
            alert("Please fill the city having lowercase or uppercase letters only!")
            window.location="contact.php"
            </script>';
    }
$query=mysqli_query($dbc,"INSERT INTO contact(name,phone, email, city) VALUES ('$name','$phone','$email','$city')");
if($query)
    echo '<script type="text/Javascript">
            alert("Successfull")
            window.location="contact.php"
            </script>';
else
    echo '<script type="text/Javascript">
            alert("Error")
            window.location="contact.php"
            </script>';
}
?>
<html>
    <head>
        <title>Delta English School</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header-part">
            Get In Touch With Us: +1 2269728272
        </div>
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
            <a href="about.html">About Us</a>
            <a href="staff.php">Staff</a>
            <a href="department.html">Department</a>
            <a href="video.php">Our Gallery</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.html">Admin Login</a>
        </div>
        <div class="contact-top">Contact Us</div>
        <div class="contact-location-part">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2899.400237030555!2d-80.40736348520115!3d43.38956327913125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b9018e9e89adf%3A0x2043c24369ede07e!2sConestoga%20College!5e0!3m2!1sen!2sca!4v1604624043130!5m2!1sen!2sca" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 contact-form-part">
                    <div class="contact-form-holder">
                        <form action="contact.php" method="POST">
                            <h3>Get A Call Back From Us:</h3>
                             <input type="text" name="name" placeholder="Your Name Here"  class="textboxes"/><br><br>
                             <input type="text" name="phone" placeholder="Your Contact Number, e.g(xxx-xxx-xxxx)"  class="textboxes"/><br><br>
                             <input type="text" name="email" placeholder="Your Email Address Here" class="textboxes"/><br><br>
                            <input type="text" name="city" placeholder="Your City Here" class="textboxes"/><br><br>
                             <input type="submit" name="submit" value="Submit Now"  class="contactbtn"/><br><br>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 contact-address-part">
                    <div class="contact-address-holder"><h3 style="text-align:center;padding-top:30px;box-sizing:border-box;">ADDRESS</h3><center><p style="font-size:12px;color:#000000;">76 Knotty Pine Avenue, Cambridge, Ontario, Canada</p></center><br>
                    <h3 style="text-align:center;padding-top:20px;box-sizing:border-box;">Contact Numbers</h3><center><p style="font-size:12px;color:#000000;padding-bottom:40px;box-sizing:border-box;">+1 2269728272, +1 6429728253<br>+1 2269728272, +1 6429728253+1<br>+1 2269728272, +1 6429728253<br>+1 2269728272, +1 6429728253</p></center>
                    </div>
                </div>
              </div>
        </div>
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