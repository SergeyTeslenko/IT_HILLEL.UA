<?php

require "./vendor/autoload.php";



$x = new \App\X();
$r = new \App\R();
dump($x->sum());
dump($r->sum());