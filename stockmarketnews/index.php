<?php
error_reporting(0);
require_once('class.stockMarketAPI.php');
?>

<h1>Current Stock Information for AAPL</h1>

<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';
?>
<pre><?php print_r($StockMarketAPI->getData());?></pre>

<?php
$start = '2013-1-1';
$end = '2013-12-31';
?>
<h1>Historical Stock Information for AAPL (<?php echo $start ?> - <?php echo $end ?>)</h1>
<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = 'AAPL';
$StockMarketAPI->history = array(
  'start' 	 => $start,
  'end' 	 => $end,
  'interval' => 'd' // Daily
);
?>
<pre><?php print_r($StockMarketAPI->getData());?></pre>

<hr>

<h1>Stock Information for AAPL, MSFT, GOOGL</h1>
<?php
$StockMarketAPI = new StockMarketAPI;
$StockMarketAPI->symbol = array('AAPL', 'MSFT', 'GOOGL');
?>
<pre><?php print_r($StockMarketAPI->getData());?></pre>
