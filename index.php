<?php
    // Verbinding maken met de database
    $host = 'localhost'; // De hostnaam voor de database (meestal localhost)
    $dbname = 'stock_notifications'; // De naam van de database
    $username = 'root'; // De gebruikersnaam voor de database (standaard is vaak 'root')
    $password = ''; // Het wachtwoord voor de database, leeg als er geen is

    try {
        // Maak een nieuwe PDO-verbinding met de database
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        // Zet de foutmodus op uitzondering om fouten te kunnen afhandelen
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Controleer of het formulier is ingediend
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Haal het e-mailadres op en filter deze om ongewenste tekens te verwijderen
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // Haal het product-ID op uit de formulierdata
            $product_id = $_POST['product_id'];

            // SQL-query om de gegevens in de database op te slaan
            $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
            $stmt = $conn->prepare($sql); // Bereid de SQL-query voor

            // Koppel de parameters aan de SQL-query
            $stmt->bindParam(':email', $email); // Bind de e-mailparameter
            $stmt->bindParam(':product_id', $product_id); // Bind de product-ID parameter

            // Voer de SQL-query uit
            if ($stmt->execute()) {
                // Toon een bevestigingsbericht bij succesvolle registratie
                echo '<div>
                        <p>Je bent succesvol aangemeld voor notificaties!</p>
                        <a href="index.php" style="padding: 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Terug naar Homepagina</a>
                      </div>';
            } else {
                // Toon een foutmelding als de registratie niet is gelukt
                echo "Er is iets misgegaan, probeer het opnieuw.";
            }
        }
    } catch (PDOException $e) {
        // Toon een foutmelding als er een probleem is met de databaseverbinding
        echo "Fout bij verbinden met de database: " . $e->getMessage();
    }
?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="success-message">
        <p>Aanmelden voltooid!</p> <!-- Toon een succesbericht als het formulier correct is verwerkt -->
    </div>
<?php endif; ?>

<style>
    /* Stijlen voor het succesbericht */
    .success-message {
        padding: 15px; /* Opvulling rond de tekst */
        background-color: #28a745; /* Achtergrondkleur voor een positieve boodschap */
        color: white; /* Kleur van de tekst */
        text-align: center; /* Centreer de tekst */
        border-radius: 5px; /* Maak de hoeken van het bericht afgerond */
        margin: 20px; /* Voeg marge toe rondom het bericht */
    }
</style>
