<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars_info</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <?php 
            $conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
            $Cid = $_GET['Cid'];
            $q = "select * from car_info where Cid = $Cid";
            $data = mysqli_query($conn,$q) or die("record not found");
            while($row = mysqli_fetch_array($data)){
        ?>
       
        <div class="banner">
              <h1 class="display-3" style="text-align:center;font-family:verdana;"><?php echo $row['Name']; ?></h1>
              <h3 class="display-6" style="text-align:center;font-family:verdana;"><?php echo $row['Model']; ?></h3>
        </div><br>
        <div class="box" style="box-sizing:border-box;width:65%;">
            <img src="./admin_panel/cars_detail/<?php echo $row['Image'] ?>" style="width:100%;align-items:center;position:relative;left:25%;" alt="mustang">
        </div><br>
       
        <div class="box2">
        <table class="table table-dark table-hover table-striped text-center" style="border-radius:10px;" cell-padding="2">
            <tr>
              <th scope="row">Name</th>
              <th scope="row">BodyType</th>
              <th scope="row">Color</th>
              <th scope="row">Engine</th>
              <th scope="row">Fuel</th>
              <th scope="row">Brand</th>
              <th scope="row">Model</th>
              <th scope="row">Mileage</th>
              <th scope="row">Seating capacity</th>
              <th scope="row">Fuel capacity</th>
              <th scope="row">Specification</th>
              <th scope="row">Price</th>
          </tr>
          <tr>
              <td><?php echo $row['Name'] ?></td>
              <td><?php echo $row['Car_type'] ?></td>
              <td><?php echo $row['Color'] ?></td>
              <td><?php echo $row['Engine'] ?></td>
              <td><?php echo $row['Fuel'] ?></td>
              <td><?php echo $row['Brand'] ?></td>
              <td><?php echo $row['Model'] ?></td> 
              <td><?php echo $row['Mileage'] ?></td>
              <td><?php echo $row['Seating_cap'] ?></td>
              <td><?php echo $row['Fueltank'] ?></td>
              <?php } ?>
              <?php 
                  $conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
                  $Cid = $_GET['Cid'];
                  $q = "select * from cars where Cid = $Cid";
                  $data = mysqli_query($conn,$q) or die("record not found");
                  while($row = mysqli_fetch_array($data)){
              ?>
              <td><?php echo $row['Specification'] ?></td>
              <td><?php echo $row['Price'] ?></td>
              <?php }?>
          </tr>
          
          
       
        </table>
        
        </div>
    </div>
</body>
</html>