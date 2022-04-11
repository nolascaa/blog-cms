<html>
    <header>
        <style>
            header {
              text-align: center;
              padding: 3px;
              background-color: DarkSalmon;
              color: white;
            }
        </style>

        <h1>My Blog</h1>
        <p>Advanced Web Projects: Blog CMS Website</p>
    </header>

    <nav>
        <style>
            nav {
              text-align: center;
              padding: 20px;
              font-size: 120%;
              background-color: rgb(255, 255, 255);
              color: white;
            }
        </style>
        <a href="index.php">Home</a>
        <a href="post-submission.php">Post Submission</a>
    </nav>
    
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
          </form>
    </main>

    <footer>
        <style>
            footer {
              text-align: center;
              padding: 3px;
              background-color: rgb(184, 97, 111);
              color: white;
            }
        </style>
        <p>Created by Aaron Nolasco</p>
    </footer>
</html>