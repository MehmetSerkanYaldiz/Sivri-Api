<?php

$veri= file_get_contents("http://sendeyim.net/astroloji/gunluk-burc-yorumlari/koc-burcu-gunluk-yorumu.html");
$pattern='@ <div id="bosluk"></div>(.*?) </div>@si';
preg_match_all($pattern, $veri, $link);

$genel=strip_tags($link[1][0]);
$iliski=strip_tags($link[1][1]);
$kariyer=strip_tags($link[1][2]);
$maddi=strip_tags($link[1][3]);

//print_r($genel);

//print_r($iliski);

//print_r($kariyer);
//print_r($maddi);


echo ('{"genel":"');print trim($genel);echo('",');echo('"ask":"');print trim($iliski);echo('",');echo('"kariyer":"');print trim($kariyer);echo('",');echo('"maddi":"');print trim($maddi);echo('"}');

?>