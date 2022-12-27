<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lb4</title>
</head>
<body>
    <?php
   $number = file_get_contents("number.txt");
   echo "Число відкривань сторінки:".$number;
    file_put_contents("number.txt",++$number);
    ?>

</body>
</html>