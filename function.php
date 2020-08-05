<?php
    $x = 1;
    $y = 3;

    voidGanjilPenambahan($x, $y);
    echo"\n";
    $hasil = returnGanjilPenambahan($x, $y);
    echo $hasil."\n";
    if($hasil == true){
        echo"ganjil";
    }else{
        echo"genap";
    }
    echo"\n";
    echo returnActualGanjilPenambahan($x,$y);
    // ganjilPerkalian($x, $y);
    // genapPenambahan($x, $y);
    // genapPerkalian($x, $y);

    // jika hasil penambahan ganjil dia menampilkan kalimat ganjil
    // jika hasil penambahan genap dia menampilkan kalimat genap
    function voidGanjilPenambahan($x, $y){  //void function
    //code 
        $hasil = $x + $y;
        if($hasil % 2 == 0){
            echo"genap";
        }else{
            echo"ganjil";
        }
    }

    // jika hasil penambahan ganjil dia mengembalikan nilai true
    // jika hasil penambahan genap dia mengembalikan nilai false
    function returnGanjilPenambahan($x, $y){  //return function
        //code 
        $hasil = $x + $y;
        if($hasil % 2 == 0){
            return false;
        }else{
            return true;
        }
    }

    // jika hasil penambahan ganjil dia mengembalikan nilai true
    // jika hasil penambahan genap dia mengembalikan nilai false
    function returnActualGanjilPenambahan($x, $y){  //return function
        //code 
        $hasil = $x + $y;
        if($hasil % 2 == 0){
            return "genap";
        }else{
            return "ganjil";
        }
    }

    function ganjilPerkalian($x, $y){
        //code 
    
    }

    function genapPenambahan($x, $y){
        //code 

    }

    function genapPerkalian($x, $y){
        //code 
    
    }
