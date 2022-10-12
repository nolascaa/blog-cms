<?php
include 'header.php';
include 'nav.php';
?>
<?php

function getPostDetailsFromDatabase()
{
  // Get the post title
  $postTitle = rawurldecode($_GET["title"]);

  // Get the post that matches the postTitle
  include_once './includes/db_connect.php';
  $sql = "SELECT * FROM posts WHERE title ='" . $postTitle . "'";
  $result = mysqli_query($conn, $sql);

  // Get the first row from the result as an associative array
  $postDetails = mysqli_fetch_assoc($result);
  return $postDetails;
}
?>

<main>

  <?php
  // Post details contains all the data to generate the blog from
  $postDetails = getPostDetailsFromDatabase();

  ?>
  <h2> <?php echo $postDetails["title"]; ?> <h2>
      <div> <?php echo $postDetails["author"]; ?> </div>
      <div> <?php echo $postDetails["date"]; ?> </div>
      <div> <?php echo $postDetails["content"]; ?> </div>

</main>

<?php
include 'footer.php';
?>

</html>