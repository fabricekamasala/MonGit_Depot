<?php
 try
 {
   $strConnection='mysql:host=localhost;dbname=bd_vehicule';
   $pdo=new PDO ($strConnection,'root',''); 
 }
 catch (PDOException $e)
 {
   $msg='Erreur PDO dans'.$e-> getMessage();
   die($msg);
 }
?>