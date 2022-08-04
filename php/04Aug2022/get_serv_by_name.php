<?php
 echo getservbyname("ssh", "tcp"); 
 //http, https, ftp, imap, pop3, ssh
 echo"<pre>";
 echo getservbyport("80", "tcp"); 
?>