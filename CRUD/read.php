<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read From Data Base</title>
    <link rel="stylesheet" href="read.css?v=1.4">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?v=1.5" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    .button{
        background-color: red;
        text-align: center;
        height: 100px;
        width: 60px;
        color: black;
    }
    td{
        height: 40px;
    }
</style>

<body>
   <?php
   include 'nav.php';
   ?>


    <div id="div1" >
    <?php
    include 'connection.php';
        $sql = "SELECT * FROM `student`;";

        $result = mysqli_query($conn,$sql) or die("Invalid Query");

        if(mysqli_num_rows($result) > 0){

    ?>
        <table>
            <thead>
                <th>SLNo</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Sec</th>
                <th>Course</th>
                <th>Phone</th>
                <th>Action</th>


            </thead>
            <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['roll']; ?></td>
                        <td><?php echo $row['sec']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td id="tdbutton">
                            <a class="button" href="update.php? id=<?php echo $row['id']; ?>" >Edit</a>
                            <a class="button"  href="">Delete</a>

                        </td>
                       
                    
                    </tr>
                    <?php } ?>
            </tbody>


            
        </table>
        <?php } else{
            echo "<h2>No data Found</h2>";
        }
        mysqli_close($conn);
        
        ?>
    </div>
   </body>
</html>

