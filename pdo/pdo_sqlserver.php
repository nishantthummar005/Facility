<?php
try
{
    $con=new PDO("dblib:host=NOVA-PC:1433;dbname=pdo_sqlserver","sa","hello");
   
    /*$stmt=$con->prepare("insert into `emp` values(:eid,:ename,:city,:salary)");
    $stmt->bindParam(":eid", $eid);
    $stmt->bindParam(":ename", $ename);
    $stmt->bindParam(":city", $city);
    $stmt->bindParam(":salary", $salary);
    
    
    $eid=0;
    $ename="vishal";
    $city="pune";
    $salary=1000;
    echo $stmt->execute();
     
     */
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
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
