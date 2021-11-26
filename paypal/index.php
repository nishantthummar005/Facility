<?php
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INTEGRATE PAYPAL PAYMENT GATEWAY IN PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <div class="panel panel-primary" style="width:50%;margin:0 auto; margin-top:2%">
            <div class="panel-heading"><h3>Paypal Payment Gateway in PHP</h3></div>
            <div class="panel-body" style="height:40%; text-align:center;" >
                <p class="bg-info" id="msg"></p>
                <form class="form-horizontal" role="form" id="paypalForm" method="post" action="<?php echo PAYPAL_URL; ?>">
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="credits" value="510">
                    <input type="hidden" name="userid" value="1">
                    <input type="hidden" name="cpp_header_image" value="">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="handling" value="0">
                    <input type="hidden" name="cancel_return" value="http://localhost:81/facility/paypal/request.php?type=cancel">
                    <input type="hidden" name="return" value="http://localhost:81/facility/paypal/request.php?type=success">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="amount">Amount:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="amount" placeholder="Enter Amount" required="required" value="10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="currency">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" value="1" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="currency">Currency:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="currency" placeholder="Enter Currency Type" value="<?php echo CURRENCY; ?>" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="description">Description:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="item_name" placeholder="Enter Description">My First Payment</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
