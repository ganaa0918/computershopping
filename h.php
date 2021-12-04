<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";
$conn*mysqli_connect($server_name,$username,$password,$database_name);
//now check  the connection 
if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO sign_up(username,email,phone,password)
    VALUES ('$username','$email','$phone','$password') ";

    if(mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully ! ";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
