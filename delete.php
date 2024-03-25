<?php
     

    include("connection.php");
    $id=$_GET["pid"];

    $sql="delete from register where pid='$id'";
    $res=$conn->query($sql);

    header("Location:viewall.php");
    
?>