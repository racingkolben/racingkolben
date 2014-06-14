<?php
if(isset($_POST["postData"])){

    $data = json_decode($_POST["postData"]);

//  $emailto = $data->membername;
    $emailto ="muthukaruppan13.95@gmail.com";
    $emailfrom = $data->email;
    $cname = $data->name;
    $cno = $data->phone;
    $cmessage = $data->message;

        $message="Hi,My name is ".$cname." No: +91".$cno." Message: ".$cmessage;
        mail($emailto,'Message from '.$cname." !",$message,'From: '.$emailfrom);

        echo "sent";
}
//?>
<!DOCTYPE html>
<html>
<head>
    <title>Racingkolben</title>

    <?php require("public/fonts.php"); ?>
    <?php require("scripts.php"); ?>

    <script src="libs/chosen/chosen.jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/cform.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="js/contact.js"></script>

</head>
<body>
<div class="wrapper2">
    <?php require("public/logo.php"); ?>
    <?php require("menu.php");?>
    <?php require("public/contact/members.php");?>
    <?php require("public/contact/cform.php");?>
</div>
<footer id="footer"><p>&copy; 2014 Racing Kolben Team</p></footer>
</body>
</html>