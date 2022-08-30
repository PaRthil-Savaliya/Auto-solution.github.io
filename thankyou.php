<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Done</title>
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<?php $Cid = $_GET['Cid']; ?>
<?php 
            $conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
          $q = "select * from cars where Cid = $Cid";
    
    $data = mysqli_query($conn,$q) or die("record not found");
    $row = mysqli_fetch_array($data)

?>

<body>
            <div class="form-card" style="box-sizing:border-box;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);text-align:center;" >
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Done Your Payment</h5>
                                        </div>
                                        <br>
                                        <button class="btn-lg" style="width:50%;padding:5px;background:rgb(16, 202, 16);border-radius:10px;"><a href="bill.php?Cid=<?php echo $row['Cid']?>" style="color:black;text-decoration:none;"><i class="fa fa-download"></i> Download Recipt</a></button>
                                    </div>
                </div>
</body>
</html>