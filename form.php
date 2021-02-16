<?php

    if(isset($_POST['submit']))
    {   
        // Store Form variable
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $favSong = $_POST['favSong'];

        // Displaying User Information
        echo "<h1>User Details</h1>";
        echo "<h3>";
        echo "First Name: ".$firstName."<br/>";
        echo "Last Name: ".$lastName."<br/>";
        echo "Age: ".$age."<br/>";
        echo "Email: ".$email."<br/>";
        echo "Favourite Song: ".$favSong."<br/>";

        if (!filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT)) {
            echo("Age is not number");
        }

        // Checking Inputs are valid or not.
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            echo("Email is not valid");
        } else {
            
            // Messsage variable to hold message
            $message = "";

            $message = $message."<h1>User Details</h1>";
            $message = $message."First Name: ".$firstName."<br/>";
            $message = $message."Last Name: ".$lastName."<br/>";
            $message = $message."Age: ".$age."<br/>";
            $message = $message."Email: ".$email."<br/>";
            $message = $message."Favourite Song: ".$favSong."<br/>";

            // Headers  
            $headers = "From: abc@gmail.com" . "\r\n";

            // function to send mail
            mail($email, "User Registration", $message, $headers);
        }

        
        
    }
?>