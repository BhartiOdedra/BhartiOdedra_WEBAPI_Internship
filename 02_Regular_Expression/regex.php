<?php
$message = "";
$valid = true;

$fname = "";
$mname = "";
$lname = "";
$city = "";
$email = "";
$contact = "";
$gender = "";
$adhar = "";
$pan = "";
$username = "";
$password = "";
$cpassword = "";

// Initialize error variables
$fnameErr = $mnameErr = $lnameErr = $cityErr = "";
$emailErr = $contactErr = $genderErr = "";
$adharErr = $panErr = $usernameErr = "";
$passwordErr = $cpasswordErr = "";

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'] ?? "";
    $adhar = $_POST['adhar'];
    $pan = $_POST['pan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // First Name
    if(empty($fname)){
        $fnameErr = "First Name is required";
        $valid = false;
    } elseif(!preg_match("/^[a-zA-Z ]+$/", $fname)){
        $fnameErr = "Only letters and spaces allowed";
        $valid = false;
    }

    // Middle Name
    if(empty($mname)){
        $mnameErr = "Middle Name is required";
        $valid = false;
    } elseif(!preg_match("/^[a-zA-Z ]+$/", $mname)){
        $mnameErr = "Only letters and spaces allowed";
        $valid = false;
    }

    // Last Name
    if(empty($lname)){
        $lnameErr = "Last Name is required";
        $valid = false;
    } elseif(!preg_match("/^[a-zA-Z ]+$/", $lname)){
        $lnameErr = "Only letters and spaces allowed";
        $valid = false;
    }

    // City
    if(empty($city)){
        $cityErr = "City is required";
        $valid = false;
    } elseif(!preg_match("/^[a-zA-Z ]+$/", $city)){
        $cityErr = "Only letters and spaces allowed";
        $valid = false;
    }

    // Email
    if(empty($email)){
        $emailErr = "Email is required";
        $valid = false;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid Email Format";
        $valid = false;
    }

    // Contact Number
    if(empty($contact)){
        $contactErr = "Contact Number is required";
        $valid = false;
    } elseif(!preg_match("/^[6-9][0-9]{9}$/", $contact)){
        $contactErr = "Invalid Indian Mobile Number";
        $valid = false;
    }

    // Gender
    if(empty($gender)){
        $genderErr = "Please select Gender";
        $valid = false;
    }

    // Aadhaar
    if(empty($adhar)){
        $adharErr = "Aadhaar Number is required";
        $valid = false;
    } elseif(!preg_match("/^[0-9]{12}$/", $adhar)){
        $adharErr = "Aadhaar must be 12 digits";
        $valid = false;
    }

    // PAN
    if(empty($pan)){
        $panErr = "PAN Number is required";
        $valid = false;
    } elseif(!preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]$/", $pan)){
        $panErr = "Invalid PAN Format";
        $valid = false;
    }

    // Username
    if(empty($username)){
        $usernameErr = "Username is required";
        $valid = false;
    } elseif(!preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)){
        $usernameErr = "5-15 characters, letters, numbers, underscore only";
        $valid = false;
    }

    // Password
    if(empty($password)){
        $passwordErr = "Password is required";
        $valid = false;
    } elseif(!preg_match(
        "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/",
        $password
    )){
        $passwordErr = "Must contain uppercase, lowercase, number and special character";
        $valid = false;
    }

    // Confirm Password
    if(empty($cpassword)){
        $cpasswordErr = "Confirm Password is required";
        $valid = false;
    } elseif($password !== $cpassword){
        $cpasswordErr = "Passwords do not match";
        $valid = false;
    }

    // Success
    if($valid){
        $message = "<span class='success'>Registration Successful!</span>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Registration Form</h2>

<?php if($message!="") echo $message; ?>

<form method="post">

    <input type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>">
    <span class="error"><?php echo $fnameErr; ?></span>

    <input type="text" name="mname" placeholder="Middle Name" value="<?php echo $mname; ?>">
    <span class="error"><?php echo $mnameErr; ?></span>

    <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>">
    <span class="error"><?php echo $lnameErr; ?></span>

    <input type="text" name="city" placeholder="City" value="<?php echo $city; ?>">
    <span class="error"><?php echo $cityErr; ?></span>

    <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <input type="text" name="contact" placeholder="Contact Number" value="<?php echo $contact; ?>">
    <span class="error"><?php echo $contactErr; ?></span>

    <div class="gender-box">
        <label>Gender :</label>
        <input type="radio" name="gender" value="Male"> <span>Male</span>
        <input type="radio" name="gender" value="Female"> <span>Female</span>
        <span class="error"><?php echo $genderErr; ?></span>
    </div>
    <input type="text" name="adhar" placeholder="Aadhaar Number" value="<?php echo $adhar; ?>">
    <span class="error"><?php echo $adharErr; ?></span>

    <input type="text" name="pan" placeholder="PAN Number" value="<?php echo $pan; ?>">
    <span class="error"><?php echo $panErr; ?></span>

    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
    <span class="error"><?php echo $usernameErr; ?></span>

    <input type="password" name="password" placeholder="Password">
    <span class="error"><?php echo $passwordErr; ?></span>

    <input type="password" name="cpassword" placeholder="Confirm Password">
    <span class="error"><?php echo $cpasswordErr; ?></span>

    <button type="submit" name="submit">Register</button>

</form>
</div>

</body>
</html>