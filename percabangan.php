<?php

//percabangan if
$total_belanja = 150000;
if($total_belanja > 100000){
    echo "Anda dapat hadiah!";
}

//percabangan if/else
$umur = 13;
if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else { 
    echo "Selamat datang di website kami!";
}


//percabangan if/elseif/else
$nilai = 88;
if ($nilai > 90) { 
    $grade = "A";
} elseif($nilai > 80){ 
    $grade = "B";
} elseif($nilai > 60){ 
    $grade ="C";
} elseif($nilai > 40){ 
    $grade = "D";
} elseif($nilai > 30){ 
    $grade = "E";
} else { 
    $grade = "F";
}
echo "Nilai Anda: $nilai<br>"; 
echo "Grade: $grade" ;

//percabangan swich case
$level = 3;
Switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!"
}

//contoh if
$nilai = 80;
if ($nilai >= 60) {
echo "Nilai Anda <b>$nilai</b>, Anda LULUS";
}

//contoh if/else
$nilai = 50;
if ($nilai >= 60) {
    echo "Nilai Anda <b>$nilai</b>, Anda LULUS";
} 
else{
    echo "Nilai Anda <b>$nilai</b>, Anda GAGAL";
}


//contoh if/elseif/else
$teman = "andi" ;
if($teman == "budi")
{
    echo "budi adalah teman saya";
}

{ elseif($teman == "andi")
    echo "andi adalah teman saya";
}

{ else 
    echo "saya tidak punya teman"
} 

//contoh swich case

$day = date ("D");

switch ($day) {
    case 'Sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jum'at"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default : $hari = "Kiamat";
}

echo "Hari ini hari <b>$hari</b>";
echo "<p><b> Hari menyesuaikan dengan hari saat ini "

?>