<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=notes", "root", "");

$query = "SELECT * FROM notes WHERE title BETWEEN '".$_POST["minimum_range"]."' AND '".$_POST["maximum_range"]."' ORDER BY title ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';


if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .=

    '

      <div class="note">
          <div class="title">
              <a href="?id='.$row['id'].'">  <span><i class="far fa-clipboard"></i></span>Event at: <span>'.$row['title'].'</span> </a>
          </div>
        <div class="description">
          <a href="?id='.$row['id'].'">  '.$row["description"].'</a>
        </div>

        <div class="notes-box">
        <form action="delete.php" method="post">
             <input type="hidden" name="id" value="'.$row['id'].'">
             <button class="close">X</button>
         </form>
         </div>
      </div>

    ';




	}
}
else
{
	$output .= '
		<p style="background:#C8F205; width: 40%; margin-left: 400px; font-size:20px; "align="center">There are no notes in this time range. Modify the slider.</p>
	';
}

$output .= '
</div>
';

echo $output;

?>
