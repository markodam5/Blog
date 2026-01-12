<?php
require_once($_SERVER['DOCUMENT_ROOT'] ."/blog/config.php");

$ses = new Session();
$ses->start();
$ses->destroy();
