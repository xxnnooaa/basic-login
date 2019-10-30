<?php
   $conn = new mysqli('localhost','root','jutarat0402','basic');

   if($conn->connect_errno){
       die("Connection failed".$conn->connect_errno);
   }
?>