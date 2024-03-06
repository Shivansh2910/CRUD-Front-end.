<?php
//connection to DB
$servername="localhost";
$username="root";
$password="";
// creating a connection
$conn = mysqli_connect($servername, $username, $password);
//if connection was not successful
if(!$conn){
    die("Failed to connect" . $conn);
}else{
echo "Connection was successful";
}

//create a DB
$sql = "CREATE DATABASE shivansh2k24";
$result = mysqli_query($conn, $sql);

//check DB was perfectly connected or not
if($result){
    echo " the DB was created successfully";
}else{
    echo " the DB was not created successfully";
}


?>