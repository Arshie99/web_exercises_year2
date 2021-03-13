<?php

$file1 = fopen("lab5.1.txt", "rw") or die("unable to open file");
$file2 = fopen("lab5.2.txt", "r") or die("unable to open file");
echo "file1<br/>";
echo fread($file1,filesize("lab5.1.txt"));
echo "<br/><br/><br/><br/><br/>";
echo "file2<br/>";
echo fread($file2,filesize("lab5.2.txt"));
fclose($file1);
fclose($file2);

 ?>
