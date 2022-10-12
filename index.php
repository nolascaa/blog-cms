<html>

<head>
  <title>
    Aaron's Blog CMS
  </title>
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

<style>
  main {
    margin: 0;
    padding: 20px;
    background-color: rgb(230, 189, 189);
  }

  main>h1,
  p,
  .browser {
    margin: 10px;
    padding: 15px;
  }

  .browser {
    background: white;
  }

  .browser>h2,
  p {
    margin: 4px;
    font-size: 120%;
  }
</style>

<body>
  <?php
  include 'header.php';
  include 'nav.php';
  ?>
  <main>
    <ul>
      <?php
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