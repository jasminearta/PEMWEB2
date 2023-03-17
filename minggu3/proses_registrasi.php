<?php

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];

    function skor_skill($skills)
    {
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 30,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skill_list[$skill];
        }

        return $result;
    }

    function kategori_skill($skor)
    {
        if ($skor <= 0) {
            $predikat = "Tidak memadai";
        } else if ($skor >= 1 and $skor <= 40) {
            $predikat = "Kurang";
        } else if ($skor >= 41 and $skor <= 60) {
            $predikat = "Cukup";
        } else if ($skor >= 61 and $skor <= 100) {
            $predikat = " Baik";
        } elseif ($skor >= 101 and $skor <= 150) {
            $predikat = "Sangat baik";
        } else {
            $predikat = "Error";
        }

        return $predikat;
    }

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Gender: $gender";
    echo "<br> Prodi: $prodi";
    echo "<br> Skill: ";
    foreach ($skills as $skill) {
        echo $skill . ", ";
    }
    echo "<br> Domisili: $domisili";
    echo "<br> Skor Skill: " . skor_skill($skills);
    $skor = skor_skill($skills);
    $predikat = kategori_skill($skor);
    echo '<br>Kategori Skill : ' . $predikat;
}
