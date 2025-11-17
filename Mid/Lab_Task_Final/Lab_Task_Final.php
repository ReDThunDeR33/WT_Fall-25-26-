<!DOCTYPE html>
<html>
<title>Lab Task Final</title>
<style>

.f{
    border: groove ;
    background-color:rgba(251, 251, 251, 1);
    margin: 20px 480px 0px 480px;
    border-radius: 12px;
    padding: 10px ;
    text-align: left;
}
.a{
    border: groove ;
    background-color:rgba(251, 251, 251, 1);
    margin: 20px 480px 0px 480px;
    border-radius: 12px;
    padding: 10px ;
    text-align: left;
}

#error{
    text-align: center;
    color: red;
    margin: 10px;
    
}

</style>


<body style="background-color:rgba(242, 188, 155, 0.44);">

<center>
<form class="f" onsubmit="return form1()">
<h2 style="text-align: center;">Participant Registraation</h2>
<br>
<div class="g">
Full Name:
<br>
<input type="text" style="width:480px;" id="fname">
<br></br>
Email:
<br>
<input type ="email" style="width:480px;"id="email">
<br></br>
Phone Number
<br>
<input type="tel" style="width:480px;" id="phone">
<br></br>
Password:
<br>
<input type="password" style="width:480px;" id="pass">
<br></br>
Confirm Password:
<br>
<input type="password" style="width:480px;" id="confirm_pass">
<br></br>
<input type="submit" style="width:100px; color:white; background-color:blue;" value="Register">
</div>
<div id="output">
</div>
<div id="error">
</div>


</form>

<br></br>



<form class="a" onsubmit="return form2()">
<h2 style="text-align: center;">Activity Selection</h2>
<br>

<div class="activity">
Activity Name:
<br>
<input type="text" style="width:480px;">
<br></br>
<input type="submit" style="width:100px; color:white; background-color:blue;" value="Add Activity" id="acc">

</div>
<br></br>
<div class="output2">
</div>

</form>


</center>


<script>
function form1(){
    var fname=document.getElementById("fname").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var pass=document.getElementById("pass").value;
    var confirm_pass=document.getElementById("confirm_pass").value;

    var error_msg=document.getElementById("error");
    var output_msg=document.getElementById("output");

    if(fname==="" || email=== "" || phone==="" || pass==="" || confirm_pass===""){
    error_msg.innerHTML="Fill up the form";

    return false;
    }
    if(pass!==confirm_pass){
        error_msg.innerHTML="Password does not match";
        return false;

    }
    if(phone.length!=11){
            error_msg.innerHTML="Enter Correct Phone NUmber";
            return false;

    }
    output_msg.innerHTML=`
    <div style="border: solid ; background-color:rgba(104, 201, 104, 1); margin: 20px 0px 0px 0px; border-radius: 12px; padding: 10px ; text-align: left;">
    <h2> Registration Successful</h2>
    Name: ${fname} <br></br>
    Email: ${email} <br></br>
    Phone: ${phone} <br></br>
    </div>
    `;

    return false;
}

function form2(){
    let activity=document.getElementById("acc").value;
}



</script>


</body>
</html>