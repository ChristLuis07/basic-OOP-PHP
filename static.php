<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo." . self::$angka++ . "Kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";

$obj2 = new Contoh;
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
