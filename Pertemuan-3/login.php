<?php 
    if( isset($_POST["submit"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        echo" Username : $username";
        echo" Password : $password";
        echo" Email : $email";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan - 3</title>
    
</head>
<body>
    <div>
        <h1 style="text-align: center;">Login</h1>
    </div>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" required id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" required id="password">
            </li>
            <li>
                <label for="email">Email :  </label>
                <input type="email" name="email" required id="email">
            </li>
            <li>
                <input type="submit">
                    <a href="main.php?username= ?>"></a>
                </input>
            </li>
        </ul>
    </form>
</body>
</html>