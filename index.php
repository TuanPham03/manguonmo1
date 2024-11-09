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
        

</body>
</html>