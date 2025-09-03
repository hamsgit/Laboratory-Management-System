<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your database password
$dbname = "Lab_rms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// PHP code for handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate input fields and save changes if valid
    if ($name && $email && $password && $newPassword && $newPassword === $confirmPassword) {
        // Verify the current password before updating
        $sql_verify = "SELECT * FROM user_profile WHERE email='$email' AND password='$password'";
        $result_verify = $conn->query($sql_verify);

        if ($result_verify->num_rows > 0) {
            // Update the user profile with the new password
            $sql_update = "UPDATE user_profile SET name='$name', email='$email', password='$newPassword' WHERE email='$email'";

            if ($conn->query($sql_update) === TRUE) {
                echo "Profile updated successfully!";
            } else {
                echo "Error updating profile: " . $conn->error;
            }
        } else {
            echo "Incorrect current password!";
        }
    } else {
        echo "Please fill in all fields and make sure passwords match!";
    }
}

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #192a56;
            color: #fff;
            padding: 20px;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgba(0, 12, 25, 0.6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }
        h1 {
            text-align: center;
            color: #73C6B6; /* Light bluish text color */
        }
        .profile-details {
            margin-top: 20px;
        }
        .profile-details label {
            font-weight: bold;
            display: inline-block;
            width: 100px; /* Adjust width as needed */
            color: #73C6B6; /* Light bluish text color */
        }
        .profile-details p {
            margin: 5px 0;
            display: inline-block;
            width: calc(100% - 120px); /* Adjust width to accommodate label width */
            vertical-align: top;
        }
        .edit-button {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #0a3d62; /* Dark bluish button color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .edit-button:hover {
            background-color: #0e4a75; /* Dark bluish button color on hover */
        }
        /* Dialog Box Styles */
        .dialog-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .dialog-box {
            position: relative;
            width: 400px;
            background-color: #fff;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
        }
        .dialog-box h2 {
            margin-top: 0;
            color: #192a56; /* Dark blue text color */
        }
        .dialog-box label {
            display: block;
            margin-bottom: 5px;
            color: #192a56; /* Dark blue text color */
        }
        .dialog-box input {
            width: calc(100% - 12px);
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .dialog-box .password-toggle {
            position: absolute;
            top: 66px;
            right: 10px;
            cursor: pointer;
        }
        .dialog-box button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #0a3d62; /* Dark bluish button color */
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .dialog-box button:hover {
            background-color: #0e4a75; /* Dark bluish button color on hover */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>User Profile</h1>
        <div class="profile-details">
            <label>Name:</label>
            <p id="userName">John Doe</p>
            <label>Email:</label>
            <p id="userEmail">john@example.com</p>
            <!-- Add more profile details here as needed -->
        </div>
        <button class="edit-button" onclick="openDialog()">Edit Profile</button>
    </div>

    <!-- Dialog Box -->
    <div class="dialog-container" id="dialogContainer">
        <div class="dialog-box">
            <h2>Edit Profile</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="password-toggle" onclick="togglePassword('password')">View</span>
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword">
                <span class="password-toggle" onclick="togglePassword('newPassword')">View</span>
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                <span class="password-toggle" onclick="togglePassword('confirmPassword')">View</span>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>

    <script>
        // Retrieve user details from local storage
        var userName = localStorage.getItem('userName');
        var userEmail = localStorage.getItem('userEmail');

        // Populate user details in the HTML elements
        document.getElementById('userName').textContent = userName;
        document.getElementById('userEmail').textContent = userEmail;

        // Function to open the dialog box
        function openDialog() {
            document.getElementById('dialogContainer').style.display = 'block';
        }

        // Function to toggle password visibility
        function togglePassword(inputId) {
            var input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>
</body>
</html>
