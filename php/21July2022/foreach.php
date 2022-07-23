<?php
// Numeric indexed array

$subjects = array("PHP", "JAVA", "Oracle", "Python", "C#");

foreach($subjects as $sub){
echo "$sub is my subject <br>";
}

?>
<hr>
<?php

$languages = array(
    "PHP"=>"http://www.php.net", 
    "JAVA"=>"http://www.java.com", 
    "Oracle"=>"http://www.oracle.com", 
    "Python"=>"http://www.python.org", 
    "C#"=>"http://www.asp.net"
);
foreach($languages as $lang=>$site){
    echo "MY language is $lang and it's site is <a href=\"$site\" target=\"_blank\">$site</a>  <br>";
}


echo rand (1,50)
?>
