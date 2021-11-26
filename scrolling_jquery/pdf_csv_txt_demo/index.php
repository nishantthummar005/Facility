<?php
error_reporting(0);

$conn = mysql_connect("localhost","root","");
mysql_select_db("ci_nishant",$conn);

require('lib/fpdf/fpdf.php');

class PDF extends FPDF {

    // Simple table
    function BasicTable($header, $data) {
        // Header
        foreach ($header as $col)
            $this->Cell(40, 7, $col, 1);
        $this->Ln();
        // Data
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(40, 6, $col, 1);
            $this->Ln();
        }
    }

}

if ($_REQUEST['tp'] == 'download') {
    $pdf = new PDF();
    $query = "SELECT * FROM team";
    $result = mysql_query($query);
    $pdf->SetFont('Arial', '', 14);
    $pdf->AddPage();
    
    $pdf->Cell(40, 7, "No.", 1);
    $pdf->Cell(40, 7, "Founder", 1);
    $pdf->Cell(40, 7, "Age", 1);
    $pdf->Ln();
    while($row = mysql_fetch_row($result)) {
        $pdf->Cell(40, 7, $row[0], 1);
        $pdf->Cell(40, 7, $row[1], 1);
        $pdf->Cell(40, 7, $row[2], 1);
        $pdf->Ln();
    }
    $pdf->Output();
}

if(isset($_REQUEST[csvbtn]))
{
    $filename = "team_csv.csv";
    $fp = fopen('php://output', 'w');

    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='.$filename);


    $query = "SELECT * FROM team";
    $result = mysql_query($query);
    while($row = mysql_fetch_row($result)) {
            fputcsv($fp, $row);
    }
    exit;
}

if(isset($_REQUEST[txtbtn]))
{
    $filename = "team_txt.txt";
    $fp = fopen('php://output', 'w');

    header('Content-type: text/plain');
    header('Content-Disposition: attachment; filename='.$filename);


    $query = "SELECT * FROM team";
    $result = mysql_query($query);
    while($row = mysql_fetch_row($result)) {
        fputcsv($fp, $row);
    }
    exit;
}





?>

<STYLE>
    table tr td{
        padding: 10px;
        color: green;
        font-size: 15px;
        font-weight: bold;
        border: 1px dotted black; 
    }
    table tr th{
        padding: 10px;
        color: #000;
        font-size: 15px;
        font-weight: bold;
        border: 1px dotted black;
    }
    button{
        padding: 10px;
        background: white;
        border:1px dotted black;
        color: green;
        cursor: pointer;
        font-size: 15px;
        font-weight: bold;
    }
    a{
        text-decoration: none;
        color: green;
        font-size: 15px;
        font-weight: bold;
    }
    h2{
        font-size: 20px;
        font-weight: normal;
        text-shadow: 0 0 1px black;
        letter-spacing: 5px;
        text-transform: uppercase
    }
</style>

<Br>

<center>
    <h2>Table Data</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php
            $q=  mysql_query("select * from team");
            while($qq=  mysql_fetch_array($q))
            {
        ?>
        <tr>
            <td>
                <?php echo $qq[0]; ?>
            </td>
            <td>
                <?php echo $qq[1]; ?>
            </td>
            <td>
                <?php echo $qq[2]; ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

    <bR><Br>

    <form method="post" enctype="multipart/form-data">
        <button><a href="index.php?tp=download" target="_blank" >Download PDF File</a></button>
        <button type="submit" name="csvbtn">Download CSV File</button>
        <button type="submit" name="txtbtn">Download TXT File</button>
    </form>   

    <hr width="50%" color="#dfdfdf">
    
    <form method="post" enctype="multipart/form-data">
        <INPUT type="file" name="csvfile" required="" />
        <button type="submit" name="getdata">Upload CSV File</button>
        <bR><br>
    </form>
    
    <?php
        if(isset($_POST["getdata"]))
        {
            $file = $_FILES['csvfile']['tmp_name'];
            $handle = fopen($file, "r");
            $c = 0;
            echo "<h2>Uploaded Record</h2>";
            echo "<table>";
            while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
            {
                $no = $filesop[0];
                $name = $filesop[1];
                $age = $filesop[2];
                echo "<tr><td>".$no."</td><td>".$name."</td><td>".$age."</td></tr>";
            //$sql = mysql_query("INSERT INTO csv (name, email) VALUES ('$name','$email')");
            }
        }
    ?>
    
    
    
</center>
