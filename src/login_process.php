<?php
$conn = new PDO("mysql:host=25rp20411-db;dbname=25rp20411_shareride_db", "root", "root");
if ($_POST) {
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE user_email=?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'], $user['user_password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>
