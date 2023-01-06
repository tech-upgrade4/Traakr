<?php

  if (isset($_GET['submit'])){
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $em = $_GET['email'];
    $message = $_GET['message'];
    $to = "tech.upgrade4@gmail.com";
    $subject = "Mail from Traakr website";

    $headers = "From: " . $name . "\r\n";

    $txt = "You have received an e-mail from " . $name . "\r\nEmail: " . $em . "\r\nMessage: " . $message;
  
    //if(!empty($em)){
      mail($to, $subject, $txt, $headers);
    //}

    header('Location:../index.php?result="Email sent"');
  }else {
    header('Location:../index.php');
  }