<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST["name"]);
    $email = clean_input($_POST["email"]);
    $message = clean_input($_POST["message"]);

    // Hier können Sie weitere Validierungen und Verarbeitungen hinzufügen
    // Zum Beispiel: Überprüfen Sie die Gültigkeit der E-Mail-Adresse, speichern Sie die Daten in der Datenbank, usw.

    // Beispiel: Ausgabe der Daten
    echo "Name: $name <br>";
    echo "E-Mail: $email <br>";
    echo "Nachricht: $message <br>";
} else {
    echo "Formular nicht gesendet!";
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
