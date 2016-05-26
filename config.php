<?php
 // Connects to Our Database 
 $conn = new mysqli('localhost', 'root', 'root123', 'learnerack');
 if ($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }	
 ?> 