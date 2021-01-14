<?php
session_start();

require '../config.php';

try {
    if(isset($_POST) && count($_POST) > 0){
        
        $errors = [];
        if(!isset($_POST['firstname']) || strlen($_POST['firstname']) < 4){
            $errors["firstname"] = "Firstname is not valid"; 
        }
        if(!isset($_POST['lastname']) || strlen($_POST['lastname']) < 4){
            $errors["lastname"] = "Lastname is not valid"; 
        }
    
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Provide a valid email address"; 
        }
    
        if(!preg_match("/[a-zA-Z0-9]{8,}/", $_POST['password'])){ 
            $errors['password'] = 'The password must meet a specific criteria';
        }
        if($_POST['c_password'] !== $_POST['password']) {
            $errors['c_password'] = 'Passwords doesn\'t match';
        }
        
        if(isset($errors) && count($errors) >= 1) {
            $_SESSION['errors'] = $errors;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        if(empty($errors)){
            // organize data
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // register user
            $pdo->beginTransaction();
            $stmt = $pdo->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES (?,?,?,?)");
            $stmt->execute([$firstname, $lastname, $email, $password]);
            $pdo->commit();
            if($stmt->rowCount()) {
                $_SESSION['success'] = true;
                header('Location: ../login.php');
            }else{
                $_SESSION['success'] = false;
                header('Location: ../index.php');
            }

        }
    }
} catch(PDOException $e) {
    die($e->getMessage());
}