<?php


    class Toko
    {
        public $nama; // property dari class toko bersifat public
        public $alamat;
        public $dagangan;
        private $penghasilan; // property dari class toko bersifat private
        const BUKA = 7; // property dari class toko yang bersifat tetap / static

        
        // method
        public function open()
        {
        	return 'Toko sudah buka';
        }

        public function close()
        {
        	return 'Toko sudah tutup';
        }


        public function result($penghasilan)
        {
        	$this->penghasilan = $penghasilan;
        	return $this->hasil();
        }

        private function hasil()
        {
        	if ($this->penghasilan < 100000) {
        		return 'Penghasilan belum balik modal, atau belum mencapai 100000';
        	} else {
        		return 'Penghasilan sudah balik modal, atau melebihi 100000';
        	}
        }


        public function setNama($nama)
        {
        	return $this->nama = $nama;
        }

        public function setAlamat($alamat)
        {
        	return $this->alamat = $alamat;
        }

        public function setDagangan($dagangan)
        {
        	return $this->dagangan = $dagangan;
        }

        public function setJam($jam)
        {
        	if ($jam < self::BUKA) {
        		return 'Toko belum buka, toko buka jam '. self::BUKA;
        	} else {
        		return 'Toko sudah buka';
        	}
        }

        //endOfMethod
    }
