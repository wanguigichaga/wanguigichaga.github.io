<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Information Form</title>
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

    <form action="pet.php" method="post" class="row g-3">
       
        <h1>Pet Information</h1>
        <br><br><br>
        <!-- First Column -->
        <div class="col">
        <label for="petId">Pet ID:</label>
        <input type="text" name="petId" required>
        </div>

         <div class="col">
        <label for="petName">Pet Name:</label>
        <input type="text" name="petName" required>
        </div>

        
        <div class="col">
        <label for="age">Age in months:</label>
        <input type="text" name="age" required>
        </div>

         <div class="col">
        <label for="sex">Sex:</label>
        <input type="text" name="sex" required>
        </div>
        

         <div class="col">
        <label for="type">Type:</label>
        <input type="text" name="type" required>
        </div>

         <div class="col">
        <label for="species">Species:</label>
        <input type="text" name="species" required>
        </div>

        
        <div class="col">
        <label for="baseColor">Base color:</label>
        <input type="text" name="baseColor" required>
        </div>

         <div class="col">
        <label for="coatType">Coat type:</label>
        <input type="text" name="coatType" required>
        </div>
        
         <div class="col">
        <label for="unitNo">Unit No.:</label>
        <input type="text" name="unitNo" required>
        </div>

         <div class="col">
        <label for="dateBroughtIn">Date brought in:</label>
        <input type="date" name="dateBroughtIn" required>
        </div>

        
        <div class="col-md-6">
        <label for="baseColor">Base color:</label>
        <input type="text" name="baseColor" required>
        </div>

         <div class="col-md-6">
        <label for="status">Status:</label>
        <input type="text" name="status" required>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

</body>
</html>
