<?php session_start();
    if(isset($_SESSION['connect']) and $_SESSION['connect'] == true){
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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="traitement-login.php" method="post">
            <div>
                <label for="email"></label>
                <input class="input" type="text" name="username" id="username" placeholder="Username" >
            </div>
            <div>
                <label for="password"></label>
                <input class="input" type="password" name="password" id="password" placeholder="Password" >
            </div>
            <div>
                <p class="error"><?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; }?></p>
            </div>
            <button class="button" type="submit">Se Connecter</button>
        </form>
        <span>Pas encore membre? <a href="register.php">créer un compte</a></span>
        <?php unset($_SESSION['error']);?>
    </div>
</body>
</html>