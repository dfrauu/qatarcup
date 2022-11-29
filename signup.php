<?php
    session_start();
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="media/cup.png">
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo anchor" src="media\cup.png">
        </a>
        <h2 class="title">
            Qatar World Cup Portal
        </h2>
        <div class="usercontrols">
            <a href="login.php">
                <button class="loginanchor">
                    Log In
                </button>
            </a>
        </div>
    </header>
    <section class="grow center">
        <br>
        <div class="bed signup">
            <div class="pagetitle">
                Registrarse
            </div><br><br>
            <form action="signup.php" method="post">
                <input type="text" name="username" id="username" placeholder="Usuario" required>   
                <br><br>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <br><br>
                <hr>
                <br>
                <input type="submit" value="Crear Cuenta">
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                
                    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $username, $password);
                    if($stmt->execute()) {
                        echo "<p>Usuario registrado correctamente</p>";
                    } 
                    else {
                        echo "<p>Error al registrar usuario</p>";
                    }
                }

            ?>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>