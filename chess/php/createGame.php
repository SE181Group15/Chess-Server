<?php

	$gameId = $_POST["game_id"];
    $playerName = $_POST["player_name"];

    if (!isset($gameId)) {
        die("no game_id was provided");
    }
    if (!isset($playerName)) {
        $playerName = "p1";
    }
    $msg = $playerName . " Created the Game";

	$myFile = "/home/cdw77/public_html/checkers/logs/" . $gameId . ".log";
    $fw = fopen($myFile, 'w') or die("can't write file");
    fwrite($fw, $msg);

	fclose($fw);
?>