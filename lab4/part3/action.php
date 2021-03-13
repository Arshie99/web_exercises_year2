<html>
  <body>
    <?php
    include 'header.php';
    //variables
    $goodmorning = "Have a good morning!";
    $goodday = "Have a good day!";
    $goodevening = "Have a good Evening!";
    $time = $_POST["hour"];

    if ($time < 10)
    {
      echo "Time is: $time<br/>";
      echo "$goodmorning<br/>";
    } else if ($time < 18)
    {
      echo "Time is: $time<br/>";
      echo "$goodday<br/>";
    }
    else if ($time < 23)
    {
      echo "Time is: $time<br/>";
      echo "$goodevening<br/>";
    }
    else
    {
      echo "Time is: $time <br/>";
      echo "Switch off computer";
    }

     ?>
  </body>
</html>
