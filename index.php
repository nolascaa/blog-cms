<html>

<head>
  <title>
    Aaron's Blog CMS
  </title>
</head>
<?php
function getPostDetailsFromDatabase()
{
  // Get the post title
  $postTitle = rawurldecode($_GET["title"]);

  // Get the post that matches the postTitle
  include_once './includes/db_connect.php';
  $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
  $result = mysqli_query($conn, $sql);

  // Get the first row from the result as an associative array
  $postDetails = mysqli_fetch_assoc($result);
  return $postDetails;
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
    <?php
    function getPostTitlesFromDatabase()
    {
      // TODO in Module 4
      // get this data from a database instead of hardcoding it
      $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
      return $postTitles;
    }
    ?>
    <ul>
      <?php
      $postTitles = getPostTitlesFromDatabase();
      $postDetails = getPostDetailsFromDatabase();


      foreach ($postTitles as $postTitle) {
        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle .
          "</a></li>";
      }

      echo "<p>$postDetails</p>"
      ?>
    </ul>
  </main>

  <?php
  include 'footer.php';
  ?>
</body>

</html>