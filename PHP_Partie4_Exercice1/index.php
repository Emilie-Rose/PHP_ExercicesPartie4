<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 4</h1>

    <h2 class="">Exercice 1</h2>
    <p style="color:#8080FF">Créez un tableau contenant les 12 mois 
    de l'année, affichez "Mars".</p>
    <?php
        $month = array( "Janvier","Février","Mars","Avril","Mai","Juin",
        "Juillet","Août","Septembre","Octobre","Nvombre","Décembre");
        echo $month[2]. "<br>" ;
    ?>
</body>
</html>