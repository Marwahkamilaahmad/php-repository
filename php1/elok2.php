
<?php
$namaPanggilan = "marwah"; 

$tanggal = date('d');
$jumlahHurufNama = strlen($namaPanggilan);

if ($jumlahHurufNama == ($tanggal - 2)) {
    echo "Berhasil";
} elseif ($jumlahHurufNama < $tanggal) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi <br><br>";
}

?>
<?php
$group = array(
    array("Nama" => "Marwah Kamila Ahmad", "NIM" => "493905"),
    array("Nama" => "Ghita Najmi Naqasy", "NIM" => "493906"),
    array("Nama" => "Lutfi Lisana Shidqi", "NIM" => "493907"),
    array("Nama" => "Fadhilah Ain Salsabila", "NIM" => "493908"),
    array("Nama" => "Ajeng Cerelia Evin", "NIM" => "493909"),
);

foreach($group as $member){
    $nama_anggota = $member["Nama"];
    $nim_anggota = $member["NIM"];

    if ($nim_anggota % 2 == 0) {
        $peran = "Back-end Developer";
    } else if($nama_anggota == "Marwah Kamila Ahmad" ){
        $peran = "Project Manager";
    }else {
        $peran = "Front-end Developer";
    }
    echo "Nama: " . $nama_anggota . "<br>";
    echo "NIM: " . $nim_anggota . "<br>";
    echo "Peran: " . $peran . "<br>";
    $str = $nama_anggota;
    $str2 = explode(" ",$str);

$namaDepan = array(array("nama_depan" => $str2[0]));
$list_kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

foreach($namaDepan as $namaArray){
$nama1 = $namaArray["nama_depan"];
$hurufSplit = str_split($nama1);
$kotaDefault = "Jawa Timur";

echo "Nama : " . $nama1 . "<br>";


foreach ($hurufSplit as $huruf) {
    $huruf = strtoupper($huruf);
    $kotaDitemukan = false;

    foreach ($list_kota as $k) {
        $hurufPertamaKota = strtoupper(substr($k, 0, 1));

        if ($huruf == $hurufPertamaKota) {
            $kotaDefault = $k;
            $kotaDitemukan = true;
            break;
        }
    }

    if ($kotaDitemukan) {
        break;
    }
}
echo "ditugaskan di kota : " . $kotaDefault . "<br><br>";
}
}

?>