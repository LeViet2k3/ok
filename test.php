<?php
   $dsn = "mysql:host=localhost;dbname=qllop";
   $username = "root";
   $password = "";

   try{
       $objPDO = new PDO($dsn,$username,$password);
       //echo "Ket noi thanh cong !";
       $query = "select * from lop";
       $pdoStatement = $objPDO->prepare($query);
       $pdoStatement->execute();
       if($pdoStatement->rowCount() > 0){
          $result = $pdoStatement->fetchAll();
       }
       $pdoStatement->closeCursor();

       echo json_encode($result);
   }catch(PDOException $e){
       $msg = $e->getMessage();
       echo "Error: $msg";
   }

?>