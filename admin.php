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
    <title>ADMIN</title>
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
       <?php
        if(!isset($_SESSION['username'])) {
            echo(" <div class='usercontrols'>
            <a href='login.php'>
                <button class='loginanchor'>
                    Log In
                </button>
            </a>
            <a href='signup.php'>
                <button class='registeranchor'>
                    Sign Up
                </button>
            </a>
        </div>");
        } elseif(isset($_SESSION['username'])) {
            echo("<div class='usercontrols'>
            <p>Logged in as: " . $_SESSION['username'] . "</p>
            <a href='logout.php'>
                <button class='loginanchor'>
                    Log Out
                </button>
            </a>
            <a href='profile.php'>
                <button class='registeranchor'>
                    Profile
                </button>
            </a>");
        } elseif(isset($_SESSION['admin'])) {
            echo("<div class='usercontrols'>
            <a href='logout.php'>
                <button class='loginanchor'>
                    Log Out
                </button>
            </a>
            <a href='profile.php'>
                <button class='registeranchor'>
                    Profile
                </button>
            </a>
            <a href='admin.php'>
                <button class='registeranchor'>
                    Admin
                </button>
            </a>");
        }
       ?>
    </header>
    <section class="grow center">
        <br>
        <div class="bed admin">
            <div class="pagetitle">
                Actualizar Resultados
            </div><br><br>
            <form action="signup.php" method="post">
                <input type="text" name="hmmmmm" id="hmmmmm" placeholder="aja 0" required>
                <br><br>
                <input type="text" name="hmmmmm1" id="hmmmmm1" placeholder="aja 1" required>
                <br><br>
                <input type="text" name="hmmmmm2" id="hmmmmm2" placeholder="aja 2" required>
                <br><br>
                <hr>
                <br>
                <input type="submit" value="Insertar datos">
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                
                    $mm = $_POST[''];
                    $mm = $_POST[''];
                
                    $sql = "INSERT INTO x (x, x) VALUES (?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ss", $mm, $mm);
                    if($stmt->execute()) {
                        echo "<p>Información insertada correctamente</p>";
                    } 
                    else {
                        echo "<p>Error al insertar información</p>";
                    }
                }

            ?>
        </div>
    </section>
</body>
</html>