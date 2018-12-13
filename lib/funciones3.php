<?php

namespace App\Lib2;

const GRAVITY_SPEED = 9.8;

function MyFunction(){
    return __FUNCTION__;
}

class MyClass {
    static function WhoAmI(){
        return __METHOD__;
    }

    function recorrePorFilas($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            $acumFila = 0;
            for ($j = 0; $j < count($arr[$i]); $j++)
                $acumFila += $arr[$i][$j];
            echo " suma fila " . ($i + 1) . " = " . $acumFila . "<br/>";
        }
    }

    function recorrePorFilas2($arr)
    {
        foreach ($arr as $i => $a) {
            $acumFila = 0;
            foreach ($a as $j => $e) {
                $acumFila += $e;
                echo "Suma Fila | Columna $i | $j = $acumFila </br>";
            }
        }
    }
}