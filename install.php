<?php
$_API_KEY = '18d598d96cac889775c08fdc245e866d';
$_NGROK_URL = 'https://81c3-200-8-96-138.ngrok.io';
$shop = $_GET['shop'];
$scopes = 'read_products,write_products,read_orders,write_orders,read_script_tags,write_script_tags';
$redirect_uri = $_NGROK_URL . '/elana/token.php';
$nonce = bin2hex( random_bytes( 12 ) );
$access_mode = 'per-user';

$oauth_url = 'https://' . $shop . '/admin/oauth/authorize?client_id=' . $_API_KEY . '&scope=' . $scopes . '&redirect_uri=' . urlencode($redirect_uri) . '&state=' . $nonce . '&grant_options[]=' . $access_mode;

header("Location: " . $oauth_url);
exit();