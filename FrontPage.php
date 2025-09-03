<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory Reservation Management System - Home</title>
    <style>
        body {        
            background-image: url("https://www.valpo.edu/college-of-engineering/files/2020/09/Environmental1.jpg");
            background-size: cover;
            background-color: rgba(0, 12, 25, 0.6); /* Bluish semi-transparent background */
            color: #fff; /* White text color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: rgba(60, 28, 10, 0.8); /* Light semi-transparent background for the box */
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }
        h1 {
            margin-bottom: 30px;
            font-family: "Times New Roman", sans-serif; /* Comic Sans MS font */
            font-weight: bold;
        }
        .button {
            padding: 10px 20px;
            font-size: 18px;         
            background-color: #5A1C0A; /* Brown button color */
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-right: 15px; /* Increased margin for better separation */
            font-family: 'Eras Bold ITC', serif; /* Eras Bold ITC font */
        }
        .button:hover {
            background-color: #2E0D05; /* Darker brown button color on hover */
            border-color: #2E0D05; /* Darker brown button border color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LABORATORY RESERVATION MANAGEMENT SYSTEM</h1>
        <button class="button" onclick="window.location.href='Login.php'">Login</button>
        <button class="button" onclick="window.location.href='Signup.php'">Signup</button>
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lab_rms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
