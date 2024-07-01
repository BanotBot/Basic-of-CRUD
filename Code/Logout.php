
<?php
   session_start();
   if(session_destroy()){
    header("location:Log_inForm.php");
   }

