<?php
  if( !isset($_SESSION['user']) || !isset( $_SESSION['u_id']))
    {    
        header('Location: index.php'); 
    }   
?>






