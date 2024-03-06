<html>
  <head>
      <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!--Bootstrap CSS,js,jquery-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
  </head>
<body>
<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $fathername = $_POST['fathername'];
     $phoneno = $_POST['phoneno'];
     $email = $_POST['email'];
     $class = $_POST['class'];
     $gender = $_POST['gender'];
     $note = $_POST['note'];
     $DOB = $_POST['DOB'];
     $AccCreatedOn = $_POST['AccCreatedOn'];
     $status = $_POST['status'];
     $createdby = $_POST['createdby'];

// Connecting to the DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "shivansh2k24";

// Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// if connection was not successful
if (!$conn){
    die("Failed to connect". mysqli_connect_error());
}else{
    echo "Connection was successful";
}
//submit data to DB
// Sql query
$sql = "INSERT INTO `userdetails` (`Name`, `FathersName`, `Phone.no`, `Email`, `Class`, `Gender`, `Note`, `DOB`, `Acc.CreatedOn`, `Status`, `Acc.CreatedBy`) 
                          VALUES ('$name','$fathername','$phoneno','$email','$class','$gender','$note','$DOB','$AccCreatedOn','$status','$createdby')";
$result = mysqli_query($conn, $sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Successfully Added!</strong>Your details has been added successfully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
}
else{
    echo "Your data was not inserted successfully because". mysqli_error($conn);
}
}
?>
  <div class="container mt-4">
  <h1>Fill Details</h1>
<form action="regestration.php" method="post">
    <div class="form-group">
      <label for="name" class="form-label"><span style="color:black;font-weight:bold">Student Name:-</span></label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required>
    </div>
    <div class="form-group">
      <label for="fathername" class="form-label"><span style="color:black;font-weight:bold">Father's Name:-</span></label>
      <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter your Father'sName"required>
    </div>
    <div class="form-group">
      <label for="phoneno" class="form-label"><span style="color:black;font-weight:bold">Phone.No:-</span></label>
      <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter your Phone No." required>
    </div>
    <div class="form-group">
      <label for="email" class="form-label"><span style="color:black;font-weight:bold">Email:-</span></label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
    </div>
    <div class="form-group">
      <label for="class" class="form-label"><span style="color:black;font-weight:bold">Select Class:-</span></label>
      <select id="class" name="class" class="form-select" required>
        <option value="Select Class">Select Class</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        <option value="5th">5th</option>
        <option value="6th">6th</option>
        <option value="7th">7th</option>
        <option value="8th">8th</option>
        <option value="9th">9th</option>
        <option value="10th">10th</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
      </select>
    </div>
    <label for="gender" class="form-label" required><span style="color:black;font-weight:bold">Select Gender:-</span></label>
      <div name="gender" id="gender" class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
          <label class="form-check-label" for="gridRadios3">
          Other
          </label>
        </div>
        <div class="form-group">
         <label for="note" class="form-label" required><span style="color:black;font-weight:bold">Note:-</span></label>
         <textarea class="form-control" name="note" id="note" rows="5" placeholder="Add your Note Here"></textarea>
        </div>
        <div class="form-group">
         <label for="DOB" class="form-label"><span style="color:black;font-weight:bold">Date of Birth(DOB):-</span></label>
         <input type="date" class="form-control" name="DOB" id="DOB" required>
        </div>
        <div class="form-group">
         <label for="Acc.CreatedOn" class="form-label"><span style="color:black;font-weight:bold">Account Created On:-</span></label>
         <input type="datetime-local" class="form-control" name="AccCreatedOn" id="AccCreatedOn" required>
        </div>
        <div class="form-group">
         <label for="status" class="form-label"><span style="color:black;font-weight:bold">Status:-</span></label>
         <select id="status" name="status" class="form-select" required>
          <option value="Select Status">Select Status</option>
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
         </select>
        </div>
        <div class="cform-group">
         <label for="createdby" class="form-label"><span style="color:black;font-weight:bold">CreatedBy:-</span></label>
         <input type="text" class="form-control" name="createdby" id="createdby" required>
        </div>
        <div class="form-group">
        <div class="form-check">
         <input class="form-check-input" type="checkbox" id="termandcondition" required>
         <label class="form-check-label" for="gridCheck"><span style="color:black;font-weight:bold">Terms and Conditions</span></label>
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
   <?php
   // Sql query
     $sql = "SELECT * FROM `userdetails`";
     $result = mysqli_query($conn, $sql);
   // Find the number of records returned
     $num = mysqli_num_rows($result);
     echo "<span style='color:black;font-weight:bold'>Total $num Datas are found in DB.</span>";
     echo "<br>";
     /*
      // Display the data returned by the sql query from DB
       while($row = mysqli_fetch_assoc($result)){
        echo $row['ID'] . $row['Name'] . $row['FathersName'] . $row['Phone.no'] . $row['Email'] . $row['Class'] . $row['Gender'] . $row['Note'] . $row['DOB'] . $row['Acc.CreatedOn'] . $row['Status'] . $row['Acc.CreatedBy'];
         echo "<br>";
      }
     */
   ?>
