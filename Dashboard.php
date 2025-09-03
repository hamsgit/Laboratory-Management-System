<!DOCTYPE html> 
<html> 
<head> 
    <title>Dashboard</title> 
    <style type="text/css"> 
        body { 
            background-image: url("https://i.pinimg.com/originals/cc/81/64/cc8164f9dd1e6d705416265c11cf7424.jpg");
            background-size: cover;
            font-family: Times New Roman, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #192a56; /* Dark bluish background color */
            color: #000; /* Black text color */
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            justify-content: flex-start;
            padding-top: 20px;
        } 
        h1 {
            text-align: left;
            margin-bottom: 30px;
            margin-top: 0px;
            font-size: 70px;
            font-family: 'Imprint MT Shadow', serif; /* BernhardFashion BT font */
            font-weight: bold; /* Bold font weight */
            color: #192a56; /* Dark blue text color */
        }
        .tabs {
            display: flex;
            justify-content: center; /* Center buttons horizontally */
            margin-bottom: 20px;
        }
        .tab {
            padding: 20px; /* Adjust button padding */
            font-size: 40px;            
            background-color: #192a56; /* Dark bluish button color */
            color: White; /* Navy font color */
            border: none;
            border-radius: 0px;
            cursor: pointer;
            margin-right: 10px;
            width: 200px; /* Fixed width for buttons */
            text-align: center; /* Center text within buttons */
            font-family: 'Times New Roman', sans-serif; /* Times New Roman font */
        }
        .tab:hover {
            background-color: #73C6B6; /* Light bluish button color on hover */
            border-color: #73C6B6; /* Light bluish button border color on hover */
        }
    </style> 
</head> 
<body> 
    <h1>Welcome, <span id="userName"></span>!</h1> <!-- Display welcome message with user's name -->
        
    <div class="tabs">
        <button class="tab" onclick="window.location.href='profile.php'">Profile</button>
        <button class="tab" onclick="window.location.href='laboratory.php'">Laboratory Details</button>
    </div>

    <script>
        // Retrieve user's name from local storage and display it in the welcome message
        var userName = localStorage.getItem('userName');
        document.getElementById('userName').textContent = userName;
    </script>
</body> 
</html>
