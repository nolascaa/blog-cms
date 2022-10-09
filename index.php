<?php
    include 'header.php';
    include 'nav.php';
    include_once 'db_connect.php'
?>
    
    <style>
    main{
        margin: 0;
        padding: 20px;
        background-color: rgb(230, 189, 189);
      }
      
      main > h1, p, .browser {
        margin: 10px;
        padding: 15px;
      }
      
      .browser {
        background: white;
      }
      
      .browser > h2, p {
        margin: 4px;
        font-size: 120%;
      }
    </style>
    
    <main>
      <?php
          function getPostTitlesFromDatabase() {
            // TODO in Module 4
            // get this data from a database instead of hardcoding it
            $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
            return $postTitles;
          }
      ?>
        <ul>
          <?php
              $postTitles = getPostTitlesFromDatabase();

              foreach($postTitles as $postTitle) {
                  echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle .
                  "</a></li>";
              }
          ?>
        </ul>
    </main>

    <?php
    include 'footer.php';
    ?>
</html>