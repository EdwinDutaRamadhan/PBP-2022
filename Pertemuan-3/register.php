<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <form action="main.php" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </li>
            <li>
                <label for="jenis-kelamin">Jenis Kelamin : </label>
                <input type="radio" name="jenis-kelamin" value="laki-laki" id="laki-laki" required>
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" name="jenis-kelamin" value ="perempuan" id="perempuan" required>
                <label for="perempuan">Perempuan</label>
            </li>
            <li>
                <label for="pekerjaan">Pekerjaan : </label>
                <select name="pekerjaan" required id="jenisKelamin">
                <option value="null">Pilih satu</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="asisten-dosen">Asisten-Dosen</option>
                    <option value="dosen">Dosen</option>
                    <option value="karyawan">Karyawan</option>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>