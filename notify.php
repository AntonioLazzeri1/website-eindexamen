<?php
// Databaseverbinding instellen
$host = 'localhost';
$dbname = 'stock_notifications';
$username = 'root'; // Gebruikersnaam voor database (pas indien nodig aan)
$password = '';     // Wachtwoord voor database (pas indien nodig aan)

session_start(); // Start een sessie om foutmeldingen op te slaan

try {
    // Maak een nieuwe PDO-verbinding met de database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Zet foutafhandeling op uitzondering

    // Controleer of het formulier via een POST-verzoek is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize het e-mailadres en haal het product-ID op uit het formulier
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Verwijder ongewenste tekens uit e-mail
        $product_id = $_POST['product_id']; // Haal product-ID op

        // Valideer het e-mailadres
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Bereid SQL-instructie voor om gegevens op te slaan in de database
            $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
            $stmt = $conn->prepare($sql); // Bereid de query voor

            // Bind de parameters aan de waarden in de query
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':product_id', $product_id);

            // Voer de query uit
            if ($stmt->execute()) {
                // Omleiden naar index.html met succesmelding in de URL
                header("Location: index.html?success=1");
                exit(); // Beëindig script om redirect uit te voeren
            } else {
                // Foutmelding instellen in sessie als invoer mislukt
                $_SESSION['error'] = "Er is iets misgegaan, probeer het opnieuw.";
            }
        } else {
            // Foutmelding instellen als het e-mailadres ongeldig is
            $_SESSION['error'] = "Ongeldig e-mailadres. Probeer het opnieuw.";
        }
    }
} catch (PDOException $e) {
    // Foutmelding instellen in geval van een databaseverbinding probleem
    $_SESSION['error'] = "Fout bij verbinden met de database: " . $e->getMessage();
}

// Omleiden naar index.html, ongeacht of het formulier is verwerkt of niet
header("Location: index.html");
exit(); // Beëindig script om redirect uit te voeren
?>
