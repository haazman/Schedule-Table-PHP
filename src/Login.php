<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    
    <div class="flex flex-col items-center text-5xl pt-20">
        <h1>Table</h1>
        <h1>Jadwal</h1>
    </div>
    <form action="Table.php" method="POST" class="flex flex-col items-center pt-10 text-5xl gap-5">
        <input type="text" name="uName" placeholder="Username" class="input w-full max-w-xs outline outline-gray-200" />
        <input type="password" name="password" placeholder="Password" class="input w-full max-w-xs outline outline-gray-200" />
        <div class="flex flex-row items-center pt-10 text-5xl gap-5">
            <button class="btn bg-blue-700">Login</button> <a href="Table.php" class="btn">Continue as guest</a>
        </div>
    </form>
</body>

</html>