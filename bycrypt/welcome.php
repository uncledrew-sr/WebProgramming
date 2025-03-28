<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<h2><?= htmlspecialchars($_SESSION["user"]) ?>님 환영합니다.</h2>
<a href="logout.php">로그아웃</a>