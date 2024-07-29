<?php
    $_SERVER['REQUEST_METHOD']=='POST';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $message = $_POST['message'];
    
    $conn = mysqli_connect("localhost", "root", "", "connect");

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else{ 
    $sql = "INSERT INTO `connection` ( `fname`, `lname`, `email`, `no`, `message` ) 
    VALUES ('$fname', '$lname', '$email', '$no', '$message')";
    $rs = mysqli_query($conn, $sql);
    }

if($rs)
{
	echo "Contact Records Inserted Successfully";
}

?>
