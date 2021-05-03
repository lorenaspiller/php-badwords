<?php
    // aquisisco la badword
    $badword = $_GET['badword'];
    // echo $badword;

    // scrivo una frase con una badword e la sostituisco con ***
    $frase = "Io sono io e voi non siete un $badword!";
    $frase_censurata = str_replace($badword, '***', $frase);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php badwords</title>
    </head>
    <body>
    
        <h2><?php echo $frase ?></h2>
        <h2><?php echo $frase_censurata ?></h2>

        <!-- calcolo la lunghezza della frase -->
        <h2>La lunghezza della frase è di <?php echo strlen($frase_censurata)?> caratteri.</h2>
    </body>
</html>