<?php
// kalori start
    function kalori_senin($kalori,$senin) {
        $hasil = $kalori * $senin;
        return $hasil;
    }
    
    function kalori_selasa($kalori,$selasa){
        $hasil = $kalori * $selasa;
        return $hasil;
    }

    function kalori_rabu($kalori,$rabu){
        $hasil = $kalori * $rabu;
        return $hasil; 
    }

    function kalori_kamis($kalori,$kamis){
        $hasil = $kalori * $kamis;
        return $hasil;
    }

    function kalori_jumat($kalori,$jumat){
        $hasil = $kalori * $jumat;
        return $hasil;
    }

    function kalori_sabtu($kalori,$sabtu){
        $hasil = $kalori * $sabtu;
        return $hasil;
    }

    function kalori_minggu($kalori,$minggu){
        $hasil = $kalori * $minggu;
        return $hasil;
    }

    $ksenin = kalori_senin(2500,3);
    $kselasa = kalori_selasa(2500,2);
    $krabu = kalori_rabu(2500,2);
    $kkamis = kalori_kamis(2500,3);
    $kjumat = kalori_jumat(2500,3);
    $ksabtu = kalori_sabtu(2500,2);
    $kminggu = kalori_minggu(2500,1);
    $jam = 42;
    $kaloriseminggu = 40000;

    echo "kalori Fu di senin hari  = $ksenin </br>"; 
    echo "kalori Fu di selasa hari = $kselasa </br>";
    echo "kalori Fu di rabu hari = $krabu </br>";
    echo "kalori Fu di kamis hari  = $kkamis </br>";
    echo "kalori Fu di jumat hari = $kjumat </br>";
    echo "kalori Fu di sabtu hari = $ksabtu </br>";
    echo "kalori Fu di minggu hari = $kminggu </br>";
    echo "total : ", $ksenin + $kselasa + $krabu + $kkamis + $kjumat + $ksabtu + $kminggu;
// kalori end
    echo "</br>";
    echo "</br>";
// istirahat start
    function tidur_senin($senin){
        $hasil = $senin;
        return $hasil;
    }
    function tidur_selasa($selasa){
        $hasil = $selasa;
        return $hasil;
    }
    function tidur_rabu($rabu){
        $hasil = $rabu;
        return $hasil;
    }
    function tidur_kamis($kamis){
        $hasil = $kamis;
        return $hasil;
    }
    function tidur_jumat($jumat){
        $hasil = $jumat;
        return $hasil;
    }
    function tidur_sabtu($sabtu){
        $hasil = $sabtu;
        return $hasil;
    }
    function tidur_minggu($minggu){
        $hasil = $minggu;
        return $hasil;
    }

    $tsenin = tidur_senin(5);
    $tselasa = tidur_selasa(6);
    $trabu = tidur_rabu(8);
    $tkamis = tidur_kamis(8);
    $tjumat = tidur_jumat(5);
    $tsabtu = tidur_sabtu(6);
    $tminggu = tidur_minggu(4);
    $tsemua = $tsenin + $tselasa + $trabu + $tkamis + $tjumat + $tsabtu + $tminggu;

    echo "tidur fu di senin hari : $tsenin </br>";
    echo "tidur fu di selasa hari : $tselasa </br>";
    echo "tidur fu di rabu hari : $trabu </br>";
    echo "tidur fu di kamis hari : $tkamis </br>";
    echo "tidur fu di jumat hari : $tjumat </br>";
    echo "tidur fu di sabtu hari : $tsabtu </br>";
    echo "tidur fu di minggu hari : $tminggu </br>";
    echo "JUMLAH TIDUR PERJAM DALAM SEMINGGU = $tsemua ";
//istirahat end
    echo "</br>";
    echo "</br>";
//perhitungan start
    if($kaloriseminggu >= 17500 && $jam > 56) {
        echo "fu sembuh";
    }
    else {
        echo "fu masih sakit";
    }
?>