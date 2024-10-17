<!DOCTYPE html>
<html lang="en"><link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
<section id="picture">
    <img src="lazzeri.jpg" alt=""><img/>


    <section class="popular-orders-container">
        <h2>Populaire bestellingen</h2>
        <div class="popular-orders">
          <div class="order">
            <img src="antonio11.jpg" alt="Product 1">
            <h3>Productnaam 1</h3>
            <p>Prijs: €19.99</p>
            <button onclick="window.location.href='file:///C:/Users/voetb/OneDrive%20-%20ROCvA,%20ROCvF%20en%20VOvA/website%20eindexamen/index2.html#'">Bestel nu</button>

          </div>
          <div class="order">
            <img src="antonioi12.jpg" alt="Product 2">
            <h3>Productnaam 2</h3>
            <p>Prijs: €24.99</p>
            <button onclick="window.location.href='file:///C:/Users/voetb/OneDrive%20-%20ROCvA,%20ROCvF%20en%20VOvA/website%20eindexamen/index3.html'">Bestel nu</button>

          </div>
         
        </div>
      </section>


    
    <H2>beschrijving van ons product</H2>
    <div class="beschrijving-container">
        <P>Wij proberen om jou de beste ervaring te geven met ons product wij hopen dat jij goed voelt met ons product. Wij hebben altijd garantie voordeel van 30 dagen vind je ons product goed of niet laat review achter zodat de volgende klant baat bij heeft </P>
    </div>
</section>
<div class="authentic-block">
  <h2 class="block-title">Authentiek Blok</h2>
  <div class="block-content">
    <p>Dit is een voorbeeldtekst binnen het authentieke blok.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed velit eu elit blandit tempus. Integer sit amet mi sit amet elit dapibus vehicula. Ut euismod bibendum ante, id rhoncus metus dapibus ac.</p>
    <p>Quisque suscipit sapien vel dolor cursus, eget elementum erat hendrerit. Nam nec neque in eros fringilla tempus.</p>
  </div>
  <div class="block-rating">
    <p><strong>Beoordeling:</strong> ★★★★☆ (4 van de 5 sterren)</p>
  </div>
  <div class="block-authentic">
    <p><strong>Authentiek:</strong> Antonio Lazzeri</p>
  </div>
</div>
<div class="authentic-block">
  <h2 class="block-title">Authentiek Blok 2</h2>
  <div class="block-content">
    <p>Dit is een ander voorbeeldtekst binnen het authentieke blok.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed velit eu elit blandit tempus. Integer sit amet mi sit amet elit dapibus vehicula. Ut euismod bibendum ante, id rhoncus metus dapibus ac.</p>
    <p>Quisque suscipit sapien vel dolor cursus, eget elementum erat hendrerit. Nam nec neque in eros fringilla tempus.</p>
  </div>
  <div class="block-rating">
    <p><strong>Beoordeling:</strong> ★★★★★ (5 van de 5 sterren)</p>
  </div>
  <div class="block-authentic">
    <p><strong>Authentiek:</strong> [Naam eigenaar]</p>
  </div>
</div>
<div class="authentic-block">
  <h2 class="block-title">Authentiek Blok</h2>
  <div class="block-content">
    <p>Dit is een voorbeeldtekst binnen het authentieke blok.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed velit eu elit blandit tempus. Integer sit amet mi sit amet elit dapibus vehicula. Ut euismod bibendum ante, id rhoncus metus dapibus ac.</p>
    <p>Quisque suscipit sapien vel dolor cursus, eget elementum erat hendrerit. Nam nec neque in eros fringilla tempus.</p>
  </div>
  <div class="block-rating">
    <p><strong>Beoordeling:</strong> ★★★★☆ (4 van de 5 sterren)</p>
  </div>
  <div class="block-authentic">
    <p><strong>Authentiek:</strong> Antonio Lazzeri</p>
  </div>
</div>


<footer>
    <div class="contact-info">
      <h3>Contactgegevens</h3>
      <div class="contact-details">
        <p><strong>Naam:</strong> Antonio Lazzeri</p>
        <p><strong>Adres:</strong> [Jouw Adres]</p>
        <p><strong>Telefoon:</strong> [Jouw Telefoonnummer]</p>
      </div>
    </div>
  </footer>




</body>
</html>

<?php
// Controleer of er een 'success' parameter in de URL staat
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb;">
            <strong>Succes!</strong> Je bent aangemeld voor een notificatie wanneer het product weer op voorraad is.
          </div>';
}
?>