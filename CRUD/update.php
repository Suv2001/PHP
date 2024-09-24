<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        display: grid;
        
    }
    h1{
       text-align: center;
    }
    #serByID{
        width: 500px;
        height: 100px;
        margin: 0 auto;
        background-color: rgba(53, 53, 53,0.5);
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
    }
    
    
    #search{

        width: 500px;
        height: 400px;
        background-color:rgba(53, 53, 53,0.5);
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        
    }
    input{
        flex: 1;
        width: 250px;
    }
    label{
        flex: 1;
        display: block;
        align-content: start;
    }
    #sid{
        flex: 0;
        height: 50px;
        width: 300px;
        flex-grow: 2;
    }

    #sidSer{
        flex: 0;
        height: 50px;
        width: 100px;
        /* flex-grow: 2; */
    }
</style>
<body>
<?php
include "nav.php";
include 'connection.php';
?>
    <h1>Update Students Details</h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div id="serByID">
                <label for="">Serach By ID</label>
                <input type="number" name="sid" id="sid">
                <input type="submit" value="Search" name="sidSer" id="sidSer">
            </div>
            
            
        </form>


    
    
<?php


$id = $_GET['id'];
echo $id;

$sql = "SELECT * FROM student WHERE id = $id";
$result = mysqli_query($conn, $sql) or die("Unable to run the query ");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
        ?>
        
        

        <br><br>
        <form id="search" action="" method="post">
            <label for="">Name</label>
            <input type="text" name="name" id="" value="<?php echo $row['name']; ?>" >
            <label for="">Roll</label>
            <input type="text" name="roll" id="" value="<?php echo $row['roll']; ?>">
            <label for="">Section</label>
            <input type="text" name="sec" id="" value="<?php echo $row['sec']; ?>" >
            <label for="">Select Course</label>
            <select name="course" id="">
                <option value="BCA" <?php if($row['course'] == 'BCA') echo 'selected'; ?>>BCA</option>
                <option value="BTech" <?php if($row['course'] == 'BTech') echo 'selected'; ?>>BTech</option>
                <option value="MTech" <?php if($row['course'] == 'MTech') echo 'selected'; ?>>MTech</option>
                <option value="PHD" <?php if($row['course'] == 'PHD') echo 'selected'; ?>>PHD</option>
            </select>
            <label for="">Phone</label>
            <input type="text" name="phone" id="" value="<?php echo $row['phone']; ?>">
            <br>
            <input type="submit" style="background-color: greenyellow;" value="Update" name="update">
        </form>
        <?php
    }
}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $sec = $_POST['sec'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE student SET name = '$name', roll = '$roll', sec = '$sec', phone = '$phone', course = '$course' WHERE id = '$id'";
    if(mysqli_query($conn,$sql)){
        echo "Updated successfully";
       
        header("Location: http://localhost/PHP_Folder/PHP/CRUD/read.php");
    } else{
        echo "Unable to update";
    }
}
?>


</body>
</html>
