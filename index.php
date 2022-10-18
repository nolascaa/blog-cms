<DOCTYPE html>
<html>

<head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <title>
    Aaron's Blog CMS
  </title>
  <link rel="stylesheet" href="style.css">
</head>

<?php

function getPostTitlesFromDatabase()
{
  // Get all the post titles from the posts table
  include_once './includes/db_connect.php';
  $sql = "SELECT title FROM posts";
  $result = mysqli_query($conn, $sql);

  // Get each result row as an assoc array, then add title to $postTitles
  $postTitles = array();
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($postTitles, $row['title']);
  }
  return $postTitles;
}
?>

<body>
  <h1 style="text-align:center; color:rgb(230, 189, 189);" id="hidden">I was hidden!</h1>
  <button onClick="revealMessage()">Hello</button>
  <p id="hiddenMessage" style="display:none">Hi There!</p>

  <?php //Refactored header and navigation elements
  include 'header.php';
  include 'nav.php';
  ?>

  <main>
    <ul>
      <?php
      // Display post titles
      $postTitles = getPostTitlesFromDatabase();
      foreach ($postTitles as $postTitle) {
        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle .
          "</a></li>";
      }
      ?>

    </ul>
  </main>

  <?php
  include 'footer.php';
  ?>
</body>

</html>