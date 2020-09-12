<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          
          <div class="code-content">
          <?php
            echo "Variable PHP!";

            echo "<hr>";

            $name = "Thanh";

            $favorite_number = 8;

            $is_men = true;

            echo "Name: " . $name;

            echo "<hr>";

            echo "Favorite number: " . $favorite_number;

            echo "<hr>";

            echo "Is men: " . $is_men;

            echo "<hr>";

            echo "<span>NOTE</span> name convention!";

            echo "<hr>";

            print "not use __ (2 underscopre), ... need use \$is_user_logged_in "

          ?>
          </div>
    </div>
    
  </body>
</html>
