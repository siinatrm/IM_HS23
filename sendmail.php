<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sina.trottmann@stud.fhgr.ch";

    // Betreff der E-Mail
    $subject = "Neue Kontaktanfrage von $name";

    // E-Mail-Inhalt
    $email_content = "Name: $name\n";
    $email_content .= "E-Mail: $email\n\n";
    $email_content .= "Nachricht:\n$message";

    // E-Mail versenden
    mail($to, $subject, $email_content);

    // Antwort an den Client senden
    echo "success";
}
?>
