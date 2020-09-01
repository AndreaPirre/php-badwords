<?php

echo $str = "Lorem ipsum ciao dolor sit amet, consectetur ciao adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis ciao  nostrud exercitation ullamco laboris nisi ciao ut aliquip ex ea commodo ciao consequat. Duis aute irure dolor
in reprehenderit ciao in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat ciao non proident, sunt in culpa qui officia ciao deserunt mollit anim id est laborum.";

$parola = $_GET['badword'];

echo $strRes = "Lorem ipsum $parola dolor sit amet, consectetur $parola adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis $parola  nostrud exercitation ullamco laboris nisi $parola ut aliquip ex ea commodo $parola consequat. Duis aute irure dolor
in reprehenderit $parola in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat $parola non proident, sunt in culpa qui officia $parola deserunt mollit anim id est laborum.";
?>
