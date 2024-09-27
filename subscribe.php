

<?php
// Foutmeldingen weergeven voor debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Databaseverbinding instellen
$host = 'localhost';  // Database host
$db = 'product_notifications';  // De naam van je database
$user = 'root';  // Je MySQL-gebruikersnaam
$pass = '';  // Je MySQL-wachtwoord (leeg als er geen wachtwoord is)

$conn = new mysqli($host, $user, $pass, $db);

// Controleer of de verbinding is gelukt
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Verwerk het formulier als het wordt verzonden via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Haal het e-mailadres op uit het formulier
    $email = $_POST['email'];

    // Maak het e-mailadres veilig voor invoer in de database
    $email = $conn->real_escape_string($email);

    // Controleer of het e-mailadres een geldig formaat heeft
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // SQL-query om het e-mailadres in de database te plaatsen
        $sql = "INSERT INTO email_subscribers (email) VALUES ('$email')";

        // Voer de SQL-query uit en controleer of het succesvol is
        if ($conn->query($sql) === TRUE) {
            echo "Bedankt voor je inschrijving! Je e-mailadres is opgeslagen.";
        } else {
            echo "Er is een fout opgetreden: " . $conn->error;
        }
    } else {
        echo "Voer een geldig e-mailadres in.";
    }
}

// Sluit de databaseverbinding
$conn->close();
?>
