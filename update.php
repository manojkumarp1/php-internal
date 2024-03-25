<?php
    include("connection.php");
    $id=$_GET["pid"];

    $sql="select * from register where pid='$id'";

    $res=$conn->query($sql);
    $row=$res->fetch_assoc();
?><h1>Registration form</h1>
<form action="updater.php" method="post">
    <input type="hidden" name="id" value=<?php echo $id ?>>
    <label for="pname">enter the name :</label>
    <input type="text" name="pname" value=<?php echo $row['pname'] ?>><br><br>


    <label for="did">enter the disid :</label>
    <input type="number" name="did" value=<?php echo $row['disid'] ?> ><br><br>

    <label for="disname">enter the dis name :</label>
    <input type="text" name="disname" value=<?php echo $row['disname'] ?> ><br><br>

    <label for="drid">enter the dr id:</label>
    <input type="text" name="drid" value=<?php echo $row['drid'] ?>><br><br>

    <label for="drname">enter the dr name:</label>
    <input type="text" name="drname" value=<?php echo $row['drname'] ?>><br><br>

    <input type="submit">

</form>
