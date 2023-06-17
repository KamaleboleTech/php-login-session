<?php session_start();
    if(isset($_SESSION['connect']) and $_SESSION['connect']== true){
        header('Location: profile.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>S'enregistrer</h1>
        <form action="traitement-register.php" method="post">
            <div>
                <label for="name"></label>
                <input class="input" type="text" name="name" id="name" placeholder="Nom complet" required>
            </div>
            <div>
                <label for="email"></label>
                <input class="input" type="mail" name="email" id="email" placeholder="Adresse email" required>
            </div>
            <div>
                <label for="username"></label>
                <input class="input" type="text" name="username" id="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div>
                <label for="password"></label>
                <input class="input" type="password" name="password" id="password" placeholder="Mot de passe" required>
            </div>
            <button class="button" type="submit">Créer un compte</button>
        </form>
        <span>Déjà membre? <a href="index.php">connectez-vous</a></span>
    </div>
</body>
</html>