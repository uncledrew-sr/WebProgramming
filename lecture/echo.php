<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
    <?php
        echo "Cat and Rabbit";
    ?>
    </h3>
    <?php
        $img_cat = "source/02/cat.jpg";
        echo "<img src = '$img_cat'>";
        echo "<br>";
        
        $img_rabbit = "source/02/rabit.jpg";
        echo "<img src = '$img_rabbit'>";
        echo "<img src = \"$img_rabbit\">";
    ?>
</body>
</html>