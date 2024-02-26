<?php
//membuat variabel

$mahasiswa1 = ["Anggraeni", "sistem informasi", 001, 13,6, 3.5, 4.0];


//panggil variabel
echo 'nama:  ' . $mahasiswa1[0] . "<br>"; //concatenation
echo "jurusan: $mahasiswa1[1] <br>"; //string interpolation
echo "ips semester 1: " . $mahasiswa1[3][0];