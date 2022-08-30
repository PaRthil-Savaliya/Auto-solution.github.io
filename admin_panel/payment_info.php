
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
	left: 42%;
	transform: translate(-50%);
  }
  body{
    background:url(111.jpg);
  }
  
</style>
<body>
  
<div class="container-fluid" id="box"><br><br>
    <h1 class="display-3 text-center" >SELLING REPORT</h1>
    <br><br>
    <form name="form1" method="post" action="">
    <div style="box-sizing:border-box;width:25%;display:flex;flex-direction:row;">
	<input type="text" name="p1" id="search" class="form-control fa fa-search" placeholder="Search A Brand Name" style="margin-right:5px">
	<button type="submit" name="search" id="button"  class="btn btn-lg btn-warning"><i class="fa fa-search"></i></button>
 
    </div>
    <button class = "btn-lg" style="margin:10px 0px;border:none;background: #2EE59D"><i class="fa fa-download" style="margin-right:7px;"></i><a href="selling_pdf.php" style="color:black;text-decoration:none;">Download Report</a></button>
    <table class="table table-striped table-dark table-hover">
        <tr>
          <th class="text-center" scope="col">Cid</th>
          <th class="text-center" scope="col">Name</th>
          <th class="text-center" scope="col">Image</th>
          <th class="text-center" scope="col">Price</th>
          <th class="text-center" scope="col">Fname</th>
          <th class="text-center" scope="col">Lname</th>
          <th class="text-center" scope="col">Email</th>
          <th class="text-center" scope="col">Mno</th>
          <th class="text-center" scope="col">Alt Mno</th>
          <th class="text-center" scope="col">Card_holder</th>
          <th class="text-center" scope="col">Card_no</th>
          <th class="text-center" scope="col">Cvv</th>
          <th class="text-center" scope="col">E_Month</th>
          <th class="text-center" scope="col">E_Year</th>

        </tr>
        <?php 
				  if(isset($_POST['search']))
				  {
						$s = $_POST['p1'];
						   $q = "select * from cars where Brand like '$s'";
         
		
				  }
				  else
				  {
						$q = "SELECT *
                        FROM cars
                        INNER JOIN payment
                        ON cars.Cid = payment.Cid;";
				  }
				  $data = mysqli_query($conn,$q) or die("record not found");
				  while($row = mysqli_fetch_array($data)){
			  
        ?>
        <tr>
          <td class="text-center"><?php echo $row['Cid']; ?></td>
          <td class="text-center"><?php echo $row['Name']; ?></td>
          <td><img src="upload/<?php echo $row['Image'] ?>" alt="amg" style="width: 30vh;height:30vh"></td>
          <td class="text-center"><?php echo $row['Price']; ?></td>
          <td class="text-center"><?php echo $row['Fname']; ?></td>
          <td class="text-center"><?php echo $row['Lname']; ?></td>
          <td class="text-center"><?php echo $row['Email']; ?></td>
          <td class="text-center"><?php echo $row['Mno']; ?></td>
          <td class="text-center"><?php echo $row['Amno']; ?></td>
          <td class="text-center"><?php echo $row['card_holder_nm']; ?></td>
          <td class="text-center"><?php echo $row['card_no']; ?></td>
          <td class="text-center"><?php echo $row['Cvv']; ?></td>  
          <td class="text-center"><?php echo $row['Month']; ?></td> 
          <td class="text-center"><?php echo $row['Year']; ?></td>   
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