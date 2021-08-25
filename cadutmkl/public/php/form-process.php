<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
//mobile
if (empty($_POST["mobile"])) {
    $errorMSG = "mobile is required ";
} else {
    $mobile = $_POST["mobile"];
}
//Design type
if (empty($_POST["Dtype"])) {
    $errorMSG = "Design Type is required ";
} else {
    $Dtype = $_POST["Dtype"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "rajeshdoot@hotmail.com";
$EmailTo1 = "rajeshdoot@hotmail.com";
$Subject = "New Message From Niwax";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "mobile: ";
$Body .= $mobile;
$Body .= "\n";
$Body .= "Design Type: ";
$Body .= $Dtype;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
$success = mail($EmailTo1, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>