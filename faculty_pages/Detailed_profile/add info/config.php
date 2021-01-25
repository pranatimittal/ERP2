<?php
  define('_HOST_NAME','localhost');
  define('_DATABASE_NAME','mobileed_Exam');
  define('_DATABASE_USER_NAME','mobileed_Monika');
  define('_DATABASE_PASSWORD','Monika@1234');
$con = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
   if($con->connect_errno)
   {
       die("ERROR : -> ".$con->connect_error);
   }
?>