
<?php 
        if(isset($_POST["submit"]))
        {
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";

            $file_name = $_FILES["image"]["name"];
            $file_size = $_FILES["image"]["size"];
            $file_type = $_FILES["image"]["type"];
            $file_tempname = $_FILES["image"]["tmp_name"];

            echo  $file_name . $file_size. $file_type ;

            move_uploaded_file($file_tempname, "Upload-image/".$file_name);
        }
    
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <form action="" method="POST"  enctype="multipart/form-data">
        <label for="">Upload photo</label>
        <br><br>
        <input type="file" name="image" id="">
        <br><br>
        <input type="submit" name="submit" >
    </form>

    
</body>
</html>