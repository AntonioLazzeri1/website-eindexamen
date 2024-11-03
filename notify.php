<?php
// Verbinding maken met de database
$host = 'localhost';
$dbname = 'stock_notifications';
$username = 'root'; // Pas aan met je gegevens
$password = '';     // Pas aan met je gegevens

session_start(); // Start de sessie

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Controleer of het formulier is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Haal het e-mailadres en product-ID uit het formulier
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $product_id = $_POST['product_id'];

        // E-mailvalidatie controleren
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Bereid de SQL voor om de gegevens in de database op te slaan
            $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
            $stmt = $conn->prepare($sql);

            // Voer de SQL uit met de ingevoerde waarden
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':product_id', $product_id);

            if ($stmt->execute()) {
                // Omleiden naar index.html met succesmelding
                header("Location: index.html?success=1");
                exit();
            } else {
                $_SESSION['error'] = "Er is iets misgegaan, probeer het opnieuw.";
            }
        } else {
            $_SESSION['error'] = "Ongeldig e-mailadres. Probeer het opnieuw.";
        }
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Fout bij verbinden met de database: " . $e->getMessage();
}

// Omleiden naar index.html na het verwerken van het formulier
header("Location: index.html");
exit();
?>

