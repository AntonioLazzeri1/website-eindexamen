<?php
    // Verbinding maken met de database
    $host = 'localhost';
    $dbname = 'stock_notifications';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Controleer of het formulier is ingediend
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $product_id = $_POST['product_id'];

            // SQL-query om de gegevens op te slaan
            $sql = "INSERT INTO notifications (email, product_id, notified) VALUES (:email, :product_id, 0)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':product_id', $product_id);

            if ($stmt->execute()) {
                echo '<div>
                        <p>Je bent succesvol aangemeld voor notificaties!</p>
                        <a href="index.php" style="padding: 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Terug naar Homepagina</a>
                      </div>';
            } else {
                echo "Er is iets misgegaan, probeer het opnieuw.";
            }
        }
    } catch (PDOException $e) {
        echo "Fout bij verbinden met de database: " . $e->getMessage();
    }
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
      <div class="success-message">
          <p>Aanmelden voltooid!</p>
      </div>
      <?php endif; ?>
      
      <style>
      .success-message {
          padding: 15px;
          background-color: #28a745;
          color: white;
          text-align: center;
          border-radius: 5px;
          margin: 20px;
      }
      </style>
    ?>
