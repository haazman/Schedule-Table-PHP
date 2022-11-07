<?php
require_once 'Template.php';
_header("Tabel Jadwal");
?>

<h1 class=" text-5xl flex justify-center p-5">Tabel Jadwal</h1> <a href="" class="btn bg-blue-600 absolute top-2 right-5">Login</a>
<form action="" method="GET" class="flex justify-center p-5 gap-5">
    <input type="text" name="hari" id="" placeholder="Hari" class="input outline outline-gray-200">
    <input type="text" name="dosen" id="" placeholder="Dosen" class="input outline outline-gray-200">
    <input type="text" name="kelas" id=""placeholder="Kelas" class="input outline outline-gray-200">
    <button class="btn">Search</button>
</form>
<?php
$newJadwal = $jadwal;
if (isset($_GET["hari"]) and $_GET["hari"] != "" ){
    $newJadwal = array_filter($newJadwal, function($val){
        return str_contains(strtolower($val["val0"]), strtolower($_GET["hari"]));
    });
}

if (isset($_GET["kelas"]) and $_GET["kelas"] != "" ){
    $newJadwal = array_filter($newJadwal, function($val){
        return str_contains(strtolower($val["val3"]), strtolower($_GET["kelas"]));
    });
}

if (isset($_GET["dosen"]) and $_GET["dosen"] != "" ){
    $newJadwal = array_filter($newJadwal, function($val){
        return str_contains(strtolower($val["val5"]), strtolower($_GET["dosen"]));
    });
}



table($newJadwal);
?>
<form action="" class=" flex justify-center mx-40 mt-5 p-20 outline backdrop-blur-sm">
    <input type="file" class="file-input w-full max-w-xs" />
</form>

<?php
_footer();
?>