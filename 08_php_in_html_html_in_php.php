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
                'contry_name' => 'Vietnam',
                'age' => 28,
                'user_logged_in' => true
            );
            ?>
            <!-- php in html -->
            <h1>Hello: <?php echo $student['first_name'];?></h1>

            <!-- html in php      -->
            <?php echo "<h1>Hello: " . $student['first_name'] .  "</h1>"?>
            
          </div>
    </div>
    
  </body>
</html>
