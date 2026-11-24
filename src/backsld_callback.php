<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$key=$_REQUEST["sld_key"];
$key= urldecode($key);

$test= $redis->exists($key );
if($test>0)
{
	$sld = $redis->get($key );

	header("Content-type: text/xml");
	print($sld);
}
else
{
	print("Value not found");
}