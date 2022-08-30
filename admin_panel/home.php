<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_index</title>
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
        .videoes{
                    position:fixed;
                    left: 0;
                    top: 0;
                    min-width: 100%;
                    min-height: 100%;
                    height: auto;
                    width: auto;
                    z-index: -999;
                    opacity: 1;
                    background-size: cover;
                }
</style>
        <section id="home">
            <div class="container-fluid">
              
                <video muted autoplay loop class="videoes" type="video/mp4" >
                <source src="../image/cine2.mp4">
                </video>
                <nav>
                    <h1>Auto Solutions</h1>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index_car_info.php">Cars information</a></li>
                        <li><a href="payment_info.php">Payment information</a></li>
                        <li><a href="emp.php">Employee</a></li>
                        <li><a href="profile.php" tooltip="logout"><i class="fa fa-user" style="font-size:20px;margin-right:8px;"></i>Logout</a></li>
                    </ul>
                </nav>
                <div class="c1">
                    <p style="text-transform:capitalize">Welcome To The Admin Panel</p>
                    <button><a href="signin.php" style="color:black;font-size:15px;font-weight:bold"><i class="fa fa-plus" style="margin-right:7px;font-size:20px;"></i>ADD ADMIN</a></button>
                </div>
                

            </div>
        </section>
        <section id="footer">
        <footer>
            <div class="content">
                <div class="top" style="display:flex;justify-content: space-between;">
                    <div class="logo-details">
                        <span class="logo_name"><i class="fa fa-car" style="margin-right: 20px;"></i>Auto Solution</span>
                    </div>
                    <div class="media-icons">
                        <a href="https://www.facebook.com/PARTHILSAVALIYA3132/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/+917990553100"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://Telegram.me/Parthil_20"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/parthil.py/"><i class="fab fa-instagram"></i></a>
                        <a href="https://parthil-savaliya.github.io"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="itm" style="display: flex;justify-content:space-between;">
                    
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12784.442943884993!2d72.88471893764888!3d21.21623553545286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f1a659ac533%3A0x288d34593e7bc86c!2sVD%20Illustration!5e0!3m2!1sen!2sin!4v1629299135378!5m2!1sen!2sin" style="border:0;width: 120%;height: 110%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>      
                    <div class="contact">
                        <h5>CONTACT US</h5><br>
                        <i class="fa fa-home" style="margin-right: 20px;"></i><a style="font-size: 15PX;" class="text-dark">20 Krushnakunj society motavarachha surat</a>
                        <br><hr>
                        <i class="fa fa-phone" style="margin-right: 20px;"></i><a href="tel:+917990553100" style="font-size: 15PX;" class="text-dark">+91 7990553100</a>
                        <br><hr>
                        <i class="fa fa-envelope" style="margin-right: 20px;"></i><a href="#" style="font-size: 15PX;" class="text-dark">parthilsavaliya20@gmail.com</a>
                    </div>
                    <div class="about">
                        <h5>ABOUT</h5><br>
                        <a style="font-size: 15PX;" class="text-dark">Company Information</a>
                        <br><hr>
                        <a style="font-size: 15PX;" class="text-dark">Press Center</a>
                        <br><hr>
                        <a style="font-size: 15PX;" class="text-dark">Contact HR</a>
                    </div>
                    <div class="legal">
                        <h5>LEGAL</h5><br>
                        <a style="font-size: 15PX;" class="text-dark">Privacy Policy</a>
                        <br><hr>
                        <a style="font-size: 15PX;" class="text-dark">Terms & condition</a>
                        <br><hr>
                        <a style="font-size: 15PX;" class="text-dark">Legal Information</a>
                    </div>
                </div><br><br><br>
              <p style="text-align: center;font-size: 15px;" class="text-dark">All Rights Are Reserved By AutoSolutions ❤️</p>
          </footer>
        
    </section>
    <style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }
      
      #myBtn:hover {
        background-color: red;
        box-shadow: 0px 15px 20px rgba(231, 71, 36, 0.4);
      }
      </style>
    
      
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-hand-pointer" style="font-size:20px;"></i></button>
      
      <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
</body>
</html>