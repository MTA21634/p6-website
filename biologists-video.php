<?php

/** @var Connection $connection */
$connection = require_once 'connection.php';
// Read notes from database
$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];
if (isset($_GET['id'])) {
    $currentNote = $connection->getNoteById($_GET['id']);
}

?>

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

        <title>Video</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header-toggle">
                <i class="fas fa-angle-double-right" id="header-toggle"></i>
            </div>
            <ul class="nav-horizontal">
              <li><a href="#">Help</a></li>
              <li><a href="index.php">Quit</a></li>
            </ul>
        </header>
        <div class="side-navbar" id="nav-bar">
            <nav class="nav" id="content">
                <div>
                    <a href="#" class="nav-logo">
                        <i class='note-circle fas fa-circle'></i>
                        <span class="nav-logo-name">LimfjordCam</span>
                    </a>

                    <div class="nav-list">
                        <a href="#" class="nav-link active">
                        <i class='fas fa-play-circle' ></i>
                            <span class="nav-name">Video</span>
                        </a>

                        <a href="biologists-statistics.php" class="nav-link">
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

        <div class="wrapper-video-tab">
          <div class="video-player">
            <div class="date-picker">
              <label for="dateOfFootage">Footage date</label>
              <input type="date" name="dateofFootage" id="datePicker" value="">
            </div>
            <div class="web-video">
              <video id="myVideo" width="426" height="240" controls>
              <source src='videos/crab.mp4' type="video/mp4">
            </video>
          </div>
          </div>
          <div class="notes">
            <form action="create.php" class="new-note" method="post">
              <span class="note-top"><i class='far fa-clipboard'></i>Event at: <input type="text" id="timeString", name="title" value="" readonly="readonly" class="timeString-display"></input>
              <textarea class="notes-textarea" name="description" rows="13" cols="45" placeholder="Type your notes here"></textarea>
                <button>Save Note</button>
            </form>

          </div>
        </div>
        <div class="wrapper-graph">
          <div class="video-graph">
            <br><br><br>
          </div>
        </div>

        <script src="biologists-js.js"></script>

    </body>
</html>
