<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['name']) and $_POST['name'] != '' and
        isset($_POST['email']) and $_POST['email'] != '' and
        isset($_POST['username']) and $_POST['username'] != '' and
        isset($_POST['password']) and $_POST['password'] != ''
        ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = [
                "name" => $name,
                "email" => $email,
                "username" => $username,
                "password" => $password
            ];

            // garder les informations dans la session

            session_start();

            $_SESSION['user'] = $user;
            $_SESSION['connect'] = true;

            header('Location: profile.php');

        }else{
            echo 'Prière de remplire tous les champs pour vous enregistrer';
        }
    }else{
        header('Location: index.php');
    }
?>