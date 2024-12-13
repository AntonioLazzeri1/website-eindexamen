<?php
  
  // PHP code voor databaseverbinding en formulierverwerking
  $host = 'localhost';
  $dbname = 'stock_notifications';
  $username = 'root';  // Databasegebruikersnaam
  $password = '';      // Databasewachtwoord
  
  try {
      // Maak verbinding met de database
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      // Controleer of het formulier is ingediend
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Haal en verwerk het e-mailadres en product-ID uit het formulier
          $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Verwijder ongeldige tekens
          $product_id = $_POST['product_id'];
  
          // SQL query om notificatiegegevens in de database op te slaan
          $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
          $stmt = $conn->prepare($sql);
  
          // Koppel de ingevoerde waarden aan de query
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':product_id', $product_id);
  
          // Voer de query uit en controleer het resultaat
          if ($stmt->execute()) {
              // Redirect naar de homepage met een 'success' melding
              header("Location: index.php?success=1");
              exit(); // Stop de uitvoering om de redirect uit te voeren
          } else {
              echo "Er is iets misgegaan, probeer het opnieuw.";
          }
      }
  } catch (PDOException $e) {
      // Foutmelding weergeven als de databaseverbinding mislukt
      echo "Fout bij verbinden met de database: " . $e->getMessage();
  }
  
  ?>
  <!-- HTML bericht bij succesvolle aanmelding voor notificaties -->
  echo '<div>
          <p>Je bent succesvol aangemeld voor notificaties!</p>
          <a href="index.php" style="padding: 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Terug naar Homepagina</a>
        </div>
        
    