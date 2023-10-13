<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Alow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
include('function.php');
$requestmethod=$_SERVER['REQUEST_METHOD'];
if($requestmethod=='GET')
{
  $customerlist=getcustomerlist();
  echo $customerlist;
}
else
{
    $data=[
        'status'=>405,
        'message'=>$requestmethod.'Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
?>