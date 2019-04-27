<?php
    function cetakAcak($length = 32) {
        $allkarakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $batas = strlen($allkarakter);
        $acak = '';
        for ($i = 0; $i < $length; $i++) {
            $acak .= $allkarakter[rand(0, $batas - 1)];
        }
        return $acak;
    }
    echo cetakAcak();
    echo "<br>";
    echo cetakAcak();
    echo "<br>";
    echo cetakAcak();
    //maaf saya sudah buat seperti ini, saya sudah bagaimana cetak 3 kalo function nya
?>