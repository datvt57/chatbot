<?php 
include 'model/class.php';
header("Access-Control-Allow-Origin: *");
$reply = new Message();
$reply->messages[] = new Text("Welcome to chatfuel");
$reply->messages[] = new Text("What are you up to?");
echo json_encode($reply);
http_response_code(200);
 ?>
