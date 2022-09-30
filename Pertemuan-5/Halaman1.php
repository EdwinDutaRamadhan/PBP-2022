
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="halaman2.php" method="post">
        <table>
        <tr>
            <td>
            <label for="nim">NIM</label>
            </td>
            <td>
            <input type="number" name="nim" id="nim" require>
            </td>
        </tr>
        <tr>
            <td>
            <label for="nama">Nama</label>
            </td>
            <td>
            <input type="text" name="nama" id="nama" require>
            </td>
        </tr>
        
        <tr>
            <td>
                <label >Jenis Kelamin</label>
                
            </td>
            <td>
                <input type="radio" name="jenis" value="Pria" id="pria">
                <label for="pria" >Pria</label>
                <input type="radio" name="jenis" vlaue="Wanita" id="wanita">
                <label for="wanita">Wanita</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value = "ok">
            </td>
        </tr>
        </table>
    </form>
</body>
</html>