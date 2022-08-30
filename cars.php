<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cars</title>
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<style>
 
    body{
    background: url(1112.jpg);
    background-position:center;

    }
    button {
    padding: 1em 1.4em;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #000;
    background-color: #fff;
    border: none;
    border-radius: 10px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
 
 
   }
   
   button:hover {
    background-color: #2EE59D;
    box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
    color: #fff;
    transform: translateY(-7px);
   }
   
   button:active {
    transform: translateY(-1px);
   }
   button a{
    color: black;
    text-decoration: none;
   }
   button a:hover{
    color: #fff;
    text-decoration: none;
    
   }
   

/* Glassmorphism card effect */
/* .card {
    backdrop-filter: blur(5px) saturate(180%);
    -webkit-backdrop-filter: blur(5px) saturate(180%);
    background-color: rgba(23, 26, 31, 0.66);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
}
.card:hover{
    background-color: #2EE59D;
    box-shadow: 0px 20px 20px rgba(46, 229, 157, 0.4);
}
.cox{

} */



.container {
  display : flex;
  width:25%;
  align-items : center;
  justify-content : center;
  flex-wrap:wrap;
  padding : 30px;  
}

.container .card {
  position: relative;
  max-width : 300px;
  height : 215px;  
  backdrop-filter: blur(5px) saturate(180%);
    -webkit-backdrop-filter: blur(5px) saturate(180%);
    background-color: rgba(23, 26, 31, 0.66);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
  margin : 30px 10px;
  padding : 20px 15px;
  transition : 0.3s ease-in-out;
  border-radius : 15px;
}
.container .card:hover {
  height : 350px;    
}


.container .card .image {
  position : relative;
  width : 260px;
  height : 260px;
  
  top : -40%;
  left: 6px;
  box-shadow : 0 5px 20px rgba(0,0,0,0.2);
  z-index : 1;
}

.container .card .image img {
  max-width : 100%;
  border-radius : 15px;
}

.container .card .content {
  position : relative;
  top : -140px;
  padding : 10px 15px;
  color : #111;
  text-align : center;
  
  visibility : hidden;
  opacity : 0;
  transition : 0.3s ease-in-out;
    
}

.container .card:hover .content {
   margin-top : 30px;
   visibility : visible;
   opacity : 1;
   transition-delay: 0.2s;
  
}
ul li{
  display:inline-block;
  padding:30px;
  list-style:none;
}
ul li a{
  color:white;
  font-size:18px;
  font-weight:bold;
  text-decoration:none;
}
ul li a:hover{
  color:#2EE59D;
}



</style>
<body>
  <nav style="display:flex;justify-content:space-between;color:white;">
    <h1 class="display-4" style="font-weight:bold;">Auto Solutions</h1>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="cars.php">Gallery</a></li>
      <li><a href="index.html?#brand">About</a></li>
      <li><a href="index.html?#footer">Contact Us</a></li>
    </ul>
  </nav><br><br><br>
<div class="i1" style="display: flex;justify-content:space-evenly;flex-wrap:wrap;margin:5px;">
<?php 
    
    $conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
    
    if(isset($_POST['p1']))
    {
      $cname = $_POST['cname'];	
      $specification = $_POST['specification'];
      $price = $_POST['price'];
      $model = $_POST['model'];
      $fuel = $_POST['fuel'];
      $brand = $_POST['brand'];
      $q = "select * from cars where Model = '$model%' and Fuel = '$fuel%' or Brand = '$brand' and Price like '$price%' ";
    }
    else
    {
      $q = "select * from cars";
    }
          // $q = "select * from cars where Name like '$cname%' or Specification like '$specification%' or Price like '$price%' or Model like '$model%' or Fuel like '$fuel%' or Brand like '$brand%'";
       
          $data = mysqli_query($conn,$q) or die("record not found");
          while($row = mysqli_fetch_array($data)){         
?>
                  
                  <!-- <div class="card" style="box-sizing: border-box;width:30%;color:black;background-color: rgba(240, 248, 255, 0.178);padding: 20px;border-radius:10px;margin:10px;"> 
                  <img src="./admin_panel/upload/<?php echo $row['Image'] ?>" alt="amg" style="border-radius: 10px;width: 100%;">
                      <h3 style="color:white;text-transform:capitalize;">Name :-</h3>
                      <h3 style="color:white;text-transform:capitalize;"><?php echo $row['Name'] ?></h3>
                      <h4 style="color:white;text-transform:capitalize;"><?php echo $row['Specification'] ?></h4>
                      <h5 style="color:white;text-transform:capitalize;">Fuel Type :-</h5>
                      <h5 style="color:white;text-transform:capitalize;"><?php echo $row['Fuel'] ?></h5>
                      <h5 style="color:white;text-transform:capitalize;"><?php echo $row['Model'] ?></h5>
                      <h5 style="color:white;text-transform:capitalize;"><?php echo $row['Brand'] ?></h5>
                      <h5 style="color:white;text-transform:capitalize;">Price :- <?php echo $row['Price'] ?></h5>
                      <div class="button" style="display:flex;justify-content:space-evenly;">
                      <button style="text-transform:capitalize;width:45%;"><a href="cars_info.php?Cid=<?php echo $row['Cid']?>">Know more </a><i class="fa fa-download"style="margin-left:5px;"></i></button>
                      <button style="text-transform:capitalize;width:45%;"><i class="fa fa-shopping-cart"style="margin-left:5px;"></i><a href="Payment.php?Cid=<?php echo $row['Cid']?>">Buy Now</a></button>
                      </div>
                  </div> -->
                  <div class = container>
                      <div class = card>
                        <div class = image>
                          <img href = "#" src ="./admin_panel/upload/<?php echo $row['Image']?>">
                          <div style="display:flex;justify-content:center;">
                          <h3 style="color:white;text-transform:capitalize;margin-right:10px;"><?php echo $row['Name'] ?></h3>
                          <h3 style="color:white;margin:0;"><?php echo $row['Model'] ?></h3>
                          </div>
                        </div>
                        <div class = content>
                          <p style="font-size:15px;color:white;margin:0;"><?php echo $row['Specification'] ?></p>
                          <p style="font-size:15px;color:white;margin:0;"><?php echo $row['Fuel'] ?></p>
                          <p style="font-size:15px;color:white;margin:0;"><?php echo $row['Model'] ?></p>
                          <p style="font-size:15px;color:white;margin:0;"><?php echo $row['Brand'] ?></p>
                          <p style="font-size:15px;color:white;margin:0;"><?php echo $row['Price'] ?></p>
                          <div class="btn" style="display:flex;justify-content:space-between;">
                          <button style="text-transform:capitalize;margin-right:7px;"><a href="cars_info.php?Cid=<?php echo $row['Cid']?>">Know more </a><i class="fa fa-download"style="margin-left:5px;"></i></button>
                          <button style="text-transform:capitalize;"><i class="fa fa-shopping-cart"style="margin-left:5px;"></i><a href="Payment.php?Cid=<?php echo $row['Cid']?>">Buy Now</a></button>
                          </div>
                        </div>
                      </div>    
                    </div>
                  
            <?php } ?>
            </div>
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