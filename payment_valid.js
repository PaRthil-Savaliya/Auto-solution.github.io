function personal(){
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
      
}
