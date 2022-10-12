<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h2>Praktikum</h2>
    <form action="session.php" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password">
            </li>
            <li>
                <input type="submit" name="submit">
            </li>
        </ul>
    </form>
    <!-- Error Message -->
    <?php if(isset($_COOKIE['valid'])): ?>
        <p style="color:red;">username/password salah</p>
    <?php endif; ?>
    <!-- Sesi Habis Message -->
    <?php if(isset($_COOKIE['sesi'])): ?>
        <p style="color:red;">sesi anda habis</p>
    <?php endif; ?>
</body>
</html>