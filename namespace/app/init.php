<?php

// require 'product/infoProduk.php';
// require 'product/Produk.php';
// require 'product/Komik.php';
// require 'product/Game.php';
// require 'product/cetakInfoProduk.php';
// require 'service/User.php';

spl_autoload_register(function ($class) {

    $class = explode('\\', $class);
    $class = end($class);
    require __DIR__ . '/product/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require __DIR__ . '/service/' . $class . '.php';
});
