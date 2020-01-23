<?php

	$gameId = $_GET["game_id"];
	
	$myFile = "/home/cdw77/public_html/checkers/logs/" . $gameId . ".log";

    $fr = fopen($myFile, 'r') or die("can't read file");
	$contents = fread($fr,filesize($myFile));
    $lines = explode("\n", $contents);
    echo(count($lines) . ",," . end($lines));
	fclose($fr);
?>