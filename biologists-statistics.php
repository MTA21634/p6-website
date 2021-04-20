<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style-biologists.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,900;1,100;1,300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/26ce6e3e48.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <title>Statistics</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header-toggle">
                <i class="fas fa-bars" id="header-toggle"></i>
            </div>
            <ul class="nav-horizontal">
              <li><a href="#home">Help</a></li>
              <li><a href="index.php">Quit</a></li>
            </ul>
        </header>
        <div class="side-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav-logo">
                        <i class='fas fa-circle'></i>
                        <span class="nav-logo-name">LimfjordCam</span>
                    </a>

                    <div class="nav-list">
                        <a href="biologists-video.php" class="nav-link">
                        <i class='fas fa-play-circle' ></i>
                            <span class="nav-name">Video</span>
                        </a>

                        <a href="#" class="nav-link active">
                            <i class='fas fa-chart-bar' ></i>
                            <span class="nav-name">Statistics</span>
                        </a>

                        <a href="biologists-notes.php" class="nav-link">
                            <i class='fas fa-sticky-note' ></i>
                            <span class="nav-name">Notes</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="wrapper-statistics-tab">
          <div class="statistics-tab-graph">
            <p>Accuracy of the system</p>

            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          </div>
          <div class="statistics-tab-provenance">
            <p>Methods used in extracting data</p>
            <div class="prov-wrapper">
            <div class="info-box-wrapper">
              <div onmouseover="mouseOver1()" onmouseout="mouseOut1()" class="info-box">
                <h1>Image acquisition</h1> <i class="fas fa-info-circle"></i>
              </div>
              <i class="fas fa-arrow-down"></i>
              <div onmouseover="mouseOver2()" onmouseout="mouseOut2()" class="info-box">
                <h1>Preprocessing</h1><i class="fas fa-info-circle"></i>
              </div>
              <i class="fas fa-arrow-down"></i>
              <div onmouseover="mouseOver3()" onmouseout="mouseOut3()" class="info-box">
                <h1>Background substraction</h1><i class="fas fa-info-circle"></i>
              </div>
              <i class="fas fa-arrow-down"></i>
              <div onmouseover="mouseOver4()" onmouseout="mouseOut4()" class="info-box">
                <h1>Object extraction</h1><i class="fas fa-info-circle"></i>
              </div>
              <i class="fas fa-arrow-down"></i>
              <div onmouseover="mouseOver5()" onmouseout="mouseOut5()" class="info-box">
                <h1>Object analysis</h1><i class="fas fa-info-circle"></i>
              </div>
              <i class="fas fa-arrow-down"></i>
              <div onmouseover="mouseOver6()" onmouseout="mouseOut6()" class="info-box">
                <h1>Final data</h1><i class="fas fa-info-circle"></i>
              </div>
            </div>
            <div class="toggle-text">
                <p id="output-1"></p>
                <p id="output-2"></p>
                <p id="output-3"></p>
                <p id="output-4"></p>
                <p id="output-5"></p>
                <p id="output-6"></p>
                <div class="info-legend">
                  </i><h2>Hover over the rectangles for more information.</h2>
                </div>
            </div>
          </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="biologists-js.js"></script>
        <script src="load.js"></script>
        <script src="stats-chart.js"></script>
          <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
</html>
