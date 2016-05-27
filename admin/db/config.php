<?php
ob_start();
// Local Connects to Our Database mechoserveadmin mechoserveadmin123 mechoserve
 $conn = new mysqli('localhost', 'admin', 'admin123', 'learnerack');
 if ($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }  

 ?> 