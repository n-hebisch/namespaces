<?php

require_once __DIR__."/vendor/autoload.php";

use Niklas\Foo\Foo as Foo;
use Niklas\Bar\Bar as Bar;

$foo = new Foo();
$bar = new Bar();

var_dump($foo);
var_dump($bar);


