<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>sign up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<?php 
       
        require "conn.php";
        if(isset($_POST['insert'])){
				$Name = $_POST['Name'];
				$image = rand(0,999999).date('M-Y-D').$_FILES['image'] ['name'];
				$path = 'upload/'.$image;
				move_uploaded_file($_FILES['image'] ['tmp_name'], $path);
				$Mobile = $_POST['Mobile'];
				$Email = $_POST['Email'];
				$Gender = $_POST['Gender'];
				$Username = $_POST['Username'];
				$Password = $_POST['Password'];
                $q = "INSERT INTO `emp`(`Name`, `Image`, `Mobile`, `Email`, `Gender`, `Username`, `Password`) VALUES ('$Name','$image','$Mobile','$Email','$Gender','$Username','$Password')";
                mysqli_query($conn,$q) or die('insertion failed');
                echo  "<div class='alert alert-success' style='text-align:center;font-size:25px;text-tansform:capitalize;font-weight:bold;'>Sign Up Succesfully !</div>";
				echo "<script>window.location = 'emp.php' </script>";
        }
        
        
     ?>
<style>
	body {
		color: #fff;
		background: #19aa8d;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 30%;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
	
</style>
</head>
<body>
	<script>
		 function p() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('File type must be .jpg , .jped , .png');
                fileInput.value = '';
                return false;
            }
        }
	</script>

<div class="signup-form">
	
	
	<form action="#" method="post" enctype="multipart/form-data" onsubmit="return p()">
		<h2>Sign Up</h2>
		<p>Please fill in this form Properly!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="Name" placeholder="Enter The Name" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-image"></i></span>
				<input type="file" class="form-control" name="image" id="file" value="" required/>
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="number" class="form-control" name="Mobile" placeholder="Enter The Mobile No" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="Email" placeholder="Email Address" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
                <select class="form-control" name="Gender">
                        <option class="hidden"  selected disabled>Please select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                </select>                       
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
				<input type="text" class="form-control" name="Username" placeholder="Username" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="text" class="form-control" name="Password" placeholder="Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required" checked> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="insert" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	
	<div class="text-center">Already have an account? <a href="index.php">Login here</a></div>
	</div>
</body>
</html>