<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="media/cup.png">
</head>
<body>
    <header>
        <a>
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
    <section class="grow">
        <div class="main">
            <div class="bed">
                <div class="pagetitle">
                    Inicio
                </div><br><br>
                <!-- <div class="menu"> -->
                <div>
                    <a class="menu" href="teams.php">
                        <button class="brownanchor">
                            Equipos
                        </button>
                    </a>
                    <a class="menu" href="results.php">
                        <button class="blueanchor">
                            Resultados
                        </button>
                    </a>
                    <a class="menu" href="scores.php">
                        <button class="orangeanchor">
                            Posiciones
                        </button>
                    </a>
                    <a class="menu" href="bracket.php">
                        <button class="blueanchor">
                            Clasificación
                        </button>
                    </a>
                    <a class="menu" href="favorites.php">
                        <button class="orangeanchor">
                            Favoritos
                        </button>
                    </a>
                    <a class="menu" href="admin.php">
                        <button class="brownanchor">
                            Gestionar
                        </button>
                    </a>                   
                </div>
            </div>
            <div class="sidepane" id="pane">
                <img class="logo" src="media\cup.png">
                <img class="logo" src="media\cup.png">
                <img class="logo" src="media\cup.png">
                <img class="logo" src="media\cup.png">
            </div>
        </div>
    </section>
</body>
</html>