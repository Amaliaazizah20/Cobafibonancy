<?php
    //masukan 2 nilai awal 

    $angka_pertama=0;
    $angka_kedua=1;
    $angka_ketiga=1;

    // menampilkan 2 angka pertama 
    echo $angka_pertama ."<br>". $angka_kedua. "<br>".$angka_ketiga;
    for ($i=0; $i<18; $i++){
        //menghtng angka yang ditampilkan 
        $hasil = $angka_pertama + $angka_kedua + $angka_ketiga;
        echo "<br>".$hasil;

        $angka_pertama =$angka_kedua;
        $angka_kedua = $angka_ketiga;
        $angka_ketiga =$hasil;

    }

    ?>
