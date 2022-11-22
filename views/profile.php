<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{

            background-color: #9EBC9F;
        }
        .form-wrapper{
           margin-top:150px;
           width:300px;
           padding:5px;
           margin: 0 auto;
           background-color: rgb(83, 112, 85,0.5);
           padding:15px;
        }
        h1{
            text-align: center;
        }
        h2{
            text-align: center;
        }
        input{
            margin-bottom:15px;
            text-align: center;
            font-size:medium;
            background-color: #E6EBE0;
            height:40px;
            width:100%;
            border: none;            
        }
      
        #update-button{
            margin: 0 auto;
            width: fit-content;
        }
        #update-button:hover{
            border-radius: 0;
            background-color:#537055;
        }
        #update-button-container{
            width: 100%;
            display: flex;
        }

      
    </style>
</head>

<body>
<h1>Profile</h1>
<header>
        <a href="profile.php" id="profile-button">Profile</a>
        <a href="../views/login.php" id="logout-button">Logout</a>
    </header>
<section class="form-wrapper">
        <h2>Details</h2>
        <div class="form-container">
            <form action="index.php" method="POST">
                <input type="text" name="firstname" placeholder="Name"><br><br>
                <input type="text" name="lastname" placeholder="Surname"><br><br>
                <input type="email" name="email" placeholder="Email address"><br><br>
               <div id="update-button-container"><input type="submit" value="Update" id="update-button"></div>
            </form>


        </div>
    </section>


</body>

</html>