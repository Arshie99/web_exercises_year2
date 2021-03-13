<html>
  <body>
    <?php

    //variables
    $number = $_POST["num"];
    $greetings = "Hello PHP";

    for ($i = 1; $i < $number+1 ; $i++)
    {
      echo "font size = $i  <br/>";
      echo "<font size = $i > $greetings </font> <br/>";
    }
     ?>
  </body>
</html>
