<?php
session_start();
include_once 'config.php';
$error = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row) {
        $_SESSION['admin'] = $row['admin'];
        $_SESSION['favorito'] = $row['favorito'];
        header("Location: index.php");
    } 
    else {
        $error = TRUE;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
            <a href="signup.php">
                <button class="registeranchor">
                    Sign Up
                </button>
            </a>
        </div>
    </header>
    <section class="grow center">
        <br>
        <div class="bed login">
            <div class="pagetitle">
                Iniciar Sesión
            </div><br><br>
            <form action="login.php" method="post">
                <input type="text" name="username" id="username" placeholder="Usuario" required>   
                <br><br>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <br><br>
                <hr>
                <br>
                <input type="submit" name="login" value="Ingresar">
            </form>
            <?php
            if($error == TRUE) {
                echo "<p class='error'>Usuario o contraseña incorrecta</p>";
            }  
            ?>
        </div>
    </section>
</body>
</html>