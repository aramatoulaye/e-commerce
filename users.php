<?php
    include 'connect_ddb.php';
    session_start();

    if(isset($_POST['connecter'])){
        $login = $_POST['email'];
        $mdp = $_POST['mdp'];

        $req = "select id from users where email='$email'
        and mdp='$mdp'";
        $result = mysqli_query($con, $req);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
            header("location:index.php");
        }else{
            $error="mot de passe incorrect";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            min-height: 100vh;
            background: #db8a8a;
            display: flex;
            font-family: sans-serif;
        }
        .container {
            margin: auto;
            width: 500px;
            max-width: 90%;
        }
        .container form {
            width: 100%;
            height: 100%;
            padding: 20px;   
            background: white;
            border-radius: 4px;
            box-shadow: 0 8px 16px rgba(0,0,0,.3);
        }
        .container form h1 {
            text-align: center;
            margin-bottom: 24px;
            color: #222;
        }
        .container form .form-control{
            width: 100%;
            height: 40px;
            background: white;
            border-radius: 4px;
            border: 1px solid silver;
            margin: 10px 0 10px 0;
            padding: 0 10px;

        }
        .container form .btn{
            margin-left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 34px;
            border: none;
            outline: none;
            background:green;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            border-radius: 4px;

        }
        li a {
            list-style: none;
            text-align: center;
            text-decoration: none;

        }
        li {
            list-style: none;
            text-align: center;
            text-decoration: none; 
        }


    </style>

</head>
<body>
    <div class="container">
        <form method="post" action="index.php">
            <h1>Connexion</h1>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" required>
            </div>
            <input type="submit" class="btn"  value="login"><br><br>
            <li><a href="inscription.php">s'inscrire</a></li>
           
            
    
            
        </form>
    </div>
</body>
</html>