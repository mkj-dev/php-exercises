<html>
  <head>
    <title>PHP Exercises</title>
    <style>
      body { text-align: center; }
      .title {
        font-size: 36px;
        border-bottom: 2px solid #444;
      }
      .error { color: red; }
      .valid { color: green; }
    </style>
  </head>
  <body>
  <?php
    echo "<h2 class='title'>Control structures</h2>";
    include_once('./control-structures.php');
    echo "<h2 class='title'>Functions</h2>";
    include_once('./functions.php');
  ?>
</html>