<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin:https://www.purplegrail.in ;Access-Control-Allow-Methods: POST, OPTIONS");




$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'));


if($method == 'POST') {
      $name=$input->name;
      $email=$input->email;
      $comments=$input->comments;
      $to='purplegrailservices@gmail.com';
      $headers= 'From: purplegrail@purplegrail.in' . "\r\n" .
      'Content-Type: text/plain';
      $message =" Name:     $name \n Email:    $email \n \n $comments";

      mail($to,"Website Enquiry",$message,$headers);
      echo json_encode(['message' => 'success']);
}
?>