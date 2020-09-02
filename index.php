<?php

$badword = $_GET['badword'];
$parolabuona = '***';

$str = "Lorem ipsum ciao dolor sit amet, consectetur ciao adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis ciao  nostrud exercitation ullamco laboris nisi ciao ut aliquip ex ea commodo ciao consequat. Duis aute irure dolor
in reprehenderit ciao in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat ciao non proident, sunt in culpa qui officia ciao deserunt mollit anim id est laborum.";

$length = strlen($str);

$goodStr = str_replace($badword, $parolabuona, $str);

echo $length;
echo "<br>";
echo $goodStr;

?>
