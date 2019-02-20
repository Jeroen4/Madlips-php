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
        <p>Er heerst paniek in het koninkrijk <?php echo $_POST["country"];?>. Koning <?php echo $_POST["teacher"];?> is ten einde raad en als koning
        <?php echo $_POST["teacher"];?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["MVP"];?>.</p>
        <p>"<?php echo $_POST["MVP"];?>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire! Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
        <p>"Mijn <?php echo $_POST["pet"];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["toy"];?> voor hem gekocht!"</p>
        <p>"Majesteit, uw <?php echo $_POST["pet"];?> komt vast vanzelf weer terug?"</p>
        <p>"Ja, da's leuk en aardig, maar hoe moet ik in die tussentijd <?php echo $_POST["occupy"];?> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["money"];?> voor gebruiken?"</p>
        <p>"<?php echo $_POST["MVP"];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"Mij <?php echo $_POST["bored"];?>, Sire."</p>
      </div>
      <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
