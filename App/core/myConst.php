<?php
$myUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

define ('MYPATHDOMAIN', $myUrl);					//Домен для абсолютного пути

// define ($name, $value, $case_sen)
// define ($name, $value, $case_sen)