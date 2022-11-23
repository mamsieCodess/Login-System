<?php
$user = 0; //initially the user doesn't exists

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //make a connection to the database
    include "includes/config/database.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //firstly check if the person with such details exist
    $sql = "SELECT `*` FROM `user_details` WHERE `email` = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = 1; //they match, it means such a user already exists
    } else {

        $sql = "INSERT INTO `user_details`(firstname,lastname,email,password)
    VALUES (?,?,?,?) "; //placeholders
        $stmt = $conn->prepare($sql); //prepared statement
        $stmt->bind_param('ssss', $firstname, $lastname, $email, $password); //bind parameters
         //then start a session with the entered details in session variables
         session_start();
         $_SESSION['firstname'] = $firstname;
         $_SESSION['lastname'] = $lastname;
         $_SESSION['email'] = $email;
         $_SESSION['password'] = $details['password'];
        $stmt->execute();
        header('location:views/homepage.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Page</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            background-color: #9EBC9F;
        }

        .form-wrapper {
            margin-top: 150px;
            width: 300px;
            padding: 5px;
        }

        h2 {
            text-align: center;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            text-align: center;
            font-size: medium;
            background-color: #E6EBE0;
            height: 40px;
            width: 100%;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.9) 0px 3px 8px;

        }

        input:hover {
            border-radius: 0 20px;
        }

        #sign-up-button {
            background-color: #537055;
            font-weight: bolder;
        }

        #sign-up-button:hover {
            background-color: #537055;
            width: 90%;
            margin: 0 10px;
            border-radius: 0;
        }

        #submit-button-container {
            height: 40px;
        }

        p {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: gray;
            margin-left: 5px;

        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <section class="form-wrapper">
        <h2>Sign Up</h2>
        <div class="form-container">    
            <form action="index.php" method="POST">
             <?php if ($user > 1){echo 'This email already exists';} ?>
                <input type="text" name="firstname" placeholder="Name" required><br><br>
                <input type="text" name="lastname" placeholder="Surname" required><br><br>
                <input type="email" name="email" placeholder="Email address" required><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <div id="submit-button-container"><input type="submit" value="Sign up" id="sign-up-button"></div>
            </form>
            <p>Already have an account?<a href="views/login.php">Login</a></p>
        </div>
    </section>
</body>

</html>