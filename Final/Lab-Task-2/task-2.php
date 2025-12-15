<!DOCTYPE html>
<html>
<head>
    <title>labtask-2(final)</title>
    <style>
        form {
             padding: 20px;
              width: 350px;
               text-align: left;
                border: 1px solid #ccc;
             }
        fieldset { margin-bottom: 15px; 
            padding: 10px; }
        legend { font-weight: bold; }
        .k { border-bottom: 1px solid black;
             padding-bottom: 5px; 
             margin-bottom: 10px; }
        .error { color: red; 
            font-size: 0.9em; 
            margin-left: 10px; }
    </style>
</head>

<body>

<?php
$name = "";
$email = "";
$gender ="";
 $blood_group = "";
$dob_dd ="";
 $dob_mm ="";
  $dob_yyyy = "";
$deg="";
$nameerror ="";
 $emailerror ="";
$doberror ="";
 $gendererror = "";
$degreeerror ="";
 $bloodgrouperror = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameerror = "faka hobe na kintu";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerror = "a theke z porjonto hobe";
        }
    }

    if (empty($_POST["email"])) {
        $emailerror = "Email lagbei";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Email format thik nai.";
        }
    }


    if (empty($_POST["dob_dd"]) || empty($_POST["dob_mm"]) || empty($_POST["dob_yyyy"])) {
        $doberror = "faka hobe na.";
    } else {
        $dob_dd = test_input($_POST["dob_dd"]);
        $dob_mm = test_input($_POST["dob_mm"]);
        $dob_yyyy = test_input($_POST["dob_yyyy"]);
        
        if (!is_numeric($dob_dd) || !is_numeric($dob_mm) || !is_numeric($dob_yyyy)) {
             $doberror = "ashol ta daw";
        }
    }

    if (empty($_POST["gender"])) {
        $gendererror = "nijer porichoy daw";
    } else {
        $gender = test_input($_POST["gender"]);
    }


    if (empty($_POST["blood_group"])) {
        $bloodgrouperror = "Blood Group dite hobe";
    } else {
        $blood_group = test_input($_POST["blood_group"]);
    }
}
?>

<center>
<form method="post" action="">

    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error"><?php echo $nameerror; ?></span>
        <div class="k"></div>
    </fieldset>

    <fieldset>
        <legend>EMAIL</legend>
        <input type="text" name="email" value="<?php echo $email;?>">!</input>
        <span class="error"><?php echo $emailerror; ?></span>
        <div class="k"></div>
    </fieldset>

    <fieldset>
        <legend>DATE OF BIRTH</legend>
        dd: <input type="text" name="dob_dd" style="width: 30px;" value="<?php echo $dob_dd;?>"> /
        mm: <input type="text" name="dob_mm" style="width: 30px;" value="<?php echo $dob_mm;?>"> /
        yyyy: <input type="text" name="dob_yyyy" style="width: 50px;" value="<?php echo $dob_yyyy;?>">
        <span class="error"><?php echo $doberror; ?></span>
        <div class="k"></div>
    </fieldset>

    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked";?>> Male
        <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked";?>> Female
        <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked";?>> Other
        <span class="error"><?php echo $gendererror; ?></span>
        <div class="k"></div>
    </fieldset>

    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="deg" value="SSC" > SSC
        <input type="checkbox" name="deg" value="HSC" > HSC
        <input type="checkbox" name="deg" value="BSc" > BSc
        <input type="checkbox" name="deg" value="MSc" > MSc
        <span class="error"><?php echo $degreeerror; ?></span>
        <div class="k"></div>
    </fieldset>

    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood_group">
            <option value="">Select</option>
            <option value="A+" <?php if($blood_group=="A+") echo "selected";?>>A+</option>
            <option value="A-" <?php if($blood_group=="A-") echo "selected";?>>A-</option>
            <option value="B+" <?php if($blood_group=="B+") echo "selected";?>>B+</option>
            <option value="B-" <?php if($blood_group=="B-") echo "selected";?>>B-</option>
            <option value="AB+" <?php if($blood_group=="AB+") echo "selected";?>>AB+</option>
            <option value="AB-" <?php if($blood_group=="AB-") echo "selected";?>>AB-</option>
            <option value="O+" <?php if($blood_group=="O+") echo "selected";?>>O+</option>
            <option value="O-" <?php if($blood_group=="O-") echo "selected";?>>O-</option>
        </select>
        <span class="error"><?php echo $bloodgrouperror; ?></span>
        <div class="k"></div>
    </fieldset>

    <input type="submit" name="submit" value="Submit">
</form>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerror) && empty($emailerror) && empty($doberror) && empty($gendererror) && empty($degreeerror) && empty($bloodgrouperror)) {
    echo "<h3> Your Validated Input:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Date of Birth: " . $dob_dd . "/" . $dob_mm . "/" . $dob_yyyy . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Blood Group: " . $blood_group . "<br>";
}
?>
</body>
</html>