<?php
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '163154302334-jkt0hga5n4rmucb89l1uj9dpuriekq5g.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'mSSXkO4lhQcOYW2PLT47dP2o'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost:81/facility/sign_with_fb_google/';  //return url (url to script)
$homeUrl = 'http://localhost:81/facility/sign_with_fb_google/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('hello');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>