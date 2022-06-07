<?php 

$state = "";
$code = "";
$token = "";
$user = "";

if (isset($_REQUEST['state']))
    $state = $_REQUEST['state'];

if (isset($_REQUEST['code']))
    $code = $_REQUEST['code'];

    
if (isset($_REQUEST['id_token']))
    $token = $_REQUEST['id_token'];


if (isset($_REQUEST['user']))
    $user = $_REQUEST['user'];

echo "</br>State ".$state;
echo "</br>Code ".$code;
echo "</br>Token ".$token;
echo "</br>User ".$user;
?>