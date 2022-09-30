<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5</title>
</head>
<body>
    <h3>Latihan 1</h3>
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>n</th>
            <th>3n</th>
        </tr>
        <?php for($i = 1; $i<=10; $i++) :?>
        <tr>
                <td><?= $i; ?></td>
                <td><?= $i*3; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>