<?php
$conn = new PDO("mysql:host=25rp20411-db;dbname=25rp20411_shareride_db", "root", "root");
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO tbl_users(user_firstname, user_lastname, user_gender, user_email, user_password)
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['fname'], $_POST['lname'], $_POST['gender'],
        $_POST['email'], password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);
    echo "Registration successful!";
}
?>
