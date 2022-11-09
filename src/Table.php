<?php
$isAdmin;
if(isset($_POST["uName"])){
    if($_POST["uName"] == "admin" && $_POST["password"] == "admin"){
        $isAdmin = true;
    }
    else{
        ?><div class = 'flex flex-col items-center justify-center  pt-64 gap-10'>
        <p class = ' text-5xl flex justify-center '>Username atau Password Salah</p>
        <a class = 'btn bg-red-700 text-2xl w-fit' href = 'Login.php'>Back</a><style>.container {display : none;}</style>
        </div><?php
    }
}

require_once 'Template.php';
_header("Tabel Jadwal");

if(isset($isAdmin) and $isAdmin){
    navbarAdmin();
    fileInput();
}
else{
    navbarGuest();
}

?>



<form action="" method="POST" class="flex justify-center p-5 gap-5">
    <input type="text" name="hari" id="" placeholder="Hari" class="input outline outline-gray-200" value=<?php echo isset($_POST["hari"]) ? $_POST["hari"] : "" ?>>
    <input type="text" name="dosen" id="" placeholder="Dosen" class="input outline outline-gray-200" value=<?php echo isset($_POST["dosen"]) ? $_POST["dosen"] : "" ?>>
    <input type="text" name="ruangan" id="" placeholder="Ruangan" class="input outline outline-gray-200" value=<?php echo isset($_POST["ruangan"]) ? $_POST["ruangan"] : "" ?>>
    <?php 
    if($isAdmin){
        adminInput();
    }
    ?>
    <button class="btn">Search</button>
</form>
<?php
$newJadwal = $jadwal;
if (isset($_POST["hari"]) and $_POST["hari"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val0"]), strtolower($_POST["hari"]));
    });
}

if (isset($_POST["ruangan"]) and $_POST["ruangan"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val6"]), strtolower($_POST["ruangan"]));
    });
}

if (isset($_POST["dosen"]) and $_POST["dosen"] != "") {
    $newJadwal = array_filter($newJadwal, function ($val) {
        return str_contains(strtolower($val["val5"]), strtolower($_GET["dosen"]));
    });
}



table($newJadwal);
?>

<?php
_footer();
?>