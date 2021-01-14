<?php 

session_start();

require '../config.php';

try {
    $errors = [];
    if($_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email is not valid';
        $_SESSION['errors'] = $errors;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        
    }
    if(empty($errors)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $stmt = $pdo->prepare("SELECT email FROM users WHERE email=?");
        $stmt->execute([$email]);
        if($stmt->rowCount()){
            $email = $stmt->fetch()->email;
            $stmt = $pdo->prepare("SELECT password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if($stmt->rowCount()){
                if(password_verify($password, $stmt->fetch()->password)){
                    $_SESSION['logged_in'] = true;
                    header("Location: ../admin/");
                }else{
                    $errors['password'] = 'Password is incorrect';
                    $_SESSION['errors'] = $errors;
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            }
        } else {
            $errors['email'] = 'Email doesn\'t exist';
            $_SESSION['errors'] = $errors;
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }   
    }
} catch(PDOException $e) {
    die($e->getMessage());
}