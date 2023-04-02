<?php

require "../vendor/autoload.php";
require "../src/hello.php";
use \Source\Hello;
$hello = new Hello('');
$hello->setTalk('Hello World !');
$hello->suiteTalk("I'm Nicolas");

echo $hello->getTalk();