
<style>
    .register{
    background: -webkit-linear-gradient(left, #1bddca, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background:#f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;  
}

.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
img{
    transition:1s;
}
img:hover{
   
    transform:scale(1.5);
    
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}



</style>


<!--end of css part -->

<!--html -->
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
<?php 
        error_reporting(0);
        include "conn.php";
        if(isset($_POST['insert'])){
                $cname = $_POST['cname'];
                $image = rand(0,999999).date('M-Y-D').$_FILES['image'] ['name'];
		        $path = 'upload/'.$image;
		        move_uploaded_file($_FILES['image'] ['tmp_name'], $path);	
                $specification = $_POST['specification'];
                $price = $_POST['price'];
                $model = $_POST['model'];
                $fuel = $_POST['fuel'];
                $brand = $_POST['brand'];
                $q = "INSERT INTO `cars`(`Name`, `Image`, `Specification`, `Price`, `Model`, `Fuel`, `Brand`) VALUES ('$cname','$image','$specification','$price','$model','$fuel','$brand')";
                mysqli_query($conn,$q) or die('insertion failed');
                header('location:index_car_info.php');
        }
        
        
     ?>

<html>
<head>
    <title>Admin_panel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<div class="con">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                    <img src="../image/212.gif" alt="" style="width:50%;border-radius:20px;"/>
                        <h3>Welcome</h3>
                        <p>There is no speed-limits on the road to success</p>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Information of cars</h3>
                                <form action="#" method="post" enctype="multipart/form-data" onsubmit="return p() ">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name = "cname" placeholder="Enter Car Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="file" placeholder="upload the image *" value="" required  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="specification" placeholder="Specification *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="Text" class="form-control" name="price" placeholder="price(number + lakhs or crore) *" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <select class="form-control" name="model" required >
                                                <option class="hidden"  selected disabled>Please select the model</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2021</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="fuel" required >
                                                <option class="hidden"  selected disabled>Please select Fuel type</option>
                                                <option>Petrol</option>
                                                <option>Diesel</option>
                                                <option>Electronic</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control" name="brand" required >
                                                <option class="hidden"  selected disabled>Please select the brand</option>
                                                <option>Audi</option>
                                                <option>Phorsche</option>
                                                <option>Mercedes</option>
                                                <option>BMW</option>
                                                <option>Lamborghini</option>
                                            </select>
                                        </div>
                                      <div class="form-group">
                                            <input type="checkbox" name="check" id="" required >
                                            <label>Are you Checked The Details ?</label>
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
            </div>
            </html>
<!--end of html -->