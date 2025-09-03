<!DOCTYPE html> 
<html> 
<head> 
    <title>Sign Up</title> 
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <style type="text/css"> 
        body { 
            background-image: url("https://www.mdc.edu/medicaltechnology/img/clinical-laboratory.jpg");
            background-size: cover;
            font-family: Times New Roman, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #192a56; /* Dark bluish background color */
        } 
        .card {
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: rgba(0, 12, 25, 0.6); /* Bluish semi-transparent background */
            color: #fff; /* White text color */
        }
        .btn-primary {
            background-color: #0a3d62; /* Dark bluish button color */
            border-color: #0a3d62; /* Dark bluish button border color */
            width: 100%;
            margin-top: 20px;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0e4a75; /* Dark bluish button color on hover */
            border-color: #0e4a75; /* Dark bluish button border color on hover */
        }
        .signup-link {
            text-align: center;
            margin-top: 15px;
        }
        .signup-link a {
            color: #fff; /* White color for the signup link */
            text-decoration: underline;
        }
        .form-group label {
            font-weight: bold;
            color: #fff; /* White color for form labels */
        }
        .text-center.mb-4 {
            font-family: 'BernhardFashion BT', serif; /* BernhardFashion BT font */
            font-weight: bold; /* Bold font weight */
        }
    </style> 
</head> 
<body> 
    <div class="card">
        <h3 class="text-center mb-4">SIGN UP</h3>
        <form action="Login.php" method="post"> <!-- Corrected the action to point to Login.php -->
            <div class="form-group"> 
                <label for="name">Name:</label> 
                <input type="text" name="name" id="name" class="form-control" required> 
            </div>
            <div class="form-group"> 
                <label for="email">Email ID:</label> 
                <input type="email" name="email" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="password" name="password" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="confirm_password">Confirm Password:</label> 
                <input type="password" name="confirm_password" class="form-control" required> 
            </div>           		
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </form>
        <div class="signup-link">
            <p>Already have an account? <a href="Login.php">Login</a></p>
        </div>
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = ""; // Replace with your database password
    $dbname = "lab_rms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if(isset($_POST['signup'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Insert data into database
        $sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            // Redirect to login page after successful sign up
            header("Location: Login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>

    <script>
        // Store user's name in local storage after signup
        document.querySelector('form').addEventListener('submit', function() {
            localStorage.setItem('userName', document.getElementById('name').value);
        });
    </script>
</body> 
</html>
