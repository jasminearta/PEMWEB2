<?php
if (isset($_GET['submit'])) {

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $rata_nilai = round(($uts * 0.30) + ($uas * 0.35) + ($praktikum * 0.35), 2);

    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata-rata nilai: $rata_nilai <br>";

    $grade;
    if ($rata_nilai >= 0 && $rata_nilai <= 35) {
        $grade = "E";
        echo "Selamat grade kamu adalah:" . $grade;
    } elseif ($rata_nilai >= 36 && $rata_nilai <= 55) {
        $grade = "D";
        echo "Selamat grade kamu adalah:" . $grade;
    } elseif ($rata_nilai >= 56 && $rata_nilai <= 69) {
        $grade = "C";
        echo "Selamat grade kamu adalah:" . $grade;
    } elseif ($rata_nilai >= 70 && $rata_nilai <= 84) {
        $grade = "B";
        echo "Selamat grade kamu adalah:" . $grade;
    } elseif ($rata_nilai >= 85 && $rata_nilai <= 100) {
        $grade = "A";
        echo "Selamat grade kamu adalah:" . $grade;
    } elseif ($rata_nilai <= 0 && $rata_nilai >= 100) {
        $grade = "I";
        echo "Selamat grade kamu adalah:" . $grade;
    }

    $predikat_nilai;
    switch ($grade) {
        case "E";
            $predikat_nilai = "Sangat kurang";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        case "D";
            $predikat_nilai = "Kurang";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        case "C";
            $predikat_nilai = "Cukup";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        case "B";
            $predikat_nilai = "Memuaskan";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        case "A";
            $predikat_nilai = "Sangat Memuaskan";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        case "I";
            $predikat_nilai = "Tidak ada predikat nilai kamu";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;

        default;
            $predikat_nilai = "Data invalid";
            echo "<br> Predikat nilai kamu termasuk $predikat_nilai <br>";
            break;
    }
} else {
    echo "Tidak ada data!";
}
