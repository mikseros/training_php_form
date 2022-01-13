<?php

function alert($message) {
    echo '<script type="text/javascript">alert("' . $message . '")</script>';
}

function if_input_numeric (string $string) {
    if (ctype_alpha($string)) {
        return $string;
        header("Refresh:0");
    } else {
        header("Refresh:0");
        alert("Dans les champs 'prénom' et 'nom', vous devez saisir des lettres.");
        exit;
    }
}

function check_email (string $email) {
    filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    } else {
        header("Refresh:0");
        return alert("E-mail invalide !");
        exit;
    }
}

function check_password (string $password) {
    $uppercase = preg_match('/[A-Z]/', $password);
    $lowercase = preg_match('/[a-z]/', $password);
    $num = preg_match('/[0-9]/', $password);
    $specialChars = preg_match('/[^\w]/', $password);
    var_dump($uppercase, $lowercase, $num, $specialChars);
    
    if(strlen($password) >= 8 && $num && $uppercase && $lowercase && $specialChars){
        return password_hash($password, PASSWORD_DEFAULT);
    } else {
        alert("Le mot de passe doit comporter au moins 8 caractères. Et doit avoir des majuscules, des minuscules, des nombres et des caractères spéciaux.");
        //header("Refresh:0");
    }
    
}