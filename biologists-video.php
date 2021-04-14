<?php
include("config.php");
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

//echo "$date";

$currentDate = [
  'date' => ''
];

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.js"></script>

        <title>Video</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header-toggle">
                <i class="fas fa-bars" id="header-toggle"></i>
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

<div id="video-tab">

        <div class="wrapper-video-tab">
          <div class="video-player">
            <div class="date-picker">
              <form action="create.php" class="" method="post">
              <label for="dateOfFootage">Footage date</label>
              <input type="date" name="date" required id="datePicker" value="<?php echo $date?>">
            </div>
            <div class="web-video">
              <?php
              $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
              while($row = mysqli_fetch_assoc($fetchVideos)){
                $location = $row['location'];
                $name = $row['name'];
                $date = $row['date'];
                $dateToPrint = date('M-d-y', strtotime($date) ) ;
                echo "<video src='".$location."' controls width='426px' height='240px'id='myVideo' ></video>";
              }
            ?>
          </div>
          </div>
          <div class="notes">
              <span class="note-top"><i class='far fa-clipboard'></i>Event at: <input type="text" id="timeString", name="title" value="<?php echo $currentNote['title']?>" readonly="readonly" class="timeString-display"></span></input>
              <textarea class="notes-textarea" oninvalid="this.setCustomValidity('Cannot save empty note.')" required id="noteInput" name="description" rows="13" cols="45" placeholder="Type your notes here"><?php echo $currentNote['description'] ?></textarea>
                <button>Save Note</button>
            </form>

          </div>
        </div>
        <div class="wrapper-graph">
          <div class="video-graph">
            <canvas id="myChart"></canvas>
          </div>
      </div>

</div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="biologists-js.js"></script>
        <script src="load.js"></script>
        <script src="charts.js"></script>
    </body>
</html>
