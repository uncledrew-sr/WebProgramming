<!-- 회원가입, 해시 생성 -->
<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_pw = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $hashed_pw]);
        echo "회원가입 완료";
    } catch (PDOException $e) {
        echo "오류: " . $e->getMessage();
    }
}
?>

<h2>회원가입</h2>
<form method="POST">
  <input type="text" name="username" placeholder="ID" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">가입하기</button>
</form>