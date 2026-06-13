<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response']))
    {
        die("Please complete reCAPTCHA.");
    }

    $captcha = $_POST['g-recaptcha-response'];

    $secretKey = "6LdguRctAAAAAK023BR1hpAfky8live37iS5MyIS";

    $verifyURL =
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey .
        "&response=" . $captcha;

    $response = file_get_contents($verifyURL);

    $responseData = json_decode($response);

    if ($responseData->success)
    {
        // Dummy Login Check
        if ($username == "bharti" && $password == "123")
        {
            echo "<h2>Login Successful</h2>";
        }
        else
        {
            echo "<h2>Invalid Username or Password</h2>";
        }
    }
    else
    {
        echo "<h2>reCAPTCHA Verification Failed</h2>";
    }
}
?>