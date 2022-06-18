<?php
    //validate if user clicked submit button
    if(isset($_GET["submit"]))
    {
        //create variables for form data
        $fname = trim($_GET["fname"]);
        $lname = trim($_GET["lname"]);
        $email = trim($_GET["email"]);
        $showtime=$_GET["showtime"];
        $dob = $_GET["dob"];

        //Form validation goes here
        
        //Insert data functions start here
        require("conn.php");

        //Create variable for query
        $sql = "INSERT INTO registration (first_name, last_name, email, showtime, dob) 
        VALUES ('$fname', '$lname', '$email', '$showtime', '$dob');";

        //Testing if query is valid
        if(!mysqli_query($connection, $sql))
        {
            die("Error inserting user into registration");
        }
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>" .  "User successfully inserted into registration." . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    
    }