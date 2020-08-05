<?php

class AritMatika {
    public $bilanganSatu = 0;
    public $bilanganDua = 0;

    function __construct($bilanganSatu, $bilanganDua)
    {
        if(is_numeric($bilanganSatu) && is_numeric($bilanganDua)){
            $this->bilanganSatu = $bilanganSatu;
            $this->bilanganDua = $bilanganDua;
        }
        
    }
}

class Penambahan extends AritMatika {
    public function hasil()
    {
        echo $this->bilanganSatu + $this->bilanganDua;
    }

    public function result()
    {
        return $this->bilanganSatu + $this->bilanganDua;
    }
}

class Pengurangan extends AritMatika {
    public function hasil()
    {
        echo $this->bilanganSatu - $this->bilanganDua;
    }

    public function result()
    {
        return $this->bilanganSatu - $this->bilanganDua;
    }
}

class Perkalian extends AritMatika {
    public function hasil()
    {
        echo $this->bilanganSatu * $this->bilanganDua;
    }

    public function result()
    {
        return $this->bilanganSatu * $this->bilanganDua;
    }
}

$bilanganSatu = $_POST['bilanganSatu'];
$bilanganDua = $_POST['bilanganDua'];
$operator = $_POST['operator'];

if($operator == '+') {
    $class = new Penambahan($bilanganSatu, $bilanganDua);
    $class->hasil();
} elseif($operator == '-') {
    $class = new Pengurangan($bilanganSatu, $bilanganDua);
    $class->hasil();
} elseif($operator == 'x') {
    $class = new Perkalian($bilanganSatu, $bilanganDua);
    $class->hasil();
} elseif($operator == 'combine') {
    $class = new Penambahan($bilanganSatu, $bilanganDua);
    $hasil1 = $class->result();
    $hasil = $hasil1 - $bilanganDua;
    echo $hasil;
} else {
    echo "<h1>Operator Tidak Ada !!</h1>";
}

echo'<a href="index.php"> Kembali </a>';