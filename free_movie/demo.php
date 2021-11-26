<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Google Crawler</title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background: #dfdfdf">
        <div class="container">
            <h1 style="letter-spacing: 3px;font-size: 40px;color: #dfdfdf;text-shadow:0 0 10px #000">Free Movie Download</h1>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', TRUE);

            if (isset($_GET['page'])) {
                $url = "https://worldfree4u.download/page/" . $_GET['page'];
            } else {
                $url = "https://worldfree4u.download/";
            }
            $html = file_get_contents($url);

            //parsing begins here:
            $doc = new DOMDocument();
            @$doc->loadHTML($html);

            $article = $doc->getElementsByTagName('article');
            ?>
            <div class="row"> 

                <?php
                $link = "";
                for ($i = 0; $i < $article->length; $i++) {

                    $nodes_h2 = $article->item($i)->getElementsByTagName('h2');
                    $nodes_a = $article->item($i)->getElementsByTagName('a');
                    $rows = $article->item($i)->getElementsByTagName('img');

                    for ($l = 0; $l < $nodes_a->length; $l++) {
                        if ($nodes_a->item($l)->nodeValue == "[Read more…]") {
                            $link = $nodes_a->item($l)->getAttribute('href');
                        }
                    }
                    ?>
                    <div class="col-md-4 text-center bg-danger" style="padding: 20px;border: 10px solid #fff;">

                        <?php
                        echo "<h4 style='font-size:15px'>" . $head = $nodes_h2->item(0)->nodeValue . "</h4>";

                        for ($j = 0; $j < $rows->length; $j++) {

                            $path = $rows->item($j)->getAttribute('src');
                            ?>
                            <img src="<?php echo $path; ?>" width="200px" height="270px"  />
                            <?php
                        }
                        ?>

                        <Br/><br/>

                        <a class="btn btn-primary btn-sm" href="<?php echo $link; ?>" target="_new">Read More</a>

                        <?php
                        $html1 = file_get_contents($link);

                        //parsing begins here:
                        $doc1 = new DOMDocument();
                        @$doc1->loadHTML($html1);

                        $article1 = $doc1->getElementsByTagName('article');
                        $a = $article1->item(0)->getElementsByTagName('a');
                        for ($l = 0; $l < $a->length; $l++) {
                            if ($a->item($l)->nodeValue == "Torrent Download") {
                                $torrent = $a->item($l)->getAttribute('href');
                            }
                        }
                        ?>
                        <a class="btn btn-success btn-sm" href="<?php echo $torrent; ?>" target="_new">Torrent</a>
                    </div>
                    <?php
                }
                ?>


            </div>

            <div style="margin: 10% auto;"> 


                <?php
                $page_limit = 3;
                $max_page = 463;
                $max_limit = $max_page - $page_limit;
                for ($i = 1; $i <= $max_page; $i++) {
                    if (!isset($_GET['page'])) {
                        if ($i <= 4) {
                            ?>
                            <a href="index.php?page=<?php echo $i; ?>" style="padding: 5px;background: #eee;border:1px solid #000"><?php echo $i; ?></a>
                            <?php
                        }
                    } else {
                        if ($_GET['page'] != "1") {
                            ?>
                            <a href="index.php?page=<?php echo ($_GET['page'] - 1); ?>" style="padding: 5px;background: #eee;border:1px solid #000">Prev</a>
                            <?php
                        }
                        if ($_GET['page'] >= $max_limit && $_GET['page'] <= $max_page) {
                            echo "no";
                        } else {
                            $cnt = $_GET['page'] + $page_limit;
                            for ($j = $_GET['page']; $j <= ($_GET['page'] + $page_limit); $j++) {
                                ?>
                                <a href="index.php?page=<?php echo $j; ?>" style="padding: 5px;background: #eee;border:1px solid #000"><?php echo $j; ?></a>
                                <?php
                            }
                            if ($_GET['page'] != $max_page) {
                                ?>
                                <a href="index.php?page=<?php echo ($_GET['page'] + $page_limit + 1); ?>" style="padding: 5px;background: #eee;border:1px solid #000">Next</a>
                                <?php
                            }
                        }

                        break;
                    }
                }
                ?>

            </div>

        </div>
    </body>
</html>
