<?php
// $servername = "sql307.epizy.com";
// $username = "epiz_33081082";
// $password = "XLwptiDPJov8br";
// $databasename = "epiz_33081082_digiticket001";

   $servername = "localhost";
   $username = "root";
   $password = "admin";
   $databasename = "digiticket001";

   // $servername = "sql307.ezyro.com";
   // $username = "	ezyro_33081050";
   // $password = "9an1rx9n8n";
   // $databasename = "ezyro_33081050_digiticket001";
   
   $con =  mysqli_connect($servername, $username, $password, $databasename);
   
   if($con -> connect_errno){echo "Database connection failed";
      exit();
   }else{echo "";
   };
?>