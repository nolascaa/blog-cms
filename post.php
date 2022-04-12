<?php
    include 'header.php';
    include 'nav.php';
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
          function getPostDetailsFromDatabase() {
            //TODO in Module 4
            // get this data from a database instead of hardcoding it
            $postDetails = array('title' => 'Blog Post 1',
                                'content' => 'My first blog post',
                                'date' => '04/11/2022',
                                'author' => 'Aaron Nolasco');

            return $postDetails;
          }
      ?>

        <style>
            main{
                margin: 0;
                padding: 20px;
                background-color: rgb(230, 189, 189);
              }
        </style>

      <?php
          // Post details contains all the data to generate the blog from
            $postDetails - getPostDetailsFromDatabase();

      ?>
      <h1> <?php echo $postDetails["title"]; ?> <h1>
      <div> <?php echo $postDetails["author"]; ?> </div>
      <div> <?php echo $postDetails["date"]; ?> </div>
      <div> <?php echo $postDetails["content"]; ?> </div>

    </main>

    <?php
    include 'footer.php';
    ?>
</html>