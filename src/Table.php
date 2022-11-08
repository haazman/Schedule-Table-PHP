<?php
$isAdmin;
if(isset($_POST["uName"])){
    if($_POST["uName"] == "admin" && $_POST["password"] == "admin"){
        $isAdmin = true;
    }
    else{
        echo "<div class = 'flex flex-col items-center justify-center>
        <p class = ' text-5xl flex justify-center'>Username atau Password Salah</p>
        <a class = 'btn bg-red-700 text-2xl w-fit' href = 'Login.php'>Back</a><style>.container {display : none;}</style>
        </div>";
    }
}

require_once 'Template.php';
_header("Tabel Jadwal");

if(isset($isAdmin) and $isAdmin){
    navbarAdmin();
}
else{
    navbarGuest();
}

?>



<form action="" method="GET" class="flex justify-center p-5 gap-5">
    <input type="text" name="hari" id="" placeholder="Hari" class="input outline outline-gray-200" value=<?php echo isset($_GET["hari"]) ? $_GET["hari"] : "" ?>>
    <input type="text" name="dosen" id="" placeholder="Dosen" class="input outline outline-gray-200" value=<?php echo isset($_GET["dosen"]) ? $_GET["dosen"] : "" ?>>
    <input type="text" name="kelas" id="" placeholder="Kelas" class="input outline outline-gray-200" value=<?php echo isset($_GET["kelas"]) ? $_GET["kelas"] : "" ?>>
    <button class="btn">Search</button>
</form>
<?php
$newJadwal = $jadwal;
if (isset($_GET["hari"]) and $_GET["hari"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val0"]), strtolower($_GET["hari"]));
    });
}

if (isset($_GET["kelas"]) and $_GET["kelas"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val3"]), strtolower($_GET["kelas"]));
    });
}

if (isset($_GET["dosen"]) and $_GET["dosen"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val5"]), strtolower($_GET["dosen"]));
    });
}



table($newJadwal);
?>

<?php
_footer();
?>