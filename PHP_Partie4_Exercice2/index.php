<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 4</h1>

    <h2 class="">Exercice 2</h2>
    <p style="color:#8080FF">Créez un tableau associatif contenant comme 
    clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation. 
    Affichez ces langages.</p>
    <?php
        $langues = array(
        1 => 'JavaScript', //=> Sert à associer une clé à une valeur
        2 => 'PHP',
        3 => 'Sql',
        4 => 'C',
        5 => 'ReactJS',
        );
        echo  "Les 5 langages de programmation sont : <br> ";
        
        foreach ($langues as $value){ //cette boucle récupére la valeur
        echo  $value . "<br/>";
        }
    ?>
</body>
</html>