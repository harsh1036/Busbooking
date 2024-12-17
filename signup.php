<?php

if (isset($_POST['submit'])) 
{
    $conn = mysqli_connect("localhost","root","","ticketbooking");
    if(! $conn)
    {
        exit(die("Connection Failed : ".mysqli_connect_error()));
    }
    echo "Connected Successfully<br>";
    mysqli_select_db($conn,'ticketbooking');
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['conpass'];
    if($pass == $cpass)
    {
        $que = "INSERT INTO signup(`email`, `password`) VALUES ('$email','$pass')";
        $quer = mysqli_query($conn,$que);
        if ($quer) 
        {
            
            session_start();
            $_SESSION["user_id"] = $email;
            header('Location: index.php');
            
            session_abort();
            
        }
        else
        {
            mysqli_connect_error();
        }
    }
    else 
    {   
        echo "error...";
        mysqli_connect_error();
    }
        
}
?>









