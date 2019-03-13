<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <img src="logo.png" alt="Logo." id="logo">

    <header>
      <nav>
        <ul>
          <a href="index.php"><li>Er heerst paniek...</li></a>
          <a href="Onkunde.php"><li>Onkunde</li></a>
        </ul>
      </nav>
    </header>
      <div class="body-content">
        <h1>Mad Libs</h1>
        <p>Er heerst paniek in het koninkrijk <?php echo $_GET["country"];?>. Koning <?php echo $_GET["teacher"];?> is ten einde raad en als koning
        <?php echo $_GET["teacher"];?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_GET["MVP"];?>.</p>
        <p>"<?php echo $_GET["MVP"];?>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire! Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
        <p>"Mijn <?php echo $_GET["pet"];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_GET["toy"];?> voor hem gekocht!"</p>
        <p>"Majesteit, uw <?php echo $_GET["pet"];?> komt vast vanzelf weer terug?"</p>
        <p>"Ja, da's leuk en aardig, maar hoe moet ik in die tussentijd <?php echo $_GET["occupy"];?> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <?php echo $_GET["money"];?> voor gebruiken?"</p>
        <p>"<?php echo $_GET["MVP"];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"Mij <?php echo $_GET["bored"];?>, Sire."</p>
      </div>
      <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
