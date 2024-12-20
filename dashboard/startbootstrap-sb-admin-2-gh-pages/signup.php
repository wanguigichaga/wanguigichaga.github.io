<?php 
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $telphone = $_POST['telphone'];
        $role = $_POST['role'];
        $password = $_POST['password'];


        if(!empty($name) && !empty($password) && !is_numeric($name))
        {               

            //save to database
            $user_id = random_num(20);
            $sql = "INSERT INTO users (user_id, name, email, age, telphone, role, password) 
        VALUES ('$user_id', '$name', '$email', '$age', '$telphone', '$role', '$password')";

            mysqli_query($con, $sql);

            
            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
            


            
       }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('pet.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        select {
           width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #button {
            background-color: #0a42fa;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #button:hover {
          cursor: pointer;
          background-color: #4caf50;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    

    <div id="box">
        
       <form action="signup.php" method="post">
        <br><br>

        <h1>SIGN UP</h1>
       

        <label for="fullname">Full Name:</label>
        <input type="text" id="name"name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="donorPhone">Phone Number:</label>
        <input type="tel" id="telphone" name="telphone" required>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>
       

    <br>
    <br>




        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

       <input id="button" type="submit" value="Signup">
        <a href="login.php">Click to Login</a><br><br>
    </form>
    </div>
</body>
</html>