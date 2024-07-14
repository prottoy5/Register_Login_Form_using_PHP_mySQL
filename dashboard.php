<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .logout-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #ff4d4d;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .logout-button:hover {
            background-color: #cc0000;
        }    
    </style>
    <style>
        .user_info {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .user_info:hover {
            background-color: darkblue;
        }    
    </style>
    <style>
        .edit_info {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blueviolet;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .edit_info:hover {
            background-color: blueviolet;
        }    
    </style>
</head>
<body>
    <a href="logout.html" class="logout-button">Logout</a>
    <a href="user_info.php" class="user_info">See User Info</a>
    <a href="edit_info.html" class="edit_info">Edit Info</a>
</body>
</html>


