<?php
include 'reports/db_queries.php';
    error_reporting(E_ALL);
ini_set('display_errors', 1);
    if($_SERVER['SERVER_NAME'] == 'builder.osmand.net') {
        insertIntoUnsubscribed(base64_decode( urldecode( $_GET["id"] ) ), $_GET["group"]);
    }
    else {
        file_get_contents("http://builder.osmand.net/unsubscribe?".$_SERVER['QUERY_STRING']);
    }
?>

<div style="width:75%; margin: auto; padding-top: 2%; background:#ffffff;">
    <img style="display: block; margin-left: auto; margin-right: auto;" src="/images/logo-grey.png"/>
    <p style="font-family: sans-serif; font-size: 18px; text-align: center;">You have sucessfully unsubscribed from OsmAnd's mailing list.</p>
</div>
