<?php

$con=new mysqli("localhost","root","","pdo_test");

if($con->connect_error)
{
    echo "Error in connection";
}
$stmt=$con->prepare("INSERT INTO `emp` VALUES(?,?,?,?)");
$stmt->bind_param("issi", $eid,$ename,$city,$salary);
$eid=0;
$ename="hii";
$city="surat";
$salary=10000;
echo $stmt->execute();


$stmt->close();
$con->close();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "hii";
        ?>
    </body>
</html>
