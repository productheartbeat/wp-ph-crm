<?php
$view = $_GET["view"];
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

if($_POST)
{

$update_ID=$_POST['update_ID'];
$contact_ID=$_POST['contact_ID'];

}

global $wpdb;

$wpdb->delete( 'aud_updates', array( 'update_ID' => $update_ID ) );

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>