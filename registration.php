<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 13px;
            margin-top: 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
  <div>
    <form method="post" enctype="multipart/form-data">
        <h2>Student Information Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="rollno">Roll No:</label>
        <input type="text" id="rollno" name="rollno" required>

        <label for="enrollmentno">Enrollment No:</label>
        <input type="text" id="enrollmentno" name="enrollmentno" required>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section" required>

        <label for="stream">Stream:</label>
        <input type="text" id="stream" name="stream" required>

        <label for="interest">Area of Interest:</label>
        <input type="text" id="interest" name="interest" required>

        <label for="session">Session:</label>
        <input type="text" id="session" name="session" required>

        <label for="image">Image:</label>
        <input type="file" name="image" required/>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student_db";
        // Database connection
        $conn = mysqli_connect("localhost", "username", "password", "database");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $conn->real_escape_string($_POST['name']);
        $rollno = $conn->real_escape_string($_POST['rollno']);
        $enrollmentno = $conn->real_escape_string($_POST['enrollmentno']);
        $section = $conn->real_escape_string($_POST['section']);
        $stream = $conn->real_escape_string($_POST['stream']);
        $interest = $conn->real_escape_string($_POST['interest']);
        $session = $conn->real_escape_string($_POST['session']);

        $image = $_FILES['image']['name'];
        $target = "uploads/" . basename($image);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

        // Validate image file type
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
            // Check the image properties
            $info = getimagesize($_FILES['image']['tmp_name']);
            if(isset($info['mime'])){
                if($info['mime'] == "image/jpeg"){
                    $img = imagecreatefromjpeg($_FILES['image']['tmp_name']);
                } elseif($info['mime'] == "image/png"){
                    $img = imagecreatefrompng($_FILES['image']['tmp_name']);
                } else {
                    echo "Only select jpg or png image";
                }
                if(isset($img)){
                    $output_image = "uploads/" . time() . '.jpg';
                    imagejpeg($img, $output_image, 40);
                    echo "Processing done";

                    // Store the output image path in the database
                    $sql = "INSERT INTO students (name, roll_no, enrollment_no, section, stream, area_of_interest, session, image, status)
                            VALUES ('$name', '$rollno', '$enrollmentno', '$section', '$stream', '$interest', '$session', '$output_image', 'pending')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Record added successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            } else {
                echo "Only select jpg or png image";
            }
        } else {
            echo "Only JPG, JPEG, and PNG files are allowed.";
        }

        $conn->close();
    }
    ?>
</div>
</body>
</html>
