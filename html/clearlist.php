<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
        $str = file_get_contents("list.json");
        $list = json_decode($str);


        $list->Artists = array();
        $list->Titles = array();
        $list->Lables = array();
        $list->Durations = array();
        $list->Timestamps = array();

        file_put_contents( "list.json" ,json_encode($list));
       
}

exit;

