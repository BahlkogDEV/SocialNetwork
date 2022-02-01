<?php
session_start();

if(!empty($_POST['username_name']) && !empty($_POST['password_name'])){
    try{
        $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
        die;
    }
    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :mail_rentrer OR pseudo = :pseudo_rentrer");
    $statement->execute([
        'mail_rentrer' => $_POST["username_name"],
        'pseudo_rentrer' => $_POST["username_name"],
    ]);

    $user = $statement->fetch();


    $user['isAdmin'] = 0;

    if($_POST['username_name'] == 'BahlkogADMIN' && password_verify($_POST['password_name'], $user['password'])){
        $_SESSION['admin'] = true;
        header('Location:/index.php');
    }
    else if($user && password_verify($_POST['password_name'], $user['password'])){
        $_SESSION['user'] = true;
        $_SESSION['name'] = $user['pseudo'];

        if($user['first_connection'] == 0){
            $statement = $pdo->prepare("UPDATE user SET first_connection = :first_connection WHERE email = :email OR pseudo = :email");
            $statement->execute(
                [
                    'first_connection' => true,
                    'email' => $_POST['username_name']
                ]
            );

            header('Location:/questionnaire.php');
        }
        else{
            header('Location:/accueil.php');
        }
    }
    else{
        echo "mail ou mot de passe incorrect.";
    }

}
