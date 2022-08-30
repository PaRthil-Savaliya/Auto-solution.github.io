<?php 

        ob_start();
        $conn =  mysqli_connect('localhost','root','','autosolution') or die("Connection Faild");
        if(isset($_POST['payment'])){
            $Cid = $_GET['Cid'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mno = $_POST['mno'];
            $mno2 = $_POST['mno2'];
            $holdername = $_POST['holdername'];
            $cardno = $_POST['cardno'];
            $cvv = $_POST['cvv'];
            $expmonth = $_POST['expmonth'];
            $expyear = $_POST['expyear']; 
            $q = "INSERT INTO `payment`(`Cid`, `Fname`, `Lname`, `Email`, `Mno`, `Amno`, `card_holder_nm`, `card_no`, `Cvv`, `Month`, `Year`) VALUES ('$Cid','$fname','$lname','$email','$mno','$mno2','$holdername','$cardno','$cvv','$expmonth','$expyear')";
            mysqli_query($conn,$q) or die('insertion faild');
            header("location:thankyou.php?Cid=$Cid");
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Pay</title>
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <style>
        * {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
}

/*Background color*/
#grad1 {
    
}

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;

    /*stacking fieldsets above each other*/
    /* position: relative; */
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    /* position: relative; */
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
}

#msform input, #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0;
}

/*Blue Buttons*/
#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
}

/*Previous Buttons*/
#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
}

/*Dropdown List Exp Date*/
select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px;
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue;
}

/*The background card*/
.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #000000;
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative;
}

/*Icons in the ProgressBar*/
#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d";
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

/*ProgressBar before any progress*/
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: skyblue;
}

/*Imaged Radio Buttons*/
.radio-group {
    position: relative;
    margin-bottom: 25px;
}

.radio {
    display:inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor:pointer;
    margin: 8px 2px; 
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
}

/*Fit image in bootstrap div*/
.fit-image{
    width: 100%;
    object-fit: cover;
}
</style>
    <script>
        $(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });
    </script>
</head>
<script>
    $(document).ready(function(){
            $("#btn12").hide();
           
            
        
        $("#chk").click(function(){
           
            var x=document.getElementById("fname").value;
            if(x.length==0)
            {
                alert("enter your First name");
                document.getElementById("fname").focus();
                return false;
            
            }
            else{
                var w=/^[a-zA-Z]+$/;
                if(x.match(w))
                {}
                else
                {
                    alert("enter valid  First name");
                    document.getElementById("fname").focus();
                    return false;
                }
            }
            var x=document.getElementById("lname").value;
            if(x.length==0)
            {
                alert("enter your Last name");
                document.getElementById("lname").focus();
                return false;
            
            }
            else{
            var w=/^[a-zA-Z]+$/;
            if(x.match(w))
            {}
            else
            {
                alert("enter valid  Last name");
                document.getElementById("lname").focus();
                return false;
            }
            }
            var mno=document.getElementById("mno").value;
            if(mno.length==0)
            {
                alert("enter mobile no");
                document.getElementById("mno").focus();
                return false;
            }
            else{
                var z=/^[0-9]+$/
                if(mno.match(z) && mno.length==10)
                {}
                else{
                            alert("Mobile No Must Be 10 Digits") 
                            document.getElementById("mno").focus();
                            return false;
                }
            }
            var mno2=document.getElementById("mno2").value;
            if(mno2.length==0)
            {
                alert("enter mobile no");
                document.getElementById("mno2").focus();
                return false;
            }
            else{
                var z=/^[0-9]+$/
                if(mno2.match(z) && mno2.length==10)
                {}
                else{
                            alert("Mobile No Must Be 10 Digits") 
                            document.getElementById("mno2").focus();
                            return false;
                }
            }
            a=document.getElementById("email").value;
            if(a.length==0)
            {
                alert("enter your email...!");
                document.getElementById("email").focus();
                return false;
            }
            else{
                b=/^([a-zA-Z0-9_\-\.]+)@([a-z A-Z 0-9_\-\.]+).([a-z A-Z]{2,5})$/;
                if(a.match(b))
                {}
                else{
                    alert("enter proper email");
                    document.getElementById("email").focus();
                    return false;
                }
            }
            $("#btn12").show();
            
        
        });   
    });

</script>
<script>
    $(document).ready(function(){
            $("#btn123").hide();
            $("#chk1").click(function(){
                var x=document.getElementById("hnm").value;
            if(x.length==0)
            {
                alert("enter Card Holder Name");
                document.getElementById("hnm").focus();
                return false;
            
            }
            else{
            var w=/^[a-zA-Z]+$/;
            if(x.match(w))
            {}
            else
            {
                alert("enter valid Card Holder Name");
                document.getElementById("hnm").focus();
                return false;
            }
            }
            var mno=document.getElementById("cno").value;
            if(mno.length==0)
            {
                alert("enter card no");
                document.getElementById("cno").focus();
                return false;
            }
            else{
                var z=/^[0-9]+$/
                if(mno.match(z) && mno.length==14)
                {}
                else{
                            alert("card  No Must Be 14 Digits") 
                            document.getElementById("cno").focus();
                            return false;
                }
            }
            var mno=document.getElementById("cvv").value;
            if(mno.length==0)
            {
                alert("enter CVV");
                document.getElementById("cvv").focus();
                return false;
            }
            else{
                var z=/^[0-9]+$/
                if(mno.match(z) && mno.length==3)
                {}
                else{
                            alert("cvv Must Be 3 Digits") 
                            document.getElementById("cvv").focus();
                            return false;
                }
            }
            $("#btn123").show();
           
    });
});
</script>
<body>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>3 Steps Away From Your Dream ❤️</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" method="post" >
                            <!-- progressbar -->
                            <ul id="progressbar" style="margin-left:100px;">    
                                <li class="active" id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2>
                                    <input type="text" name="fname" id="fname" placeholder="First Name" required/>
                                    <input type="text" name="lname" id="lname" placeholder="Last Name" required/>
                                    <input type="email" name="email" id="email" placeholder="Email" required/>
                                    <input type="number" name="mno" id="mno" placeholder="Contact No." required/>
                                    <input type="number" name="mno2" id="mno2" placeholder="Alternate Contact No." required/>
                                    <div style="display:flex;">
                                        <input type="checkbox" id="chk"  style="width:50px;" required>
                                        <label for="" >Are You Check Your Details Twice ??</label>
                                    </div>
                                </div>
                                <input type="button" name="next" id="btn12" class="next action-button"value="Next Step"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder="Holder name" id="hnm" required/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="number" name="cardno" placeholder="Card No"  id="cno" required/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvv" max="3" placeholder="***" id="cvv" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth" required>
                                                <option selected disabled>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear" required>
                                                <option selected disabled>Year</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div style="display:flex;">
                                        <input type="checkbox" id="chk1"  style="width:50px;" required>
                                        <label for="" >Are You Check Your Details Twice ??</label>
                                    </div>
                                </div>
                                <div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                    <input type="submit" name="payment" id="btn123" class="next action-button" value="Confirm"/>
                                </div>
                            </fieldset>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="payment_valid.js"></script>
 
</body>
</html>