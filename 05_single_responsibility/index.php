<?php

    require 'Motor.php'; //ambil dari motor.php
    require 'Validator.php'; //ambil dari validator.php


    $rules = array('no_mesin' => 'required|no_mesin:12340'); //syarat data agar valid

    $data = array('no_mesin' => 12340); //isi data

    $validator = new Validator(); //new object validator



    if ($validator->validate($data, $rules) === true) {

        //ketika validasi berhasil

        $john = new Motor(); //new object motor;


        //set property dari object
        echo $john->setMerk('Honda').'<br>';
        echo $john->setCC(160).'<br>';
        echo $john->setWarna('Hitam').'<br>';
        echo $john->setNoMesin($data['no_mesin']).'<br>';
        echo $john->showConstan().'<br>';
        echo $john->result(2).'<br><br>';


        var_dump($john); //dumping object john
    } else {
        //ketika validasi gagal

        var_dump($validator->getErrors());
    }

