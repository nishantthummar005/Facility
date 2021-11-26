<!DOCTYPE html>
<html>
    <head>
        <title>MovieHunter || Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        $this->load->view('head');
        ?>  
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-9981402337856425",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body>
        <!-- START PAGE SOURCE -->
        <div id="shell" class="container">
            <div id="header">
                <h1 id="logo"><a href="#">MovieHunter</a></h1>
                <div class="social"> <span>FOLLOW US ON:</span>
                    <ul>
                        <li><a class="twitter" href="#">twitter</a></li>
                        <li><a class="facebook" href="#">facebook</a></li>
                        <li><a class="vimeo" href="#">vimeo</a></li>
                        <li><a class="rss" href="#">rss</a></li>
                    </ul>
                </div>
                <div id="navigation">
                    <ul>
                        <li><a class="active" href="#">HOME</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">IN THEATERS</a></li>
                        <li><a href="#">COMING SOON</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">ADVERTISE</a></li>
                    </ul>
                </div>
                <div id="sub-navigation">
                    <ul>
                        <li><a href="#">SHOW ALL</a></li>
                        <li><a href="#">LATEST TRAILERS</a></li>
                        <li><a href="#">TOP RATED</a></li>
                        <li><a href="#">MOST COMMENTED</a></li>
                    </ul>
                    <div id="search">
                        <form action="#" method="get" accept-charset="utf-8">
                            <label for="search-field">SEARCH</label>
                            <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
                            <input type="submit" value="GO!" class="search-button" />
                        </form>
                    </div>
                </div>
            </div>

            <?php
            $this->load->view('slider');
            ?>

            <div id="main">
                <div id="content">
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
                    <br/>
                    <div class="row">
                        <div class="head">
                            <h2 class="text-uppercase" style="color: #999;padding-left: 15px;">LATEST uploaded movies</h2>
                        </div>
                        <br/>
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
                            <div class="col-md-6">
                                <div class="my_movie">
                                    <?php
                                    for ($j = 0; $j < $rows->length; $j++) {
                                        $path = $rows->item($j)->getAttribute('src');
                                        ?>
                                        <center>
                                            <img src="<?php echo $path; ?>"  />
                                        </center>
                                        <?php
                                    }
                                    ?>
                                    <h3><?php echo $head = $nodes_h2->item(0)->nodeValue; ?></h3>
                                    <div class="movie_footer center-block">
                                        <!--<a class="btn btn-primary btn-md" href="<?php // echo $link;  ?>" target="_new">Read More</a>-->
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
                                        <a class="btn btn-success btn-md text-capitalize" href="<?php echo $torrent; ?>" target="_new">Torrent Download</a>
                                    </div>
                                </div> 

                            </div> 
                            <?php
                        }
                        ?>
                        <div class="cl">&nbsp;</div>
                    </div> 
                </div>

                <div class="my_pagination">
                    <div style="margin: 5% auto;background: #080808"> 


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


 
                <div class="cl">&nbsp;</div>
            </div>
            <?php
            $this->load->view('footer');
            ?>
        </div>
        <!-- END PAGE SOURCE -->
    </body>
</html>