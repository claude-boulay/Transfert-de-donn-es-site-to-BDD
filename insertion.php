<?php
$dsn = "mysql:host=localhost;dbname=Industro;charset=utf8";
$user = 'root';
$pass = 'root';


// Sécurisitation de la connexion

try {
    $cnx = new PDO($dsn, $user, $pass);
    echo "la connexion est effectuée";
} catch (PDOException $error) {
    echo "Erreur de connexion";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
</head>

<body>
    <?php
    //récupération des données
    $prenom = $_POST["name"];
    $nom = $_POST["surname"];
    $email = $_POST["email"];
    $date = $_POST["RDV"];
    $message = $_POST["message"];
    //préparation de l'insertion
    $sql = "INSERT INTO CLIENT(nom_client,prenom_client,mail_client,date_rdv,messages) VALUES ('$nom','$prenom','$email','$date','$message')";
    $rs_insert = $cnx->exec($sql);
    if ($rs_insert) {
        echo 'Insertion ok';
        header('Location:contact.html');
        exit();
    } else {
        echo "erreur de communication avec la base de données";
    }

    ?>

</body>

</html>