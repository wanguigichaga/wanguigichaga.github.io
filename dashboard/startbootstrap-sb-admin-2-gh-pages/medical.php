<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Records Form</title>
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

    <form action="medical.php" method="post" class="row g-3" >
        <h1>Medical Records</h1>
        <br><br><br>

        <div class="col">
        <label for="petName">Pet Name:</label>
        <input type="text" name="petName" required>
    </div>

        <div class="col">
        <label for="species">Species:</label>
        <input type="text" name="Species" required>
        
    </div>

        <div class="col">
        <label for="breed">Breed:</label>
        <input type="text" name="breed">
    </div>

        <div class="col">
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>

        <div class="col">
        <label for="weight">Weight (in kgs):</label>
        <input type="text" name="weight">
    </div>

        <div class="col">
        <label for="vaccinations">Vaccinations:</label>
        <textarea name="vaccinations"></textarea>
    </div>

        <div class="col">
        <label for="medications">Medications:</label>
        <textarea name="medications"></textarea>
    </div>

        <div class="col">
        <label for="medicalHistory">Medical History:</label>
        <textarea name="medicalHistory"></textarea>
    </div>

        <div class="col">
        <label for="nextAppointment">Next Appointment:</label>
        <input type="date" name="nextAppointment">
    </div>

        <div class="col">
        <label for="vetName">Veterinarian Name:</label>
        <input type="text" name="vetName">
    </div>

        <div class="col">
        <label for="contactNumber">Veterinarian Contact Number:</label>
        <input type="tel" name="contactNumber">
    </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
