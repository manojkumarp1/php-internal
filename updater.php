<?php
     $pname=$_POST["pname"];
     $disid=$_POST["did"];
     $disname=$_POST["disname"];
     $drid=$_POST["drid"];
     $drname=$_POST["drname"];

    include("connection.php");
    $id=$_POST["id"];

    $sql="update register set pname='$pname',disid='$disid',disname='$disname',drid='$drid',drname='$drname' where pid='$id'";
    $res=$conn->query($sql);

    header("Location:viewall.php");
    
?>