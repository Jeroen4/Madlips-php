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
        <p><label>Welk dier zou je nooit als huisdier willen hebben?</label><input type="text" name="pet" value=""><span id="star">*</span></p>
        <p><label>Wie is de belangrijkste persoon in je leven?</label><input type="text" name="MVP" value=""><span id="star">*</span></p>
        <p><label>In welk land zou je willen leven?</label><input type="text" name="country" value=""><span id="star">*</span></p>
        <p><label>Wat doe je als je je verveelt?</label><input type="text" name="bored" value=""><span id="star">*</span></p>
        <p><label>Met welk speelgoed speelde je als kind het meest?</label><input type="text" name="toy" value=""><span id="star">*</span></p>
        <p><label>Bij welke docent spijbel je het liefst?</label><input type="text" name="teacher" value=""><span id="star">*</span></p>
        <p><label>Als je €100.000,- had wat zou je dan kopen?</label><input type="text" name="money" value=""><span id="star">*</span></p>
        <p><label>Wat is je favoriete bezigheid?</label><input type="text" name="occupy" value=""><span id="star">*</span></p>

        <button type="submit" name="button">Versturen</button>
      <?php
        if($_POST)
        {
            if(empty($POST['pet']))
                echo '<font color="red">Please enter your name.</font>';
            if(empty($POST['MVP']))
                echo '<font color="red">Please enter your email.</font>';
            if(empty($POST['country']))
                echo '<font color="red">Please enter your age.</font>';
            if(empty($POST['bored']))
                echo '<font color="red">Please enter your age.</font>';
            if(empty($POST['toy']))
                echo '<font color="red">Please enter your age.</font>';
            if(empty($POST['teacher']))
                echo '<font color="red">Please enter your age.</font>';
            if(empty($POST['money']))
                echo '<font color="red">Please enter your age.</font>';
            if(empty($POST['occupy']))
                echo '<font color="red">Please enter your age.</font>';
        }
    ?>
      </form>
    </div>
    <footer>&copy 2019 Jeroen Faasse</footer>
  </body>
</html>
