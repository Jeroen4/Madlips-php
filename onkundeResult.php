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
        <h1>Onkunde</h1>
        <p>Er zijn veel mensen die niet kunnen <?php echo $_POST["skill"];?>. Neem nou <?php echo $_POST["person"];?>. Zelfs met de hulp van een
        <?php echo $_POST["holiday"];?> of zelfs tien kan  <?php echo $_POST["person"];?> niet tekenen.</p>
        <p>"Dat heeft niet te maken met een gebrek aan <?php echo $_POST["best"];?>, maar met een te veel aan <?php echo $_POST["worst"];?>"</p>
        <p>"Te veel <?php echo $_POST["worst"];?> leidt tot verveling en dat is niet goed als je wilt  <?php echo $_POST["skill"];?>."</p>
        <p>"Helaas voor <?php echo $_POST["person"];?>."</p>
      </div>
      <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
