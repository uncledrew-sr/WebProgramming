<?php
    $name = "CHOI";
    $phone_number = "000-0000-0000";
    $address = "San Jose, California";
    $email = "hygenberg@gmail.com";

    echo "- 이름 : "."$name\n";
    echo "- 휴대폰 번호 : "."$phone_number\n";
    echo "- 주소 : "."$address\n";
    echo "- 이메일 : "."$email\n";
    echo "<br>";
    echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table 태그에 담기</title>
    <link rel="stylesheet" href="style/chapter2-practice-style.css"/>
</head>
<body>
    <table>
        <tr>
            <th>이름</th>
            <th>휴대폰 번호</th>
            <th>주소</th>
            <th>이메일</th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $phone_number; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>