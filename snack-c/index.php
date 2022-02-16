<!-- Snack C
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

    $numeriArray = [];

    while(count($numeriArray) < 15){
        $numeriRandom = rand(1,100);

        if(!in_array($numeriRandom)){
            $numeriArray[] = $numeriRandom;
        };
    };

    var_dump ($numeriArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack C</title>
</head>
<body>
    
</body>
</html>