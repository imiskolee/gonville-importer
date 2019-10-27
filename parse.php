<?php

$file_list = array(
    "./jsons/Gonville-Brace-Part0.json",
    "./jsons/Gonville-Brace-Part1.json",
    "./jsons/Gonville-Brace-Part2.json",
    "./jsons/Gonville-Part1.json",
    "./jsons/emmentaler-26.json",
    "./jsons/feta-alphabet26.json",
    "./jsons/gonville-brace.json"
    );

$results = array();

foreach($file_list as $v) {
   $j  = json_decode(file_get_contents($v),true);
   $g =  $j["defs"]["font"]["glyph"];
   foreach($g as $k=>$n) {
        $t = array(
           "code" => $n["_unicode"],
           "adv_x" => $n["_horiz-adv-x"],
           "path" => $n["_d"]
        );
        $results[$n["_glyph-name"]] = $t;
   }
}

$j = json_encode($results);

echo $j;





