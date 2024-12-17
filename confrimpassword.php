<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            width:100%;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.9)),
            url(./assets/images/bg2.jpg);
            background-position: center;
            background-size: cover;
                      
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="password"] {
            width: 90%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        #error-message {
            color: #red;
            font-size: 14px;
            margin-top: 10px;
        }

        #success-message {
            color: #green;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Password</h2>
        <form action="index.php" method="post">
            <input type="password" name="new_password" placeholder="New Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <button type="submit">Update Password</button>
        </form>
        <p id="error-message"></p>
        <p id="success-message"></p>
    </div>
</body>
</html>

<?php
session_start();

/*if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}*/

// Check if the new password and confirm password match
if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password == $confirm_password) {
        // Update the user's password in the database
        $user_id = $_SESSION['email'];
        

        $db = mysqli_connect('localhost', 'root', '', 'ticketbooking');
        $query = "UPDATE signup SET password = '$new_password' WHERE email = '$user_id'";
        mysqli_query($db, $query);
        mysqli_close($db);

        // Display a success message
        $success_message = 'Password updated successfully!';
        session_abort();
        session_destroy();
    } else {
        // Display an error message
        $error_message = 'Passwords do not match. Please try again.';
    }
}

?>
