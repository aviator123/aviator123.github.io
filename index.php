 <?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = $_POST["cmd"];
fwrite($myfile, $txt);
fclose($myfile);
?> 