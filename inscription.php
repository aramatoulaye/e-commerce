<?php
include 'connect_ddb.php';


//ligne de connexion
$con = mysqli_connect($host,$user,$password,$db);
if ($con){
    echo '';
}


//recupérer les donnés de l'inscription

if (isset($_POST['inscription'])) {
    
    $Nom=$_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Genre=$_POST['Genre'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    //affissage des donnés
    echo $Nom;
    echo $Prenom;
    echo $Genre;
    echo $email;
    echo $password;

    //insertion des donnés a la base des donnés

    $sql = "INSERT INTO users(Nom,Prenom,Genre,email,password)
    VALUES('$Nom','$Prenom','$Genre','$email','$password')";


     if (mysqli_query ($con,$sql) ){
        header('location: users.php');
     }
     else {
        echo 'erreur';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            background: rgb(61, 247, 61);
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
            color: white;
            border-radius: 4px;

        }


    </style>

</head>
<body>
    <div class="container">
        <form method="post" action="index.php">
            <h1>Inscription</h1>
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">age</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Pssword</label>
                <input type="text" class="form-control" required>
            </div>
            
            <input type="submit" class="btn"  value="s'inscrire">
            
        </form>
    </div>
</body>
</html>
</body>
</html>