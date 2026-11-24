<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$key=$_REQUEST["img_key"];
$key= urldecode($key);

$test= $redis->exists($key );
if($test>0)
{
	$img = $redis->get($key );

	header('Content-Type: image/png');
    header('Content-Length: ' . strlen($img));
    print($img);
    exit;
}
else
{
	print("Image not found");
}