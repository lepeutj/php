<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de saisie de nom et de note</title>
</head>
<body>

<form action="" method="post">
    Entrez votre nom : <input type="text" name="nom"><br><br>
    Entrez votre note : <input type="text" name="note"><br><br>
    <input type="submit" name="submit" value="Envoyer">
</form> 

<?php
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $note = $_POST['note'];
    echo "<table border='1'>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
            <tr>
                <td>$nom</td>
                <td>$note</td>
            </tr>
        </table>";
}
?>

</body>
</html>

>

<?php
    $text = $_POST['text']; // Récupère le texte écrit par l'utilisateur dans le formulaire
    $text = strtolower($text); // Convertit le texte en minuscules
    $letters = count_chars($text, 1); // Compte la fréquence de chaque lettre utilisée dans le texte
    foreach ($letters as $letter => $frequency) {
        echo "La lettre '" . chr($letter) . "' a été utilisée " . $frequency . " fois(s).<br>";
    }
?>

<?php
    function encryptXOR($message, $key) {
        $encrypted = '';
        for($i = 0; $i < strlen($message); $i++) {
            $encrypted .= $message[$i] ^ $key[$i % strlen($key)];
        }
        return $encrypted;
    }

    $message = "Mon message à crypter";
    $key = "maCle";
    $encrypted = encryptXOR($message, $key);
    echo "Message original : " . $message . "<br>";
    echo "Clé : " . $key . "<br>";
    echo "Message crypté : " . $encrypted . "<br>";
?>

