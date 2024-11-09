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
    ?>
    <?php
function kiemTraSoNguyenTo($n) {
    if ($n <= 1) {
        return false; 
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true; 
}

$so = 29;
if (kiemTraSoNguyenTo($so)) {
    echo $so . " La so nguyen to";
} else {
    echo $so . " Khong phai so nguyen to";
}
?>

</body>
</html>