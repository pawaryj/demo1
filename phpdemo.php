<!DOCTYPE html>
<html>
  <head>
    <title>Sample Webpage</title>
    <style>
      body {
        background-color: #f2f2f2;
      }
      h1 {
        color: #333;
        text-align: center;
      }
      p {
        font-size: 18px;
        font-family: Arial, sans-serif;
        line-height: 1.5;
      }
    </style>
  </head>
  <body>
    <?php
      // Define a variable
      $name = "John";
    ?>
    <h1>Welcome to my sample webpage, <?php echo $name; ?>!</h1>
    <p>This is a simple example of a webpage using PHP, HTML and CSS.</p>
  </body>
</html>
