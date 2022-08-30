<?php
    
    require 'conn.php';
    
    if(isset($_POST['insert'])){
            $Cid = $_POST['Cid'];
            $Name = $_POST['Name'];
            $Car_type = $_POST['Car_type'];
            $Color = $_POST['Color'];
            $Engine = $_POST['Engine'];
            $Mileage = $_POST['Mileage'];
            $Seating_cap = $_POST['Seating_cap'];
            $Fueltank = $_POST['Fueltank'];
            $Transmission = $_POST['Transmission'];
            $Model = $_POST['Model'];
            $Fuel = $_POST['Fuel'];
            $Brand = $_POST['Brand'];
             // Count total files
            $countfiles = count($_FILES['Image']['name']);
          
               
            // Looping all files
            for($i=0;$i<$countfiles;$i++){
                $Image = rand(0,999).$_FILES['Image']['name'];
                // Upload file
                move_uploaded_file($_FILES['Image']['tmp_name'][$i],'cars_detail/'.$Image);
            }
            $q = "INSERT INTO `car_info`(`Cid`, `Name`, `Car_type`, `Color`, `Engine`, `Fuel`, `Brand`, `Model`, `Image`, `Mileage`, `Seating_cap`, `Fueltank`, `Transmission`) VALUES ('$Cid','$Name','$Car_type','$Color','$Engine','$Fuel','$Brand','$Model','$Image','$Mileage','$Seating_cap','$Fueltank','$Transmission')";
            mysqli_query($conn,$q) or die('insertion failed');
            header('location:view_car_info.php');


    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars_information</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    img{
    transition:1s;
    }
    img:hover{
    transform:scale(1.2);
    }
</style>
<script>
    function p() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('File must be .jpg , .jpeg , .png');
                fileInput.value = '';
                return false;
            }
        }
</script>

<style>
</style>
<body>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
            <img src="../image/1125.gif" alt="image" style="width:100%;border-radius:10px;"/>
				<h2 style="font-size:25px;">Auto Solution</h2>
				<h4 style="font-size:15px;">Don't Pray for Love,Just Pray for Cars 🚀 </h4>
                
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
            <h3  class="register-heading">Details of cars</h3>
                                <form action="#" method="post" enctype="multipart/form-data" onsubmit="return p()">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name = "Cid" placeholder="Enter Car Id *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Name" placeholder="Enter car name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control" name="Car_type">
                                                <option class="hidden"  selected disabled>Please select the BodyType</option>
                                                <option>Coupe</option>
                                                <option>Convertible</option>
                                                <option>Sedan</option>
                                                <option>Suvs</option>
                                                <option>Hatchback</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="Text" class="form-control" name="Color" placeholder="Enter Car Color *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="Text" class="form-control" name="Engine" placeholder="Car Engine Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="Fuel">
                                                <option class="hidden"  selected disabled>Please select Fuel type</option>
                                                <option>Petrol</option>
                                                <option>Diesel</option>
                                                <option>Electronic</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control" name="Brand">
                                                <option class="hidden"  selected disabled>Please select the brand</option>
                                                <option>Audi</option>
                                                <option>Phorsche</option>
                                                <option>Mercedes</option>
                                                <option>BMW</option>
                                                <option>Lamborghini</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <select class="form-control" name="Model">
                                                <option class="hidden"  selected disabled>Please select the model</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2021</option>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="Image[]" id="file" placeholder="upload the image *" value="" multiple required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="Text" class="form-control" name="Mileage" placeholder="Mileage of Car *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="Seating_cap" placeholder="Enter Seat *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="Text" class="form-control" name="Fueltank" placeholder="Enter Fuel Capacity *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control" name="Transmission">
                                                <option class="hidden"  selected disabled>Please select Transmission</option>
                                                <option>Hybrid</option>
                                                <option>Automatic</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <div class="button">
                                        <button type="submit" class="btn" name="insert" style="margin-right:10px;border-radius:15px 0px 0px 15px;background:rgb(0, 232, 174);width:100px;padding:10px;">Submit</button>
                                        <button type="reset" class="btn" style="border-radius:0px 15px 15px 0px;width:100px;background:orange;padding:10px">Reset</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

            </div>
		</div>
	</div>
</div>

</body>
</html>