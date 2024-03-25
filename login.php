<?php
    include("connection.php");
    $pname=$_POST["pname"];

    $sql="select * from register where pname='$pname'";

    $res=$conn->query($sql);
    if($res -> num_rows > 0)
    {
        setcookie("pname","$pname",time()+360);
        session_start();
        $_SESSION["pname"]=$pname;
        header("Location:viewall.php");
    }
?>