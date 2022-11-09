<?php
require_once 'data.php';

function table($jadwal)
{
?><div class='flex justify-center h-96'>
    <div class='overflow-y-auto'>
      <table class='table w-30'>
        <thead class=' sticky top-0'>
          <tr>
            <th>Hari</th>
            <th>No</th>
            <th>Slot Waktu</th>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Ruang</th>
            <th>Jumlah Jam</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
          </tr>
        </thead>
        <tbody><?php
                foreach ($jadwal as $value) {
                  echo "<tr>
                          <td>" . $value['val0'] . "</td>
                          <td>" . $value['val1'] . "</td>
                          <td>" . $value['val2'] . "</td>
                          <td>" . $value['val3'] . "</td>
                          <td>" . $value['val4'] . "</td>
                          <td>" . $value['val5'] . "</td>
                          <td>" . $value['val6'] . "</td>
                          <td>" . $value['val7'] . "</td>
                          <td>" . $value['val8'] . "</td>
                          <td>" . $value['val9'] . "</td>";
                }
                ?></tr>
        </tbody>
      </table>
    </div>
  </div><?php
      }

function _header($title)
{
?>
  <!DOCTYPE html>
  <html lang='en'>

  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $title ?></title>
    <link rel='stylesheet' href='../dist//output.css'>
  </head>

  <body>
    <div class='container'><?php
}

function _footer()
{
?></div>
  </body>

  </html><?php
}

function navbarGuest()
{
?><div class="navbar flex justify-between">
        <h1 class=" text-5xl flex justify-center p-5">Tabel Jadwal</h1>
        <a href="Login.php" class="btn bg-blue-600 ">Login</a>
    </div><?php
 }

function navbarAdmin()
{
?><div class="navbar flex justify-between">
        <h1 class=" text-5xl flex justify-center p-5">Tabel Jadwal</h1>
        <div class="dropdown dropdown-hover">
          <div class="flex btn btn-ghost gap-5">
              <div class=" avatar">
                  <div class="w-10 rounded-full">
                      <img src="Profile.png" />
                  </div>
              </div>
              <p>Admin</p>
          </div>
          <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-32">
            <li><a href="Login.php">Logout</a></li>
          </ul>
        </div>
</div><?php
}

function fileInput(){
  ?><form action="" method="POST" class="flex flex-col justify-center items-center gap-5">
    <input type="file"  accept=".xlsx,.xlsm,.xlsb,.xltm" class="file-input w-full max-w-xs" />
    <input type="text" name="uName" id="email" hidden value="admin">
    <input type="text" name="password" id="password" hidden value="admin">
    <button class="btn" type="submit">Submit</button>
  </form><?php
}

function adminInput()
{
  ?><input type="text" name="uName" id="email" hidden value="admin">
  <input type="text" name="password" id="password" hidden value="admin"><?php
}

?>