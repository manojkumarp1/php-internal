<?php
    include("navigate.html");
    include("connection.php");
    $pname=$_POST["pname"];
    $disid=$_POST["did"];
    $disname=$_POST["disname"];
    $drid=$_POST["drid"];
    $drname=$_POST["drname"];

    $sql="INSERT INTO register (pname, disid, disname, drid, drname) values('$pname','$disid','$disname','$drid','$drname')";

    if($conn->query($sql)==TRUE)
    {
        echo "NEW RECORD INSERTED";
        header("Location:login.html");
    }
    else{
        echo "error".$conn->error;
    }



    

?>