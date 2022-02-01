<?php
session_start();
if ((!empty($_POST['email_name'])) && ((!empty($_POST['password_name'])) && (!empty($_POST['password2_name'])))) {
    if ($_POST['password_name'] != $_POST['password2_name']) {
        $erreur = "Les 2 mots de passes doivent etre identique";
        echo $erreur;
    } else {
        try {
            $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            die();
        }
        $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email_rentrer");
        $statement->execute(
            [
                'email_rentrer' => $_POST["email_name"]
            ]
        );

        $user = $statement->fetch();

        $pass = password_hash($_POST['password_name'], PASSWORD_DEFAULT);

        if (!$user) {
            $statement = $pdo->prepare("INSERT INTO user (email, firstname, lastname, phone, pseudo, password) 
                VALUES(:email, :prenom, :nom, :phone, :pseudo, :motdepasse)");
            $statement->execute(
                [
                    'email' => $_POST['email_name'],
                    'prenom' => $_POST['firstname_name'],
                    'nom' => $_POST['lastname_name'],
                    'phone' => $_POST['phone_name'],
                    'pseudo' => $_POST['username_name'],
                    'motdepasse' => $pass
                ]
            );
            header("Location: /index.php");

        } else {
            echo "ce user existe deja";
        }
    }
}

echo "je suis pas rentrer";