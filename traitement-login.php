<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) and $_POST['username'] != '' and
           isset($_POST['password']) and $_POST['password'] != ''){
                
                session_start();

                $username = $_POST["username"];
                $password = $_POST['password'];

                if($username = $_SESSION['user']['username'] and $password = $_SESSION['user']['password']){
                    $_SESSION['connect'] = true;
                    header('Location: profile.php');
                }else{
                    $_SESSION['error'] ="Mot de passe ou nom d'utilisateur incorrect";
                    header('Location: index.php');
                }            
        }else{
            $_SESSION['error'] ="Prière de remplire tous les champs pour vous connecter";
            header('Location: index.php');
        }
    }
?>