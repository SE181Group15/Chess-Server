<?php

	$gameId = $_POST["game_id"];
    $move = $_POST["move"];

	$myFile = "/home/cdw77/public_html/checkers/logs/" . $gameId . ".log";

    $fa = fopen($myFile, 'a') or die("can't append file");
    echo($move);
    fwrite($fa, "\n" . $move);
	fclose($fa);
?>