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
            // var_dump() helpful (huu ich) when rake (caof) data type
            $student = array(
                'first_name' => 'Thanh',
                'last_name' => 'Nguyen',
                'contry_name' => 'Vietname',
                'age' => 29,
                'user_logged_in' => true
            );

            echo "<pre>";
            var_dump($student);
            echo "</pre>";

            // not show data type
            echo "<pre>";
            print_r($student);
            echo "</pre>";

            ?>

            
          </div>
    </div>
    
  </body>
</html>
