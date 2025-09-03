<?php
// PHP code for handling login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    if(isset($_POST['login'])) {
        // Retrieve form data
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role']; // Assuming you want to capture the role as well

        // Add your login logic here, such as database queries, authentication, etc.
        // For example:
        // 1. Check if the email and password match a record in the database
        // 2. If the login is successful, redirect the user based on their role
        // 3. If the login fails, display an error message

        // For demonstration purposes, let's assume the login is successful
        // Redirect the user based on their role
        if ($role == 'student') {
            header("Location: Dashboard.php");
        } else {
            header("Location: TO_Dashboard.php");
        }
        exit(); // Ensure that subsequent code is not executed after redirection
    }
}
?>


<!DOCTYPE html> 
<html> 
<head> 
    <title>Login</title> 
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
        .custom-control-label {
            margin-left: 10px;
            color: #fff; /* White color for radio button labels */
        }
        .text-center.mb-4 {
            font-family: 'BernhardFashion BT', serif; /* BernhardFashion BT font */
            font-weight: bold; /* Bold font weight */
        }
    </style> 
</head> 
<body> 
    <div class="card">
        <h3 class="text-center mb-4">LOGIN</h3> <!-- Apply BernhardFashion BT font and bold -->
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> <!-- Modified to point to the same PHP file -->
            <div class="form-group"> 
                <label for="email">Email ID:</label> 
                <input type="email" name="email" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="password">Password:</label> 
                <input type="password" name="password" class="form-control" required> 
            </div> 
            <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="student" name="role" class="custom-control-input" value="student" checked>
                    <label class="custom-control-label" for="student">Student</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="technical_officer" name="role" class="custom-control-input" value="technical_officer">
                    <label class="custom-control-label" for="technical_officer">Technical Officer</label>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="Signup.php">Sign up</a></p>
        </div>
    </div>
</body> 
</html>
