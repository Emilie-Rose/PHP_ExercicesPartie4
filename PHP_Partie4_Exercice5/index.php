<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 4</h1>

    <h2 class="">Exercice 5</h2>
    <p style="color:#8080FF">Créez un tableau associatif contenant comme 
    clé des numéros de départements et comme valeurs les départements 
    correspondants. Affichez les départements et leurs clés respectives.
</p>
    <?php
        $department = array(
            75 => "PARIS" , //j'utilise => pour associer une clé à une valeur
            91 => "ESSONNE",
            92 => "HAUTS-DE-SEINE",
            93 => "SEINE-SAINT-DENIS",
            94 => "EVRY SUR SEINE",
            77 => "SEINE-ET-MARNE",
            95 => "VAL-DE-MARNE",
            78 => "YVELINES",
        );         
        foreach ($department  as  $clé => $value ){ //cette boucle a récupéré la clé et la valeur
            echo  $clé . " : " . $value . " <br/>" ;
        }
        
    ?>
</body>
</html>