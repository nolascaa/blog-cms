<?php
include 'header.php';
include 'nav.php';
?>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

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
     <link rel="stylesheet" href="style.css">
     
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