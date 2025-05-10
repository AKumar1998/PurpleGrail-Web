<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin:https://www.purplegrail.in ;Access-Control-Allow-Methods: POST, OPTIONS");


$method = $_SERVER['REQUEST_METHOD'];


if($method == 'POST') {
      $name = $_POST['name'] ?? '';
      $email = $_POST['email'] ?? '';
      $comments = $_POST['comments'] ?? '';
      $subject = "Website Enquiry";
      $to='purplegrailservices@gmail.com';
      $headers= 'From: purplegrail@purplegrail.in' . "\r\n" .
      'Content-Type: text/plain';
      $message =" Name:     $name \n Email:    $email \n \n $comments";

      // mail($to,"Website Enquiry",$message,$headers);
      // echo json_encode(['message' => 'success']);

      if (mail($to, $subject, $message, $headers)) {
            echo "success";
        } else {
            echo "Error sending email.";
        }
}
?>