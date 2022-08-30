
<?php 
	require 'conn.php';
	error_reporting(0);
?>

<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
<style>
  #box{
	box-sizing: border-box;
	border-radius: 30px;
	width: 80%;
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
<button class = "btn-lg" style="margin:10px 0px;border:none;background: #2EE59D"><a href="view_car_info.php" style="color:black;text-decoration:none;">View Car_Info</a><i class="fa fa-arrow-right" style="margin-left:7px;"></i></button>
</div>
    
    <table class="table table-striped table-dark table-hover">
        <tr>
          <th class="text-center" scope="col">Cid</th>
          <th class="text-center" scope="col">Name</th>
          <th class="text-center" scope="col">Image</th>
          <th class="text-center" scope="col">Specification</th>
          <th class="text-center" scope="col">Price</th>
          <th class="text-center" scope="col">Model</th>
          <th class="text-center" scope="col">Fuel</th>
          <th class="text-center" scope="col">Brand</th>
          <th class="text-center" scope="col">Insert</th>
          <th class="text-center" scope="col">Update</th>
          <th class="text-center" scope="col">Delete</th>

        </tr>
        <?php 
				  if(isset($_POST['search']))
				  {
						$s = $_POST['p1'];
						   $q = "select * from cars where Brand like '$s'";
         
		
				  }
				  else
				  {
						$q = "select * from cars";
				  }
				  $data = mysqli_query($conn,$q) or die("record not found");
				  while($row = mysqli_fetch_array($data)){
			  
        ?>
        <tr>
          <td class="text-center"><?php echo $row['Cid']; ?></td>
          <td class="text-center"><?php echo $row['Name']; ?></td>
          <td><img src="upload/<?php echo $row['Image'] ?>" alt="amg" style="border-radius: 10px;width: 100%;"></td>
          <td class="text-center"><?php echo $row['Specification']; ?></td>
          <td class="text-center"><?php echo $row['Price']; ?></td>
          <td class="text-center"><?php echo $row['Model']; ?></td>
          <td class="text-center"><?php echo $row['Fuel']; ?></td>
          <td class="text-center"><?php echo $row['Brand']; ?></td>
          <td class="text-center"><a href="ragister.php"><i class="fa fa-plus text-success" style="font-size:25px"></i></a></td>
          <td class="text-center"><a href="upd_car_info.php?Cid=<?php echo $row['Cid'] ?>"><i class="fas fa-pen text-warning" style="font-size:25px" ></i></a></td>
          <td class="text-center"><a href="del_car.php?Cid=<?php echo $row['Cid'] ?>"><i class="fas fa-trash text-danger" style="font-size:25px"></i></a></td>
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