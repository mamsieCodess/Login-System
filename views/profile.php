<?php

session_start();

//to update details
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include "../includes/config/database.php";
    $storedEmail =  $_SESSION['email'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE `user_details` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE `email` =  '$storedEmail' ";
    $result = $conn->query($sql);
    if ($result) {

        echo 'Records updated';

        $sql = "SELECT `*` FROM `user_details`";
        $result = $conn->query($sql);
        $updated = $result->fetch_assoc();

        $_SESSION['firstname'] = $updated['firstname'];
        $_SESSION['lastname'] = $updated['lastname'];
        $_SESSION['email'] = $updated['email'];
        $_SESSION['password'] = $updated['password'];
    } else {
        echo 'Error ' . $conn->error;
    }
}
//to delete the account

if(isset($_POST['delete-button'])){
    include "../includes/config/database.php";
    $storedEmail =  $_SESSION['email'];
    $sql = "DELETE FROM `user_details` WHERE `email` = '$storedEmail'";
    $result = $conn->query($sql);
    if ($result) {
        session_destroy();
        header('location:../index.php');
    }else{
        echo $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {

            background-color: #9EBC9F;
        }

        header {

            height: 50px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            box-shadow: rgba(0, 0, 0, 0.9) 0px 1px 0px;
        }

        header a {
            font-size: larger;
            padding: 10px;
            text-decoration: none;
            color: black;

        }

        header a:hover {
            background-color: rgb(83, 112, 85, 0.5);
            color: white;
        }

        .form-wrapper {
            margin-top: 150px;
            width: 300px;
            padding: 5px;
            margin: 0 auto;
            background-color: rgb(83, 112, 85, 0.5);
            padding: 15px;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        input {
            margin-bottom: 15px;
            text-align: center;
            font-size: medium;
            background-color: #E6EBE0;
            height: 40px;
            width: 100%;
            border: none;
        }

        #update-button {
            margin: 0 auto;
            width: fit-content;
        }

        #update-button:hover {
            border-radius: 0;
            background-color: #537055;
        }

        #update-button-container {
            width: 100%;
            display: flex;
        }

        #delete-button {
            width: fit-content;
        }

        #delete-button:hover {
            background-color: red;
        }
    </style>
</head>

<body>
    <h1>Profile</h1>
    <header>
        <a href="../views/homepage.php" id="profile-button">Home</a>
        <a href="../views/logout.php" id="logout-button">Logout</a>
    </header>
    <section class="form-wrapper">
        <h2>Details</h2>
        <div class="form-container">
            <form action="profile.php" method="POST">
                <input type="text" name="firstname" placeholder="Name" value="<?php echo $_SESSION['firstname']; ?>"><br><br>
                <input type="text" name="lastname" placeholder="Surname" value="<?php echo $_SESSION['lastname']; ?>"><br><br>
                <input type="email" name="email" placeholder="Email address" value="<?php echo $_SESSION['email']; ?>"><br><br>
                <div id="update-button-container"><input type="submit" value="Update" id="update-button">
                    <form action="profile.php" method="GET">
                        <input type="submit" value="Delete Account" name="delete-button" id="delete-button">
                    </form>
                </div>
            </form>

        </div>
    </section>


</body>

</html>