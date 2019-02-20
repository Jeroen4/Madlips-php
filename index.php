<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <img src="logo.png" alt="Logo" id="logo">

    <header>
      <nav>
        <ul>
          <a href="index.php"><li>Er heerst paniek...</li></a>
          <a href="Onkunde.php"><li>Onkunde</li></a>
        </ul>
      </nav>
    </header>

    <div class="body-content">
      <h1>Er heerst paniek</h1>

      <form  action="paniekResult.php" method="post" id="content">
        <p><label>Welk dier zou je nooit als huisdier willen hebben?</label><input type="text" name="pet" value=""></p>
        <p><label>Wie is de belangrijkste persoon in je leven?</label><input type="text" name="MVP" value=""></p>
        <p><label>In welk land zou je willen leven?</label><input type="text" name="country" value=""></p>
        <p><label>Wat doe je als je je verveelt?</label><input type="text" name="bored" value=""></p>
        <p><label>Met welk speelgoed speelde je als kind het meest?</label><input type="text" name="toy" value=""></p>
        <p><label>Bij welke docent spijbel je het liefst?</label><input type="text" name="teacher" value=""></p>
        <p><label>Als je €100.000,- had wat zou je dan kopen?</label><input type="text" name="money" value=""></p>
        <p><label>Wat is je favoriete bezigheid?</label><input type="text" name="occupy" value=""></p>

        <button type="submit" name="button">Versturen</button>
      </form>
    </div>
    <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
