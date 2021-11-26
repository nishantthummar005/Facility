<?php
session_start();
require_once 'functions.php';

?>
<html>
    <head>
        
    </head>
    <body>
        <?php
        if(!isset($_SESSION['email']))
        {
        require_once './google/config.php';
        
if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}
if ($gClient->getAccessToken()) {
	$userProfile = $google_oauthV2->userinfo->get();
	$gUser = new Users();
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name']." ".$userProfile['family_name'],$userProfile['email']);
	$_SESSION['email'] = $userProfile['email'];
	header("location: account.php");
} else {
	$authUrl = $gClient->createAuthUrl();
}
        ?>
        <a href="<?php echo $authUrl; ?>"><img src="image/google.png"/></a>
        
        <a href="facebook/fbconfig.php"><img src="image/facebook.png"/></a>
        
        <?php
        }
        else
        {
            header('location:account.php');
        }
        ?>
    </body>
</html>