<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #9EBC9F;
        }
        .container{
            display: flex;
            justify-content:center ;
        }
        h2{
            text-align: center;
        }
        .container div{
            height:500px;
            width:350px;
            background-color: white;
            margin:20px;
        }
        header{
          
          height: 50px;
          margin-bottom: 20px;
          display:flex;
          justify-content: end;
          box-shadow: rgba(0, 0, 0, 0.9) 0px 1px 0px;
      }
      header a{
          font-size: larger;
          padding:10px;
          text-decoration: none;
          color:black;
          
      }
     header a:hover{
      background-color:rgb(83, 112, 85,0.5);
      color:white;
     }
       
    </style>
</head>
<body>
    <header>
        <a href="profile.php">Profile</a>
        <a href="../views/logout.php">Logout</a>
    </header>
    <h2>Welcome <?php echo $_SESSION['firstname'];?></h2>
    <section class="container">
        <div >

        </div>
        <div >
         
        </div>

    </section>
</body>
</html>