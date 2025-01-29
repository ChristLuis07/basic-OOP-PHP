<?php

// define('NAMA', 'Christian Luis');

// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;

// Constants
class Identitas
{
    const NAMA = 'CHRISTIAN LUIS';
    const UMUR = '18';
    const TANGGAL_LAHIR = '07-04-2006';
}

echo Identitas::NAMA;
echo "<br>";
echo Identitas::UMUR;
echo "<br>";
echo Identitas::TANGGAL_LAHIR;

// Magic Constants
