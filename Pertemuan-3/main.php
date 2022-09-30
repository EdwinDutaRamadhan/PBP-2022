<?php
    var_dump($_POST);
    $password = 'PBP'.strtoupper((hash('sha256', $_POST['password']))).'B';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $_POST["username"]; ?></td>
            <td><?= $password; ?></td>
            <td><?= $_POST["jenis-kelamin"]; ?></td>
            <td><?= $_POST["pekerjaan"]; ?></td>
        </tr>
    </table>

</body>
</html>