<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

</pre>
<?php
    $partiteArray = [
        [
            'squadra_1' => 'Miami Heat',
            'squadra_2' => 'New York Knicks',
            'punti_squadra_1' => 30,
            'punti_squadra_2' => 25,
        ],
        [
            'squadra_1' => 'Orlando Magic',
            'squadra_2' => 'Chicago Bulls',
            'punti_squadra_1' => 70,
            'punti_squadra_2' => 20,
        ],
        [
            'squadra_1' => 'Boston Celtics',
            'squadra_2' => 'Utah Jazz',
            'punti_squadra_1' => 20,
            'punti_squadra_2' => 15,
        ], 
    ];

        
    for ($i = 0; $i < count($partiteArray); $i++){
        echo $partiteArray[$i]["squadra_1"].' - '.$partiteArray[$i]["squadra_2"].' | '.$partiteArray[$i]["punti_squadra_1"].'-'.$partiteArray[$i]["punti_squadra_2"];
        echo "</br>";
    };
        
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack A</title>
</head>
<body>

</body>
</html>