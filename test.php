<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Traitement de la demande</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { $genre = htmlspecialchars($_POST["genre"]);
    $ville = htmlspecialchars($_POST["ville"]);
    $nom_chat = htmlspecialchars($_POST["nom_chat"]);
    $motivation = htmlspecialchars($_POST["motivation"]);


    echo "<h2>Informations reçues :</h2>";
    echo "Genre : " . $genre . "<br/>";
    echo "Ville : " . $ville . "<br/>";
    echo "Nom du chat à adopter : " . $nom_chat . "<br/>";
    echo "Motivations pour l’adoption : " . $motivation . "<br/>";
}
?>

</body>
</html>

