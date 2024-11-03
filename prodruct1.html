<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/9981c6e65d.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <header>    
        <div class="bovenkant-container">
    <h1>Lazzeri</h1>
    <p>vandaag besteld morgen in huis</p>
    <nav>
        <ul class="socials">
            <li class="social-item"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li class="social-item"><a href="https://www.tiktok.com/nl-NL/"><i class="fab fa-tiktok"></i></a></li>
        </ul>
     </nav>
    </div>
           </header>
           
<section id="info">
    <div class="button-container">
        <a href="index.php" class="button">Home</a>
        <a href="indexproducten.html" class="button">Producten</a>
        <a href="index4.html" class="button">contact</a>
        
      </div>
    </section>


    <div class="container">
        <h1>De Haarverwijderende Borstel</h1>
        <img src="antonio11.jpg" alt="De Haarverwijderende Borstel in actie">
        
        <h2>Kenmerken</h2>
        <ul>
            <li>Eén druk op de knop voor moeiteloze haarverwijdering</li>
            <li>Efficiënt ontwerp voor grondige reiniging</li>
            <li>Ergonomisch handvat voor comfortabel gebruik</li>
        </ul>

        <h2>Hoe het werkt</h2>
        <ol>
            <li>Borstel zoals gebruikelijk door het haar.</li>
            <li>Druk op de knop om alle vastzittende haren te verwijderen.</li>
            <li>Geniet van een schone borstel!</li>
        </ol>

        <h2>Waarom kiezen voor de Haarverwijderende Borstel?</h2>
        <ul>
            <li>Bespaar tijd en moeite bij het schoonmaken van je borstel.</li>
            <li>Behoud de kwaliteit van je borstel voor langdurig gebruik.</li>
            <li>Geniet van een haarvrij resultaat in een handomdraai!</li>
        </ul>

        <div class="testimonial">
            <h2>Klantrecensies</h2>
            <div class="review">
                <p class="rating">★★★★☆</p>
                <p>"Deze borstel is echt geweldig! Het verwijdert het haar gemakkelijk en de knop om het haar te verwijderen werkt perfect."</p>
                <p>- Lisa</p>
            </div>
            <div class="review">
                <p class="rating">★★★★★</p>
                <p>"Ik ben dol op deze borstel! Het bespaart me zoveel tijd en het is zo gemakkelijk te gebruiken. Zeker een aanrader!"</p>
                <p>- Peter</p>
            </div>
            <div class="review">
                <p class="rating">★★★☆☆</p>
                <p>"Goede borstel, maar ik had gehoopt dat het haar nog beter zou verwijderen. Over het algemeen ben ik wel tevreden."</p>
                <p>- Michelle</p>
            </div>
        </div>
    </div>
    <div class="stock-notification">
        <h2>Product niet op voorraad?</h2>
        <p>Laat je e-mailadres achter om een melding te krijgen wanneer dit product weer beschikbaar is:</p>
        <form action="notify.php" method="POST">
            <input type="email" name="email" placeholder="Voer je e-mailadres in" required>
            <input type="hidden" name="product_id" value="1"> <!-- Je kunt de product-ID hier dynamisch invullen -->
            <button type="submit">Meld me aan</button>
        </form>
    </div>
    
   
</body>
</html>
<?php
// Verbinding maken met de database
$host = 'localhost';
$dbname = 'stock_notifications';
$username = 'root';  // Pas aan met je gegevens
$password = '';      // Pas aan met je gegevens

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Controleer of het formulier is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Haal het e-mailadres en product-ID uit het formulier
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $product_id = $_POST['product_id'];

        // Bereid de SQL voor om de gegevens in de database op te slaan
        $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
        $stmt = $conn->prepare($sql);

        // Voer de SQL uit met de ingevoerde waarden
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':product_id', $product_id);

        if ($stmt->execute()) {
            // Redirect naar de homepage met een 'success' melding
            header("Location: index.php?success=1");
            exit();
        } else {
            echo "Er is iets misgegaan, probeer het opnieuw.";
        }
    }
} catch (PDOException $e) {
    echo "Fout bij verbinden met de database: " . $e->getMessage();
}
?>
echo '<div>
        <p>Je bent succesvol aangemeld voor notificaties!</p>
        <a href="index.php" style="padding: 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Terug naar Homepagina</a>
      </div>';
