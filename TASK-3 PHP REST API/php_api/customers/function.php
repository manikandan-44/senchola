<?php
require 'c:\xampp\htdocs\php_api\dbcon.php';
function error422($message)
{
    $data=[
        'status'=>422,
        'message'=>$message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    return json_encode($data);
    exit();
}
function storecustomer($customerinput)
{
    global $conn;
    $name=mysqli_real_escape_string($conn,$customerinput['name']);
    $email=mysqli_real_escape_string($conn,$customerinput['email']);
    $mobile=mysqli_real_escape_string($conn,$customerinput['mobile']);
    if(empty(trim($name)))
    {
        return error422('enter your name');
    }
    elseif(empty(trim($email)))
    {
        return error422('enter your email');
    }
    elseif(empty(trim($mobile)))
    {
        return error422('enter your mobile');
    }
    else
    {
       $query="insert into students(name,email,mobile) values('$name','$email','$mobile')";        
       $result=mysqli_query($conn,$query);
       if($result)
       {
        $data=[
            'status'=>201,
            'message'=>'Customer created Successfully'

        ];
        header("HTTP/1.0 201 created Successfully");
        return json_encode($data);
       }
       else{
        $data=[
            'status'=>500,
            'message'=>'Customer created Successfully'

        ];
        header("HTTP/1.0 500 Customer created Successfully");
        return json_encode($data);
       }
    }
}
function getcustomerlist()
{
    global $conn;
    $q="select * from students";
    $q_run=mysqli_query($conn,$q);
    if($q_run)
    {
        if(mysqli_num_rows($q_run)>0)
        {
            $res=mysqli_fetch_all($q_run,MYSQLI_ASSOC);

            $data=[
                'status'=>200,
                'message'=>'Customer List Fetched Successfully',
                'data'=>$res
            ];
            header("HTTP/1.0 200 Customer List Fetched Successfully");
            return json_encode($data);
        }
        else{
            $data=[
                'status'=>404,
                'message'=>'No Customer found',
            ];
            header("HTTP/1.0 404 No Customer found");
            return json_encode($data);
        }

    }
    else{
        
    $data=[
        'status'=>500,
        'message'=>'Customer created Successfully',
    ];
    header("HTTP/1.0 500 Customer created Successfully");
    return json_encode($data);
    }
}
?>