<!--Table of DB data on web page-->
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">FathersName</th>
      <th scope="col">Phone.no</th>
      <th scope="col">Email</th>
      <th scope="col">Class</th>
      <th scope="col">Gender</th>
      <th scope="col">Note</th>
      <th scope="col">DOB</th>
      <th scope="col">Acc.CreatedOn</th>
      <th scope="col">Status</th>
      <th scope="col">Acc.CreatedBy</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
 <tbody>
  <?php 
    $sql = "SELECT * FROM `userdetails`";
    $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
           <th scope='row'>" . $row['ID'] . "</th>
            <td>" . $row['Name'] . "</td>
            <td>" . $row['FathersName'] . "</td>
            <td>" . $row['Phone.no'] . "</td>
            <td>" . $row['Email'] . "</td>
            <td>" . $row['Class'] . "</td>
            <td>" . $row['Gender'] . "</td>
            <td>" . $row['Note'] . "</td>
            <td>" . $row['DOB'] . "</td>
            <td>" . $row['Acc.CreatedOn'] . "</td>
            <td>" . $row['Status'] . "</td>
            <td>" . $row['Acc.CreatedBy'] . "</td>
            <td>
             <a href='edit.php?id=" . $row['ID'] ."' class='btn btn-primary'>Edit</a> 
            </td>
            <td>
             <a href='delete.php?id=" . $row['ID'] ."' class='btn btn-danger'>Delete</a> 
            </td>
          </tr>";
        } 
        /*
        //pagination----------
        //database connection  
         $conn = mysqli_connect('localhost', 'root', '','shivansh2k24');  
          if (! $conn) {  
           die("Connection failed" . mysqli_connect_error());  
          }else {mysqli_select_db($conn, 'shivansh2k24');  
          }
        //define total number of results you want per page  
          $results_per_page = 10;  
  
        //find the total number of results stored in the database  
          $sql = "SELECT * FROM `userdetails`";
          $result = mysqli_query($conn, $sql);   
          $number_of_result = mysqli_num_rows($result);  
  
        //determine the total number of pages available  
          $number_of_page = ceil ($number_of_result / $results_per_page);  
  
        //determine which page number visitor is currently on  
          if (!isset ($_GET['page']) ) {  
           $page = 1;  
          } else {  
           $page = $_GET['page'];  
          }  
  
        //determine the sql LIMIT starting number for the results on the displaying page  
          $page_first_result = ($page-1) * $results_per_page;  
  
        //retrieve the selected results from database   
          $sql = "SELECT * FROM `userdetails` . $page_first_result . $results_per_page";  
          $result = mysqli_query($conn, $sql);  
      
        //display the retrieved result on the webpage  
          while ($row = mysqli_fetch_array($result)) {
            echo $row['ID'] . $row['Name'] . $row['FathersName'] . $row['Phone.no'] . $row['Email'] . $row['Class'] . $row['Gender'] . $row['Note'] . $row['DOB'] . $row['Acc.CreatedOn'] . $row['Status'] . $row['Acc.CreatedBy'];
            echo "<br>";    
          }  
  
        //display the link of the pages in URL  
          for($page = 1; $page<= $number_of_page; $page++) {  
           echo '<a href = "index.php?page=' . $page . '">' . $page . ' </a>';  
          }
          */
  ?>
 </tbody>
</table>
  </div>
    <!--ptional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>