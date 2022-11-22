<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            background-color: #9EBC9F;
        }
        .form-wrapper{
           margin-top:150px;
           width:270px;
        }
       
        h2{
            text-align: center;
        }
        input{
            margin-bottom:15px;
            padding:10px;
            text-align: center;
            font-size:medium;
            background-color: #E6EBE0;
            height:40px;
            width:100%;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.9) 0px 3px 8px;
        }
        input:hover{
            border-radius: 0 20px;
        }
        #sign-up-button{
            background-color:#537055;
            font-weight: bolder;
        }
        #sign-up-button:hover{
            background-color:#537055;
            width:90%;
            margin:0 10px;
            border-radius: 0;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color:gray;
            margin-left:5px;
        }
        a:hover{
            color:white;
        }
        #submit-button-container{
            height:40px;
        }

        
    </style>
</head>
<body>
    <section class="form-wrapper">
        <h2>Login</h2>
        <div class="form-container">
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Email address"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <div id="submit-button-container"><input type="submit" value="Login" id="sign-up-button"></div>
            </form>
            <p>Don't have an account? <a href="../index.php">Sign up</a></p>

        </div>
    </section>
</body>
</html>