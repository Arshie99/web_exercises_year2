<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" charset="utf-8">
    <title>Concatenation of strings</title>
  </head>
  <body>
  <?php
  $around = "around";
  echo 'LINE1: what goes ' . $around . ' comes ' . $around . '.';

  #replacement echo line
  echo 'LINE2: What goes $around comes $around.';

   ?>
  </body>
</html>
