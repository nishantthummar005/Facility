<?php
try
{
    $con=new PDO("mysql:host=localhost;dbname=pdo_test","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    
    $stmt=$con->prepare("insert into `emp` values(:eid,:ename,:city,:salary)");
    $stmt->bindParam(":eid", $eid);
    $stmt->bindParam(":ename", $ename);
    $stmt->bindParam(":city", $city);
    $stmt->bindParam(":salary", $salary);
    
    $eid=0;
    $ename="v'isha\l'";
    $city="pune";
    $salary=1000;
    echo $stmt->execute();
    
    
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
        <table>
            <th>No</th>
            <th>Name</th>
            <th>City</th>
            <th>Salary</th>
        <?php
            $stmt=$con->prepare("select * from emp");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            foreach($stmt->fetchAll() as $val)
            {
                ?>
            <tr>
                <td><?php echo $val->eid; ?></td>
                <td><?php echo $val->ename; ?></td>
                <td><?php echo $val->city; ?></td>
                <td><?php echo $val->salary; ?></td>
            </tr>
                <?php
            }
        ?>
            </table>
    </body>
</html>
