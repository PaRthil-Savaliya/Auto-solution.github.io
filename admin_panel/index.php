
<?php session_start();
//    setcookie('Username', "username" ,time() + 900000, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.container {
    margin: 50px auto;
}

.body {
    position: relative;
    width: 800px;
    height: 500px;
    margin: 20px auto;
    border: 1px solid #dddd;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.box-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box-2 {
    padding: 10px;
}

.box-1,
.box-2 {
    width: 50%;
}

.h-1 {
    font-size: 24px;
    font-weight: 700;
}

.text-muted {
    font-size: 14px;
}

.container .box {
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    text-decoration: none;
    color: #615f5fdd;
}

.box:active,
.box:visited {
    border: 2px solid #ee82ee;
}

.box:hover {
    border: 2px solid #ee82ee;
}

.btn.btn-primary {
    background-color: transparent;
    color: #ee82ee;
    border: 0px;
    padding: 0;
    font-size: 14px;
}

.btn.btn-primary .fas.fa-chevron-right {
    font-size: 12px;
}

.footer .p-color {
    color: #ee82ee;
}

.footer.text-muted {
    font-size: 10px;
}

.fas.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    height: 20px;
    width: 20px;
    background-color: #f3cff379;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fas.fa-times:hover {
    color: #ff0000;
}

@media (max-width:767px) {
    body {
        padding: 10px;
    }

    .body {
        width: 100%;
        height: 100%;
    }

    .box-1 {
        width: 100%;
    }

    .box-2 {
        width: 100%;
        height: 440px;
    }
    
}
</style>
<body style="background:black;">
<div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="../image/123.gif" class="" alt="G-wagon">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5">
                    <p class="mb-1 h-1 text-light">Log In Here.</p>
                    <p class="text-muted mb-2">Don't Dream It Just Drive It</p>
                    <div class="d-flex flex-column ">
             
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input class="form-control" id="username" name="username" placeholder="Username" value="">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input class="form-control" id="password" name="password" placeholder="Password" value="">
                        <span class="input-group-text">
                            <i class="far fa-eye" id="togglePassword" 
                        style="cursor: pointer"></i>
                        </span>
                        </div>
                        <button type="submit" class="btn btn-success" name="login" style="background-color:#ee82ee;color:black;border:none">Log In</button>
                    </form>
                        <script>
                            const togglePassword = document.querySelector("#togglePassword");
                            const password = document.querySelector("#password");

                            togglePassword.addEventListener("click", function () {
                            
                            // toggle the type attribute
                            const type = password.getAttribute("type") === "password" ? "text" : "password";
                            password.setAttribute("type", type);

                            // toggle the eye icon
                            this.classList.toggle('fa-eye');
                            this.classList.toggle('fa-eye-slash');
                            });
                        </script>
                        <div class="mt-3">
                            <p class="mb-0 text-muted">Forget Password?</p>
                            <div class="btn btn-primary"><a href="#" style="color:#ee82ee;text-decoration:none;">Click here<span class="fas fa-chevron-right ms-1"></span></a></div>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-auto">
                    <p class="footer text-muted mb-0 mt-md-0 mt-4">By register you agree with our
                        <span class="p-color me-1">terms and conditions</span>and
                        <span class="p-color ms-1">privacy policy</span>
                    </p>
                </div>
            </div>
            <span class="fas fa-times"></span>
        </div>
    </div>
    <?php
     
        require 'conn.php';
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $_SESSION['username'] = $username;
            $sid = $_SESSION['username'];
            // setcookie("Username",$sid,time() + 900000, '/');
            // setcookie('Username', "$sid" ,time() + 900000, '/');
            $q = "select * from emp where Username = '$username' and Password = '$password'";
            $res = mysqli_query($conn,$q) or die("<script>alert('User Not Found')</script>");
            $data = mysqli_num_rows($res);
            if($data > 0){
                echo "<script>
                window.location = 'home.php';
                </script>";       
            }
            else{
                echo "<script>alert('Username or Password Incorrect')</script>";
                
            }
            
        }
        
        
        // if(isset($sid)){
        //     echo "<script>
        //     window.location = 'home.php';
        //     </script>";  
        // }
       
        // if(!isset($_COOKIE['username'] )){
        //     echo "<script>
        //   alert('Coockie not found');
        //     </script>";
        // }
        
    ?>
</html>