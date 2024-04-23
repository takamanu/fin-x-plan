<?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbName= "finxplan";
    
    
    $conn = mysqli_connect($servername, $username, $password, $dbName) or die(mysqli_connect_error());
?>