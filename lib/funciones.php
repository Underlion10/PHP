<?php

namespace App;
use App\Lib1 as L1;

require("funciones2.php");
require("funciones3.php");

echo L1\MyClass::WhoAmI() . '\n';
echo L1\GRAVITY_SPEED . '\n';
echo L1\MyFunction() . '\n';

$myclass = new L1\MyClass();
$myclass->recorrePorFilas([[2,4,8,3,7],[3,6,1,8,2]]);
