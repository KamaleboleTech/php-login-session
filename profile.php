<?php session_start();
    if(!isset($_SESSION['connect']) and $_SESSION['connect']== false ){
        header('Location: index.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="profil">
            <h1>Profile</h1>
            <div class="profilImg">
                <img src="images/LOGO.PNG" alt="image">
            </div>
            <h3>Bienvenue dans votre compte, <?php echo $_SESSION['user']['name'];?></h3>
            <p><?php echo $_SESSION['user']['username'];?></p>
            <p><?php echo $_SESSION['user']['email'];?></p><br>
            <form action="deconnexion.php">
                <button class="btndisconnect">Deconnexion</button>
            </form>
        </div>
    </div>
</body>
</html>