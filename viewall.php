<?php
    session_start();
    //if(isset($_COOKIE["pname"]))
    if(isset($_SESSION["pname"]))
    {

    include("navigate.html");
    include("connection.php");
    $sql="Select * from register";
    $res=$conn->query($sql);

    if($res -> num_rows > 0)
    {?>

    <h1> details </h1>
    <table border="5">
        <tr>
            <th>pname </th>
            <th>disid</th>
            <th>disease_name </th>
            <th>drid </th>
            <th>drname </th>
            <th>Operation</th>
        </tr>
    <?php
        while($row = $res->fetch_assoc())
        {?>
            <tr>
            <td><?php echo $row["pname"] ?> </td>
            <td><?php echo $row["disid"] ?></td>
            <td><?php echo $row["disname"] ?></td>
            <td><?php echo $row["drid"] ?></td>
            <td><?php echo $row["drname"] ?></td>
            <td><a href="update.php?pid=<?php echo $row["pid"] ?>">update</a>|<a href="delete.php?pid=<?php echo $row["pid"] ?>">delete</a></td>
        </tr>
            

        <?php
                
           
        }
    }
}
else
{
    echo "login first";
}
?>