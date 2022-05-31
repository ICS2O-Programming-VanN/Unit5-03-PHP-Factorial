<html>
  <head>
    <!-- 	Meta Data	 -->
    <meta charset="UTF-8">
    <meta name="Van" content="My website in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="DESCRIPTION" content="Factorial, Using PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>Factorial, Using PHP</title>
    <!-- Links to style.css file -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <!-- Heading and paragraph -->
    <?php
      echo '<center><h1>Factorial, Using PHP</h1></center>';
      echo "<h3>Please Enter the following below:</h3>";
      echo "<p>This program will return you the factorial of an inputted number!</p>";
    ?>
    <!-- Number input field and button (Takes Input) -->
    <form action="./factorial.php" method="post" target="results">
      <p>Enter a positive integer:</p> <input type="number" min="0" step="1" name="user-integer" placeholder="ex. 1"> <br>
      <br><br>
      <input type="submit" name="submit" value="Submit"> <br>
    </form>
    <!-- Output from numbers.php -->
    <iframe id="results" name="results"></iframe>
  </body>
</html>
