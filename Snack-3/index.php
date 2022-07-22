<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <?php 
        $myArray = [];

        while(count($myArray) < 15) {
            $randomNum = rand(1, 20);
            if(!in_array($randomNum, $myArray)) {
                $myArray[] = $randomNum;
            };
        };
    ?>
    <h1>
        <?php for($i = 0; $i < count($myArray); $i++) { 
            echo $myArray[$i] . ',';
        } ?>
    </h1>
</body>
</html>