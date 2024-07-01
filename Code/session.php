<?php
   session_start();
   if(!isset($_SESSION["Fullname"])){
      header("location:Log_inForm.php");
   }
   
   /* this is only an example of setting the browser to control it's cache saving =  Set cache-control headers to prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

header("location:error.php");
exit();

*/
