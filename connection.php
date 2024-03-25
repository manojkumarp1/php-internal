<?php
    $conn = new mysqli("localhost","root","manoj","internal");

    if($conn -> connect_error)
    {
        die("Connection failed");
    }

?>