<?php
//connection to DB
$servername="localhost";
$username="root";
$password="";
$database="shivansh2k24";
// creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
//if connection was not successful
if(!$conn){
    die("Failed to connect" . mysqli_connect_error());
}else{
     echo "Connection was successful";
}
echo "<br>";
// Create a table in the DB
$sql = "CREATE TABLE `userdetails` ( 
 `ID` INT(50) NOT NULL AUTO_INCREMENT ,
 `Name` VARCHAR(100) NOT NULL ,
 `FathersName` VARCHAR(100) NOT NULL , 
 `Phone.no` VARCHAR(100) NOT NULL , 
 `Email` VARCHAR(100) NOT NULL , 
 `Class` VARCHAR(100) NOT NULL , 
 `Gender` VARCHAR(100) NOT NULL , 
 `Note` VARCHAR(100) NOT NULL , 
 `DOB` VARCHAR(100) NOT NULL , 
 `Acc.CreatedOn` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
 `Status` VARCHAR(100) NOT NULL ,
 `Acc.CreatedBy` VARCHAR(100) NOT NULL , 
 PRIMARY KEY (`ID`))" ;

$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The tables was created successfully!<br>";
}
else{
    echo "The tables was not created successfully because". mysqli_error($conn);
}
?>