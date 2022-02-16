<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $alunniClasse = [
        [
            "nome" => "Marco",
            "cognome" => "Francesconi",
            "voti" => [5,7,6,8,10],
        ],
        [
            "nome" => "Giorgia",
            "cognome" => "Rossi",
            "voti" => [5,7,4,7,8],
        ],
        [
            "nome" => "Antonio",
            "cognome" => "Politi",
            "voti" => [3,5,8,6,9],
        ],
        [
            "nome" => "Mario",
            "cognome" => "Marcomi",
            "voti" => [6,8,5,6,8],
        ],
    ];

    for ($i=0; $i < count($alunniClasse); $i++){
        echo "<div>".$alunniClasse[$i]['nome'] ."</div>";
        echo "<div>".$alunniClasse[$i]['cognome'] ."</div>" ."<br>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack E</title>
</head>
<body>
    
</body>
</html>