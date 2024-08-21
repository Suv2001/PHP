<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dataBaseName = "mycontacts";

$conn = mysqli_connect($serverName, $userName, $userPassword, $dataBaseName);
if(!$conn)
{
    die("Connection faild". mysqli_connection_error());
}

function alert($result)
{
  
  if($result)
  {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Contact submitted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';}
}

if($_SERVER["REQUEST_METHOD"] == "POST" )
{
  $fname = $_POST["fName"];
  $mname = $_POST["mName"];
  $lname = $_POST["lName"];
  $mobileNumber = $_POST["mNumber"];
  $email = $_POST["emailId"];
  $sql = "INSERT INTO contacts (First_name, Middle_name, Last_name, Phone_number, Email_id)
VALUES ('$fname', '$mname', '$lname', '$mobileNumber', '$email')
";
  // echo $sql;

    $result = mysqli_query($conn,$sql);
    alert($result);

}


?>
<!doctype html>
<html lang="en">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Contact</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Contact</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
       
      </ul>
    </div>
</div>
</nav>


   <div class="container mt-3" >
    <h2>Create New Contact</h2>

       <form action="/crud/caud1.php" method ="post">
           <div class="mb-3">
               <label for="contactName" class="form-label">Fast Name</label>
               <input type="text-area" class="form-control" id="contactName" aria-describedby="emailHelp" name="fName">
               <div id="emailHelp" class="form-text"></div>
            
               <label for="contactName" class="form-label">Middle Name</label>
               <input type="text-area" class="form-control" id="contactName" aria-describedby="emailHelp" name="mName">
               <div id="emailHelp" class="form-text"></div>
           
               <label for="contactName" class="form-label">Last Name</label>
               <input type="text-area" class="form-control" id="contactName" aria-describedby="emailHelp" name="lName">
               <div id="emailHelp" class="form-text"></div>
          
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="phoneNumber" name="mNumber">
                <label for="email" class="form-label">Email ID</label>
                <input type="email" class="form-control" id="email" name="emailId">
            </div>
            
           
            <button type="submit" class="btn btn-primary">Save Contact</button>
        </form>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email ID</th>
    </tr>
  </thead>
  <tbody>


  <?php
  $sql = "SELECT * FROM `contacts`";
  $result = mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_assoc($result))
  { echo "<tr>
    <th scope='row'>". $row['Fast name'] ." " . $row['Middle name'] . $row['Last name'] . "</th>
    <td>". $row['Phone number'] ."</td>
    <td>". $row['Email id'] ."</td>
   
  </tr>";
  }
  ?>

  </body>

</html>