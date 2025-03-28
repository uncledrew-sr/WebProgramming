<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["username"];
        header("Location: welcome.php");
        exit;
    } else {
        echo "로그인 실패. 아이디 또는 비밀번호 확인.";
    }
}
?>

<h2>로그인</h2>
<form method="POST">
  <input type="text" name="username" placeholder="아이디" required><br>
  <input type="password" name="password" placeholder="비밀번호" required><br>
  <button type="submit">로그인</button>
</form>