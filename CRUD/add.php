
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<style>

body{
    width: 100%;
    height: 100vh;
    
}



#main {
    display: grid;
    place-items: center;
  width: 100%;
  height: 300px;
  flex-direction: row;
  margin: auto;
  margin-top: 100px;
}

#child {

}


</style>
<body>
    <?php
    include 'nav.php';
    ?>

    <div class="card" style="width: 18rem;" id="main">
        <form action="add.php" method="post">
            <div class="card-body" id="child">
                <h5 class="card-title">Student Data</h5>
                <label for="">Enter Name</label>
                <input type="text" name="name" id="">
                <label for="">Enter Roll</label>
                <input type="text" name="roll" id="">
                <label for="">Enter Section</label>
                <input type="text" name="sec" id="">
                <input type="submit" value="Submit" name="button">

                
            </div>
        </form>
</div>


</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['button']) && $_POST['button'] == "Submit"){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sec = $_POST['sec'];
    $sql = "INSERT INTO `student` ( `name`, `roll`, `sec`) VALUES ('$name', '$roll', '$sec');";
    if(mysqli_query($conn , $sql)) {
        echo "Student data submitted successfully";
    } else{
        echo "Unable to Upload Student Data";
    }
}
mysqli_close($conn);
?>
