<?php
if (isset ($_POST['submit'])){
    $name = $_POST['name'];
    $emailf = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $mailTo = "dotdesign.main1@gmail.com";
    $headers = "From: " .$emailf;
    $txt = "You have recived an email from ".$name.".\n\n".$message;
    
    mail($mailTo,$number,$txt,$headers);
    header("Location: index.php?mailsend");
        
    
}

?>