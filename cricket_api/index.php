<html>
    <body>

        <style>
            body{
                background: #dfdfdf;
            }
            font{
                background: #e94e38;
                padding: 8px;
                margin-right: 10px;
                color: #fff;
            }
            h4{
                background: #eee;
                padding: 10px;
                color: #000;
            }
            h4:hover{
                background: #fff;
                cursor: pointer;
            }
        </style>
        <bR>
        <h1 align="center">Live Match Score</h1>
        <br>
        <?php
        $cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=7dn28he8h2e72'); // change with your API key
        $cricketMatches = json_decode($cricketMatchesTxt);
        $c = 0;
        foreach ($cricketMatches->data as $item) {
            $c++;
            ?>
            <h4><?php echo "<font>" . $c . "</font>" . $item->title; ?></h4>
        <?php } ?>

    </body>
</html>