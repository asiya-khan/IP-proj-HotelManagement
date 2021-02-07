<?php
   session_start();
   unset($_SESSION["uname"]);
   unset($_SESSION["pwd"]);
   session_destroy();
   header('location:index.html');
?>