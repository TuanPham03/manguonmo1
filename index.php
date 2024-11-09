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
<<<<<<< HEAD

        function kiemTraSoChinhPhuong($n) {
            
            if ($n < 0) {
                return false;
            }
        
            
            $sqrt = sqrt($n);
        
         
            if ($sqrt == floor($sqrt)) {
                return true; 
            } else {
                return false; 
            }
        }
        
      
        $n = 16;
        if (kiemTraSoChinhPhuong($n)) {
            echo "$n là số chính phương.";
        } else {
            echo "$n không phải là số chính phương.";
        }

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


=======
        $value = 3.14;

        if (is_float($value)) {
            echo "$value la so thuc.";
        } else {
            echo "$value khong phai so thuc.";
        }
    ?>
>>>>>>> 5cff448bbcee858c6a8244b58d5bd389adfe67f4
</body>
</html>