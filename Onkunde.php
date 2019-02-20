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
      <h1>Er heerst paniek</h1>

      <form  action="onkundeResult.php" method="post" id="content">
        <p><label>Wat zou je graag willen kunnen?</label><input type="text" name="skill" value=""></p>
        <p><label>Met welke persoon kun je goed opschieten?</label><input type="text" name="person" value=""></p>
        <p><label>Wat is je favoriete getal?</label><input type="text" name="number" value=""></p>
        <p><label>Wat heb je altijd bij je als je op vakantie gaat?</label><input type="text" name="holiday" value=""></p>
        <p><label>Wat is je beste persoonlijke eigenschap?</label><input type="text" name="best" value=""></p>
        <p><label>Wat is je slechtste persoonlijke eigenschap?</label><input type="text" name="worst" value=""></p>
        <p><label>Wat is het ergste dat je kan overkomen?</label><input type="text" name="happening" value=""></p>
        
        <button type="submit" name="button">Versturen</button>
      </form>
    </div>
    <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
