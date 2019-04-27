<?php
    $samping = 4;
    $bawah = 6;
    $abjad = array("a","b","c","d","e","f","g","h","i","j","k",
    "l","m","m","o","p","q","r","s","t","u","v","w","x","y","z");

    function huruf($samping, $bawah){
        global $abjad;
        $numb = 0;
        for($i = 0; $i < $bawah;$i++){
            for($j = 0; $j < $samping;$j++){
                $nim = $numb++;
                foreach ($abjad as $key => $value) {
                    if($key == $nim){
                        echo $value." ";
                    }
                }
            }
            echo "<br>";
        }

    }
    echo huruf($samping, $bawah);
?>