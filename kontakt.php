<?php
// Empfängeradresse
$empfaenger = "abeshay2004@outlook.com"; // später einfach ändern auf physiosynergie10@gmail.com

// Felder abholen
$name      = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email     = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
$message   = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
$honeypot  = isset($_POST['website']) ? $_POST['website'] : '';

// Spam-Schutz: Honeypot-Feld muss leer bleiben
if (!empty($honeypot)) {
    die("Bot-Verdacht — Nachricht verworfen.");
}

// Validierung
if (empty($name) || empty($email) || empty($message)) {
    die("Bitte alle Felder korrekt ausfüllen.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Ungültige E-Mail-Adresse.");
}

if (strlen($message) > 2000) {
    die("Die Nachricht ist zu lang.");
}

// Mail-Text
$betreff = "Neue Anfrage über das Kontaktformular Physio Synergie";
$inhalt  = "Name: $name\n";
$inhalt .= "E-Mail: $email\n\n";
$inhalt .= "Nachricht:\n$message\n";

// Mail-Header
$header  = "From: Physio Synergie Website <kontakt@physiosynergie.at>\r\n";
$header .= "Reply-To: $email\r\n";
$header .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Senden
$gesendet = mail($empfaenger, $betreff, $inhalt, $header);

// Erfolg / Misserfolg
if ($gesendet) {
    header("Location: danke.html");
    exit;
} else {
    echo "<h2>Es ist ein Fehler beim Versenden aufgetreten.</h2>
    <p>Bitte versuchen Sie es später erneut oder kontaktieren Sie uns telefonisch.</p>";
}
?>
