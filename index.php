<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "hello";
        $value = 3.14;

        if (is_float($value)) {
            echo "$value la so thuc.";
        } else {
            echo "$value khong phai so thuc.";
        }
    ?>
</body>
</html>