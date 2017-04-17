<?php

    
    require 'Toko.php'; // memanggil Toko.php


    $tokoA = new Toko(); // set object tokoA


    // set property yang mau ditampilkan
    $nama = $tokoA->setNama('Toko Dev');
    $alamat = $tokoA->setAlamat('jl. kenangan');
    $dagangan = $tokoA->setDagangan('Perangkat Komputer');
    $penghasilan = $tokoA->result(1000000);
    $jam = $tokoA->setJam(8);

    
    //EndOftokoA


    //copy object tokoA
    $tokoB = $tokoA; //ketika kita set property dari copy maka kedua value berubah

    //set property tokoB
    $nama = $tokoB->setNama('Toko Bev');
    $alamat = $tokoB->setAlamat('jl. jalanan');


    //EndOftokoB


    //clone object tokoA
    $tokoC = clone $tokoA; //ketika kita set property dari clone maka value dari object a dan b tidak berubah

    //set property tokoC
    $nama = $tokoC->setNama('Toko Chev');
    $alamat = $tokoC->setAlamat('jl. mondar-mandir');

    
    //EndOftokoC


    // result dari tokoA
    echo 'Nama : '.$nama.'<br>';
    echo 'Alamat : '.$alamat.'<br>';
    echo 'Dagangan : '.$dagangan.'<br>';
    echo 'Penghasilan : '.$penghasilan.'<br>';
    echo 'Kepastian : '.$jam.'<br><br>';

    var_dump($tokoA);
    echo '<hr>';


    //result tokoB
    echo 'Nama : '.$nama.'<br>';
    echo 'Alamat : '.$alamat.'<br><br>';


    var_dump($tokoB);
    echo '<hr>';

    
    //result tokoC
    echo 'Nama : '.$nama.'<br>';
    echo 'Alamat : '.$alamat.'<br><br>';

    var_dump($tokoC);
