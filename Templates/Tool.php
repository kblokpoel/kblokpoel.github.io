<!DOCTYPE html>
<html lang="en" dir="ltr" style="scroll-behavior: smooth;">
  <head>
    <meta charset="utf-8">
    <title>Portofolio Project Keren Blokpoel</title>
    <link rel="stylesheet" href="../public/CSS/style.css">
  </head>
  <body>
      <ul class="topnav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="Tool.php">Tools</a></li>
          <li><a href="Calculator.php">Calculator</a></li>
          <li><a href="animequotes.php">Anime Quotes</a></li>
          <li><a href="tictactoe.php">Tic Tac Toe</a></li>
        <button class="button-light-on" style="border-radius: 50%; background: rgb(116, 102, 102); margin-top: 5px; margin-bottom: 5px;">Dark mode</button>
      </ul>

      
      <h1 id="converttext" style="font-family: monospace;">Hier is een Converter die Uren naar Dagen veranderd.</h1>
      <input type="number" id="numberDays" value="Voer uren hier in" style="width: 400px; height: 30px;" placeholder="Voer hier het aantal uren in">
      <button class= "converterButton" onclick="hourToDay()">Convert</button>
      <p id="hours" style="font-family: monospace; font-size: 28px;"> Hier zijn de dagen in uren:</p>
      <br>

    <div class="container-fluid">
      <div id="footer">
          <div class="row">
              <div class="col-12 text-light text-center">
                <p style="color: rgb(255, 255, 255); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;">© 2021 Keren Blokpoel</p>
              </div>
          </div>
      </div>

    <script src="../public/JS/javascript.js"></script>
    <script src="../public/JS/converter.js"></script>
    