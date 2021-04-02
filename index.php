<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,900;1,100;1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/26ce6e3e48.js" crossorigin="anonymous"></script>
  <title>P6 Website</title>
</head>
<div class="container">

  <body>
    <div id="home">
      <header>
        <nav>
          <div class="logo">
            <h4><i class="fas fa-circle"></i>LimfjordCam</h4>
          </div>
          <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#role">Biologists</a></li>
            <li><a href="#role">Public</a></li>
          </ul>
          <div class="burger">
            <div class="first-line"></div>
            <div class="second-line"></div>
            <div class="third-line"></div>
          </div>
        </nav>
      </header>
      <div class="wrapper-home">
        <div>
          <h1>Limfjord Camera Setup</h1>
          <div class="nested-home-1">
            <h2 class="button">Underwater Fauna Monitoring</h2>
          </div>
          <div class="nested-home-2">
            <p class="paragraph-space">The aim of this platform is to support marine research and development with the use of automated image processing and crowdsourcing.</p><br>
            <p>The platform is available for both marine biologists and the general public.</p>
          </div>
        </div>
        <div>
          <div class="nested-home-3">
            <h2>Highlights</h2>
          </div>
          <div id="collage">
            <img src='img/ImageCollage.png' alt="">
          </div>
          <div class="nested-home-4">
            <h3>Select your role</h3>
          </div>
          <a href="#role"><button class="button-down"></button></a>
        </div>
      </div>
    </div>
    <div class="wrapper-role" , id="role">
      <div class="nested-role-1">
        <a href="#home"><button class="button-up"></button></a><br><br><br>
        <h1>What is your role?</h1>
        <p>Select your corresponding role below.</p>
      </div>
      <div class="wrapper-role-2">
        <div class="nested-role-2">
          <div class="nested-role-2a">
            <a href="biologists-video.php"><h1>Biologists</h1></a>
          </div>
          <p>Marine fauna monitoring tool developed for marine biologists.</p>
          <p>The system incorporates automated video sample extraction, fish count, and the ability to take notes.</p>
        </div>
        <div class="nested-role-3">
          <p>Contribute to the domain of marine biology by completing simple microtasks.</p>
          <p>Keep track of your score and compete with others, while also learning about the underwater world of Aalborg.</p>
          <div class="nested-role-2b">
            <a href="#role"><h1>Public</h1></a>
          </div>
        </div>
      </div>
    </div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>
