<?php
    $con=new mysqli("localhost","root","","pdo_test");
    if($con->connect_error)
    {
        echo "Error Occurred ..!";
    }
    $su=0;
    if(isset($_REQUEST['del']))
    {
       $query2="delete from temp where tid='$_REQUEST[del]'";
       $con->query($query2);        
       $su=2;
    }
    if(isset($_REQUEST['send']))
    {
        $query="insert into temp values(0,'$_REQUEST[name]','$_REQUEST[city]')";
        $con->query($query);
        $su=1;
    }
?>
<html>
    <body>
    <center>
        <form method="post" action="">
            <fieldset style="width: 24.5%;"> 
                <legend> <b> ... A D D R E C O R D S ...</b> </legend>
                <BR>
                <b>NAME :</b> <input type="text" name="name" required="" />
            <br><br>
            <b>CITY :</b> <input type="text" name="city" required="" />
            <br><br>
            <input type="submit" name="send" value="SEND" />
            <br>
            <?php
                if($su==1)
                {
                    echo "<mark>One Record Added Succefully !</mark>";    
                }
                if($su==2)
                {
                    echo "<mark>One Record Deleted Succefully !</mark>";    
                }
            ?>
            <BR>
            </fieldset>
            
            <br><Br><br>
            
            <fieldset style="width: 20%;"> 
                <legend> <b> ... R E S U L T S ...</b>  </legend>
                <table border="1" cellpadding="5" cellspacing="5" width="100%">
                    <tr>
                        <th>NO.</th>
                        <th>NAME</th>
                        <th>CITY</th>
                        <th>REMOVE</th>
                        <th>UPDATE</th>
                    </tr>
                    <?php
                        $c=0;
                        $select=$con->query("select * from temp");
                        while($ans=$select->fetch_object())
                        {
                            $c++;
                    ?>  
                    <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $ans->name; ?></td>
                        <td><?php echo $ans->city; ?></td>
                        <td align="center"><a href="nishnat.php?del=<?php echo $ans->tid; ?>"><?php echo "<mark><b>X</b></mark>"; ?></a></td>
                        <td align="center"><a href="#"><?php echo "<mark><b>/</b></mark>"; ?></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </fieldset>
            <br><BR>
            <fieldset style="width: 20%;"> 
                <legend> <b> ... T Y P E S ...</b>  </legend>
            <mark>NOTE : we can fetch the data using 4 types</mark> 
            <br><Br>
            <ol>
                <li>fetch_object</li>
                <li>fetch_array</li>
                <li>fetch_row</li>
                <li>fetch_assoc</li>
            </ol>
            </fieldset>
        </form>
    </center>
    </body>
</html>