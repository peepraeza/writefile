<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hello World!\n";
fwrite($myfile, $txt);
fclose($myfile);

echo 'file was written';
?>