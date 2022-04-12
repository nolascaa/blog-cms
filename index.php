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
        <li>
            <a href="post.php">Post 1</a>
        </li>
    </main>

    <?php
    include 'footer.php';
    ?>
</html>