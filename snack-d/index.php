<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eligendi iste libero rem omnis consequatur, 
            dolore soluta adipisci ducimus impedit provident nam quam, natus sapiente odio reiciendis? Est, facere ex? Lorem ipsum, 
            dolor sit amet consectetur adipisicing elit. Optio illum assumenda nihil nam sit ad, omnis culpa vel. deleniti tempore dicta 
            earum ullam placeat vero atque nulla aliquam harum! Voluptates.";
    
    $newText = str_replace(".", "<br>", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack D</title>
</head>
<body>
    <p><?php echo $newText ?></p>
</body>
</html>