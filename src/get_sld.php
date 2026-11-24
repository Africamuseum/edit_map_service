<?php
	$sld=$_REQUEST["sld"];

	$folder="/tmp/";
	$full_path=$folder.$sld;
	header("Content-type: text/xml");
	readfile($full_path);

?>