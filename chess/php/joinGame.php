<?php

	$gameId = $_POST["game_id"];
    $playerName = $_POST["player_name"];

    if (!isset($playerName)) {
        $playerName = "p2";
    }
    $msg = "\n" . $playerName . " Joined the Game";

    $myFile = "/home/cdw77/public_html/checkers/logs/" . $gameId . ".log";
    $fr = fopen($myFile, 'r') or die("game wasn't created yet");
    $fw = fopen($myFile, 'a') or die("can't write file");
    fwrite($fw, $msg);

    fclose($fr);
	fclose($fw);
?>