<?php
require 'verification.php';
$servername = "localhost";
$username = "xxx";
$pass = "xxx123!";
$dbname = "people";

$name = htmlspecialchars(strip_tags(if_input_numeric($_POST['name'])));
$surname = htmlspecialchars(strip_tags(if_input_numeric($_POST['surname'])));
$email = check_email($_POST['email']);
$password = check_password($_POST['password']);
$dob = strip_tags($_POST['dob']);
$gender = htmlspecialchars($_POST['gender']);
//$nationality = $_POST['nationality'];
$nationality =  filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING);
$comment = strip_tags(htmlspecialchars($_POST['comment']));

try {
    $conn = new PDO("mysql:host=$servername;port=3308;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO listing (name, surname, email, password, dob, gender, nationality, comment)
    VALUES(:name, :surname, :email, :password, :dob, :gender, :nationality, :comment)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':nationality', $nationality);
    $stmt->bindParam(':comment', $comment);
    if (isset($name, $surname, $email, $password, $dob, $gender, $nationality, $comment)) {
        $stmt->execute();
        alert("Nouvelle personne ajoutée avec succès !");
    } else {
        alert("Veuillez remplir tous les champs correctement !");
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
header("Refresh:0");
?>