<?php
 class Visitor
 {
 private static $visitors = 0;
 function __construct()
 {
 self::$visitors++;
 }
 static function getVisitors()
 {
 return self::$visitors;
 }
 }
 // Instantiate the Visitor class.
 $visits = new Visitor();
 echo Visitor :: getVisitors();
echo "<pre>";
 $visits1 =new Visitor();
 echo Visitor :: getVisitors();
?>