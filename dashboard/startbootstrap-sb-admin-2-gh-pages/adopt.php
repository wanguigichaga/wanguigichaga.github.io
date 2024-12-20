<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption and Fostering Form</title>
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

    <form action="adopt.php" method="post" class="row g-3">
        
        <h1>Adotion and fostering</h1>
        <br>
        <div class="col">
        <label for="applicantName">Applicant Name:</label>
        <input type="text" name="applicantName" required>
</div>
<div class="col">
        <label for="applicantEmail">Email:</label>
        <input type="email" name="applicantEmail" required>
</div>
<div class="col">
        <label for="applicantPhone">Phone Number:</label>
        <input type="tel" name="applicantPhone" required>
</div>
<div class="col">
        <label for="address">Address:</label>
        <textarea name="address" required></textarea>
</div>
<div class="col">
        <label for="residenceType">Type of Residence:</label>
        <input type="text" name="residenceType" placeholder="House,Apartment" required>
        
</div>
<div class="col">
        <label for="petPreference">Pet Preference:</label>
        <textarea name="petPreference"></textarea>
</div>
<div class="col">
        <label for="experience">Pet Care Experience:</label>
        <textarea name="experience"></textarea>
</div>
<div class="col">
        <label for="reason">Reason for Adoption/Fostering:</label>
        <textarea name="reason" required></textarea>
</div>
<div class="col">
        <label for="currentPets">Current Pets (if any):</label>
        <textarea name="currentPets"></textarea>
</div>
<div class="col">
        <label for="vetReference">Veterinarian Reference (if applicable):</label>
        <textarea name="vetReference"></textarea>
</div>
<div class="col">
        <label for="timeCommitment">Time Commitment:</label>
        <input type="text" name="timeCommitment">
</div>
<div class="col">
        <label for="awareness">Awareness of Responsibilities:</label>
        <textarea name="awareness" required></textarea>
</div>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
