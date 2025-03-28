<!-- 회원가입, 해시 생성 -->
<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $password = $_POST["password"];

    // bycrypt 해시를 생성
    $hashed = password_hash($password, PASSWORD_BCRYPT);

    
}