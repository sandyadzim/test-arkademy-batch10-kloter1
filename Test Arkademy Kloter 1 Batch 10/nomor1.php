<?php
    function jsonBio(){

        $bio = [
            "name"      => "Sandy Rahmansyah",
            "address"   => "Jalan Jakarta Gang Perjuangan Blok 4 Nomor 1 RT72 Loa Bakung Samarinda",
            "hobbies"   => ["Nonton","Futsal","Begadang"],
            "is_married" => false,
            "school"    => array("highSchool"=>"SMK Negeri 1 Samarinda"),
                            array("university"=>"-"),
            "skills"    => array(
                array("bahasa_pemrograman"=>"html,css,php,python"),
                array("teknik"=>"mikrotik,networking")
            )
            ];
            return $bio;
    }
    echo json_encode(jsonBio());
?>