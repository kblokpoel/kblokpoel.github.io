<!DOCTYPE html>
<html lang="en" dir="ltr" style="scroll-behavior: smooth;">
<?php
require 'Modules/Projects.php';
$projects = getAllProjects();
?>
  <head>
    <meta charset="utf-8">
    <title>Portofolio Project Keren Blokpoel</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
  </head>
  <body>
      <ul class="topnav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="Tool.php">Tools</a></li>
          <li><a href="Calculator.php">Calculator</a></li>
          <li><a href="animequotes.php">Anime Quotes</a></li>
          <li><a href="tictactoe.php">Tic Tac Toe</a></li>
        <button class="button-light-on" style="border-radius: 50%; background: rgb(116, 102, 102); margin-top: 5px; margin-bottom: 5px;">Dark mode</button>
      </ul>

      <div class="container">
        <div class="card-deck">
          <div class="row">
              <?php foreach ($projects as $project): ?>


                  <div class="col-lg-3">
                      <div class="card">
                          <div class="card-header">
                              <h4><?= $project->name; ?></h4>
                          </div>
                          <img class="card-img-top card-size auto d-block img-fluid" src="<?= $project->image; ?>" alt="image">
                          <div class="card-body">
                              <hr>
                              <p><?= $project->description; ?></p>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
<!--            <div class="card" style="width: 33%; ">-->
<!---->
<!--              <h2>Bootstrap opdracht:</h2>-->
<!--              <p>De bootstrap opdracht, hieraan heb ik zelf gewerkt en een website moeten maken. Hiervoor had ik een tijdslimiet van 2 uur</p>-->
<!--              <br>-->
<!--              <br>-->
<!--              <br>-->
<!--              <br>-->
<!--              <br>-->
<!--              -->
<!--              <img src="./images/cool swag.PNG" id="dripimg2" alt="c#" style="filter: drop-shadow(15px 10px 8px #1b1b1b); ">-->
<!--            </div>-->
<!--            <div class="card" style="width: 34%; ">-->
<!--              <h2>Dice Game:</h2>-->
<!--              <p>De dice game, ik heb hieraan-->
<!--                gewerkt met:-->
<!--                <br>-->
<!--                <b>-->
<!--                  <br>-->
<!--                Gurjinder Singh<br>-->
<!--                Ramy Haroun<br>-->
<!--                Sandro de Bruin<br></p></b>-->
<!--              <img src="./images/drip.gif" id="dripimg3" alt="c#" style="filter: drop-shadow(15px 10px 8px #1b1b1b) ;">-->
<!--              <br>-->
            </div>
          </div>
        </div>

        




        
    <div class="container-fluid">
      <div id="footer">
          <div class="row">
              <div class="col-12 text-light text-center">
                <p style="color: rgb(255, 255, 255); font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;">© 2021 Keren Blokpoel</p>
              </div>
          </div>
      </div>

       











      <script src="./JS/project.js"></script>
      </body>