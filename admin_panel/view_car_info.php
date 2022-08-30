
<?php 
	require 'conn.php';
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car_info</title>
</head>

<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
<style>
  #box{
	box-sizing: border-box;
	border-radius: 30px;
	width: 100%;
	position: absolute;
	left: 50%;
	transform: translate(-50%);
  }
  body{
    background:url(111.jpg);
  }
  
</style>
<body>
  
<div class="container-fluid" id="box" ><br><br>
<h1 class="display-3 text-center">STOCK REPORT</h1>
    <br>
    <form name="form1" method="post" action="">
    <div style="box-sizing:border-box;width:25%;display:flex;flex-direction:row;">
	<input type="text" name="p1" id="search" class="form-control fa fa-search" placeholder="Search A Brand Name" style="margin-right:5px">
	<button type="submit" name="search" id="button"  class="btn btn-lg btn-warning"><i class="fa fa-search"></i></button>
</div>
</form>
<div>
<button class = "btn-lg" style="margin:10px 0px;border:none;background: #2EE59D"><i class="fa fa-download" style="margin-right:7px;"></i><a href="stock_pdf.php" style="color:black;text-decoration:none;">Download Report</a></button>
<button class = "btn-lg" style="margin:10px 0px;border:none;background: #2EE59D"><i class="fa fa-car" style="margin-right:7px;"></i><a href="index_car_info.php" style="color:black;text-decoration:none;">Stock</a></button>
</div>
    
    <table class="table table-striped table-dark table-hover">
        <tr>
          <th class="text-center" scope="col">Cid</th>
          <th class="text-center" scope="col">Name</th>
          <th class="text-center" scope="col">Car_type</th>
          <th class="text-center" scope="col">Color</th>
          <th class="text-center" scope="col">Engine</th>
          <th class="text-center" scope="col">Fuel</th>
          <th class="text-center" scope="col">Brand</th>
          <th class="text-center" scope="col">Model</th>
          <th class="text-center" scope="col">Image</th>
          <th class="text-center" scope="col">Mileage</th>
          <th class="text-center" scope="col">Seating_cap</th>
          <th class="text-center" scope="col">Fueltank</th>
          <th class="text-center" scope="col">Transmission</th>
          <th class="text-center" scope="col">Insert</th>
          <th class="text-center" scope="col">Update</th>
          <th class="text-center" scope="col">Delete</th>

        </tr>
        <?php 
				  if(isset($_POST['search']))
				  {
						$s = $_POST['p1'];
						   $q = "select * from car_info where Brand like '$s'";
         
		
				  }
				  else
				  {
						$q = "select * from car_info order by Cid";
				  }
				  $data = mysqli_query($conn,$q) or die("record not found");
				  while($row = mysqli_fetch_array($data)){
			  
        ?>
        <tr>
          <td class="text-center"><?php echo $row['Cid']; ?></td>
          <td class="text-center"><?php echo $row['Name']; ?></td>
          <td class="text-center"><?php echo $row['Car_type']; ?></td>
          <td class="text-center"><?php echo $row['Color']; ?></td>
          <td class="text-center"><?php echo $row['Engine']; ?></td>
          <td class="text-center"><?php echo $row['Fuel']; ?></td>
          <td class="text-center"><?php echo $row['Brand']; ?></td>
          <td class="text-center"><?php echo $row['Model']; ?></td>
          <td><img src="cars_detail/<?php echo $row['Image'] ?>" alt="amg" style="border-radius: 10px;width: 100%;"></td>
          <td class="text-center"><?php echo $row['Mileage']; ?></td>
          <td class="text-center"><?php echo $row['Seating_cap']; ?></td>
          <td class="text-center"><?php echo $row['Fueltank']; ?></td>
          <td class="text-center"><?php echo $row['Transmission']; ?></td>
          
          
          <td class="text-center"><a href="car_info_details.php"><i class="fa fa-plus text-success" style="font-size:25px"></i></a></td>
          <td class="text-center"><a href="upd_info.php?Cid=<?php echo $row['Cid'] ?>"><i class="fas fa-pen text-warning" style="font-size:25px" ></i></a></td>
          <td class="text-center"><a href="del_car_info.php?Cid=<?php echo $row['Cid'] ?>"><i class="fas fa-trash text-danger" style="font-size:25px"></i></a></td>
        </tr>
        <?php } ?>
        
      </table>
    </form>
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
        background-color: black;
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