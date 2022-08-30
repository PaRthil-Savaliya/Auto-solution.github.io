<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Report</title>
  
<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
</head>




<?php 
	require 'conn.php';
	error_reporting(0);
?>

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
<h1 class="display-3 text-center">EMPLOYEE REPORT</h1>
    <br>
    <form name="form1" method="post" action="">
        <div style="box-sizing:border-box;width:25%;display:flex;flex-direction:row;">
          <input type="text" name="p1" id="search" class="form-control fa fa-search" placeholder="Search Employee" style="margin-right:5px">
          <button type="submit" name="search" id="button"  class="btn btn-lg btn-warning"><i class="fa fa-search"></i></button>
        </div>
     </form><br>

    
    <table class="table table-striped table-dark table-hover">
        <tr>
          <th class="text-center" scope="col">Srno</th>
          <th class="text-center" scope="col">Name</th>
          <th class="text-center" scope="col">Image</th>
          <th class="text-center" scope="col">Mobile</th>
          <th class="text-center" scope="col">Email</th>
          <th class="text-center" scope="col">Gender</th>
          <th class="text-center" scope="col">Username</th>
          <th class="text-center" scope="col">Password</th>
          <th class="text-center" scope="col">Insert</th>
          <th class="text-center" scope="col">Update</th>
          <th class="text-center" scope="col">Delete</th>

        </tr>
        <?php 
				  if(isset($_POST['search']))
				  {
						$s = $_POST['p1'];
						$q = "select * from emp where Name like '$s%' or Mobile like '$s%' or Email like '$s%' or Gender like '$s%'";
				  }
				  else
				  {
						$q = "select * from emp";
				  }
				  $data = mysqli_query($conn,$q) or die("record not found");
				  while($row = mysqli_fetch_array($data)){
			  
        ?>
        <tr>
          <td class="text-center"><?php echo $row['Srno']; ?></td>
          <td class="text-center"><?php echo $row['Name']; ?></td>
          <td><img src="upload/<?php echo $row['Image'] ?>" alt="amg" style="border-radius: 10px;width: 90%;"></td>
          <td class="text-center"><?php echo $row['Mobile']; ?></td>
          <td class="text-center"><?php echo $row['Email']; ?></td>
          <td class="text-center"><?php echo $row['Gender']; ?></td>
          <td class="text-center"><?php echo $row['Username']; ?></td>
          <td class="text-center"><?php echo $row['Password']; ?></td>
          <td class="text-center"><a href="signin.php"><i class="fa fa-plus text-success" style="font-size:25px"></i></a></td>
          <td class="text-center"><a href="emp_upd.php?Srno=<?php echo $row['Srno'] ?>"><i class="fas fa-pen text-warning" style="font-size:25px" ></i></a></td>
          <td class="text-center"><a href="emp_del.php?Srno=<?php echo $row['Srno'] ?>"><i class="fas fa-trash text-danger" style="font-size:25px"></i></a></td>
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
</html>