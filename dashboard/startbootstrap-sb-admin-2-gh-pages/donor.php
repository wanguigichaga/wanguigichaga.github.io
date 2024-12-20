<?php 
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telphone = $_POST['telphone'];
        $method = $_POST['method'];
        $purpose = $_POST['purpose'];
        $message = $_POST['message'];


        if(!empty($name) && !empty($email) && !is_numeric($name))
        {               

            //save to database
            
            $sql = "INSERT INTO donor (name, email, telphone, method, purpose, message) 
        VALUES ( '$name', '$email', '$telphone', '$method', '$purpose' , '$message' )";

            mysqli_query($con, $sql);

            header("Location: donor.php");
            
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
            


            
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation and Fundraising Form</title>
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
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
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
         textarea {
            
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

        button {
            background-color: #0a42fa;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
          cursor: pointer;
          background-color: #4caf50;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="donor.php" method="post">
        <h1>Donations</h1>
        <br>
        <label for="donorName">Donor Name:</label>
        <input type="text" name="name" required>

        <label for="donorEmail">Email:</label>
        <input type="email" name="email" required>

        <label for="donorPhone">Phone Number:</label>
        <input type="tel" name="telphone" required>

        <label for="donationAmount">Donation Amount:</label>
        <input type="number" name="amount" min="0" placeholder="Kshs ..."required>
        


        <label for="paymentMethod">Payment Method:</label>
        <input type="text" name="method" placeholder="Mpesa,visa" required>
        

        <label for="donationPurpose">Donation Purpose:</label>
        <textarea name="purpose" required></textarea>

        <label for="message">Message (optional):</label>
        <textarea name="message"></textarea>

        

        <button type="submit">Submit Donation</button>
    </form>

</body>
</html>
