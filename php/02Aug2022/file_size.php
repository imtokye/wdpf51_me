<?php 
$file = "../HTML_MCQ2.docx";

$bytes = filesize($file);
$kb = round($bytes/1024,2);

$filename = basename($file);

echo "My file name is $filename $bytes $kb";


?>