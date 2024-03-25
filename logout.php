<?php
    

    // setcookie("pname","",time()-360);

    session_start();
    session_unset();
    session_destroy();

    header("Location:login.html");
?>