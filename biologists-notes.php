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

        <title>Notes</title>
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

                        <a href="biologists-statistics.php" class="nav-link">
                            <i class='fas fa-chart-bar' ></i>
                            <span class="nav-name">Statistics</span>
                        </a>

                        <a href="#" class="nav-link active">
                            <i class='fas fa-sticky-note' ></i>
                            <span class="nav-name">Notes</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="wrapper-notes-tab" id="notes-tab">
          <div>
            <div class="date-picker">
              <label for="dateOfNote">Notes by date</label>
              <input type="date" name="dateofNote" id="notePicker" value="">
            </div>
          </div>

          <div class="get-notes">
            <p>Retrieve notes by selecting the corresponding timestamp. Click on the note title or description to edit.</p>
            <div class="">
              Timestamp selector goes here
            </div>


            <?php if ($currentNote['id']): ?>
              <form action="create.php" class="new-note" method="post">
                <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
                <span class="#"><i class='far fa-clipboard'></i>Event at: <input type="text" id="timeString", name="title" value="<?php echo $currentNote['title']?>" readonly="readonly" class="timeString-display"></input>
                <textarea class="#" name="description" rows="8" cols="45" placeholder="Type your notes here"><?php echo $currentNote['description'] ?></textarea>
                  <button>Edit Note</button>
              </form>
                 <?php else: ?>

                 <?php endif ?>




            <div class="notes-box">
              <?php foreach ($notes as $note): ?>

                <div class="note">
                  <div class="title">
                      <a href="?id=<?php echo $note['id']?>">  <span><i class='far fa-clipboard'></i></span>Event at: <span><?php echo $note['title'] ?></span> </a>
                  </div>
                <div class="description">
                  <a href="?id=<?php echo $note['id']?>">  <?php echo $note['description'] ?> </a>
                </div>

                <form action="delete.php" method="post">
                     <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                     <button class="close">X</button>
                 </form>
            </div>
            <?php endforeach; ?>

            </div>

          </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="biologists-js.js"></script>
        <script src="load.js"></script>
    </body>
</html>
