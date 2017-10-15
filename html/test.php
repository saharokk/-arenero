<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$data = file_get_contents("php://input");
	$trackarr = json_decode($data);
	$str = file_get_contents("list.json");
	$list = json_decode($str);


	$list->Artists[] = $trackarr->artist;
	$list->Titles[] = $trackarr->sound_name;
	$list->Lables[] = $trackarr->label;
	$list->Durations[]= $trackarr->duration;
	$list->Timestamps[] = $trackarr->timestamp;

	file_put_contents( "list.json" ,json_encode($list)); 
	echo "track info stored!";
}

exit;
