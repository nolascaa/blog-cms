<?php
    include 'header.php';
    include 'nav.php';
?>
    
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

    
    <main>
        <form action="/action_page.php" method="get">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"><br><br>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date"><br><br>
            <label for="post">Post:</label>
            <textarea id="post" name="post" rows="6" cols="50">
            Tell us your story
            </textarea>
            <input type="submit" value="Submit">
            <action="submit-post.php" method="POST">
          </form>
    </main>

<?php
    include 'footer.php';
?>

</html>