<?php

$servername="localhost";
$username="root";
$password="";
$database_name="mydb1";

$conn=mysqli_connect($servername, $username, $password, $database_name);

if(!$conn){
    echo"Connection failed";
}

if(isset($_POST['save'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO study1 (firstname,lastname,mobileno,email,password)
     VALUES ('$first_name','$last_name','$mobileno', '$email', '$password')";

if(mysqli_query($conn, $sql_query)){
    echo "Deatails inserted successfully";
}
else
{
    echo "Error: ".$sql."".mysqli_error($conn);
}
mysqli_close($conn);

}















?>