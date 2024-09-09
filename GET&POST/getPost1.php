

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: grid;
            place-items: center;
        }
        form{
            width: 200px;
            height: 300px;
            border: 2px solid black;
           
            background-color: lightblue;
            
           
        }
        
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="getPost.php" method="get">
        <h2>Sign In</h2>
        <div>

            <label for="">Email id</label>
            <input type="text" name="name" id="" placeholder="Enter email id">
            
            <label for="">Password</label>
            <input type="password" name="pass" id="" placeholder="Password">
            <br>
            <br>
            <input type="submit" name="button" value="save">



            
        </div>
    </form>

</body>
</html>