<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EQUIPOS</title>
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
    <section class="grow">
        <div class="main">
            <h1 class="groupHeader">
                Grupo A
            </h1>
            <div class="bed">
                <div class="pagetitle">
                    Qatar
                    <form action="teams.php" method="POST">
                        <button class="favanchor" type="submit">
                            <h3>Seleccionar favorito</h3>
                            <img src='media/favbutton.png'>
                            <img class="selected" src='media/favselected.png'>
                        </button>
                    </form>
                </div><br><br>
                <div class="games">
                    <div class="countrylegend">
                        <h2>Bandera:</h2>
                        <img src='media/flags/qatar.png'>
                        <h2>Información:</h2>
                        <p>
                            Esta es la primera vez en su historia que la selección de Qatar se clasifica a un Mundial (son los anfitriones). Ademas de que esta selección jugó su primer partido en 1970 y en el año 2019 la selección de Qatar se proclamó campeona de la Copa Asiática tras derrotar a Japón 3-1 en la final siendo este el mayor logro de su historia
                        </p>
                    </div>
                    <div class="countryDisplay">
                        <h2>Nómina</h2>
                        <div>
                            <b>Porteros</b><br><br>
                            Meshaal Barsham<br>
                            Saad Al Sheeb<br>
                            Yousef Hassan
                        </div><hr>
                        <div>
                            <b>Medio Campo</b><br><br>
                            Karim Boudiaf<br>
                            Abdulaziz Hatem<br>
                            Assim Madibo<br>
                            Naif Al-Hadhrami<br>
                            Ali Asad
                        </div><hr>
                        <div>
                            <b>Delanteros</b><br><br>
                            Almoez Ali<br>
                            Hassan Al-Haydos<br>
                            Akram Afif<br>
                            Mohammed Muntari<br>
                            Ahmed Alaaeldin 
                        </div><hr>
                        <div>
                            <b>Defensa</b><br><br>
                            Pedro Miguel<br>
                            Abdelkarim Hassan<br>
                            Bassam Al Rawi<br>
                            Boualem Khoukhi<br>
                            Ismail Mohamad<br>
                            Tarek Salman<br>
                            Homan Ahmed<br>
                            Musaab Khidir<br>
                            Salem Al-Hajri<br>
                            Jassem Gaber Abdulsallam
                        </div>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                            
                                if($stmt->execute()) {
                                    
                                } 
                                else {
                                    
                                }
                            } else {

                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="bed">
                <div class="pagetitle">
                    Ecuador
                    <form action="teams.php" method="POST">
                        <button class="favanchor" type="submit">
                            <h3>Seleccionar favorito</h3>
                            <img src='media/favbutton.png'>
                            <img class="selected" src='media/favselected.png'>
                        </button>
                    </form>
                </div><br><br>
                <div class="games">
                    <div class="countrylegend">
                        <h2>Bandera:</h2>
                        <img src='media/flags/ecuador.png'>
                        <h2>Información:</h2>
                        <p>
                            La de Qatar será su cuarta participación en un Mundial. Todas han sido en este siglo: empezando por Corea 2002, posteriormente repitieron en Alemania 2006 y por último en Brasil 2014. En el Mundial de Alemania 2006 consiguieron pasar de la fase de grupos y terminaron perdiendo en octavos contra Inglaterra.
                        </p>
                    </div>
                    <div class="countryDisplay">
                        <h2>Nómina</h2>
                        <div>
                            <b>Porteros</b><br><br>
                            Meshaal Barsham<br>
                            Saad Al Sheeb<br>
                            Yousef Hassan
                        </div><hr>
                        <div>
                            <b>Medio Campo</b><br><br>
                            Karim Boudiaf<br>
                            Abdulaziz Hatem<br>
                            Assim Madibo<br>
                            Naif Al-Hadhrami<br>
                            Ali Asad
                        </div><hr>
                        <div>
                            <b>Delanteros</b><br><br>
                            Almoez Ali<br>
                            Hassan Al-Haydos<br>
                            Akram Afif<br>
                            Mohammed Muntari<br>
                            Ahmed Alaaeldin 
                        </div><hr>
                        <div>
                            <b>Defensa</b><br><br>
                            Pedro Miguel<br>
                            Abdelkarim Hassan<br>
                            Bassam Al Rawi<br>
                            Boualem Khoukhi<br>
                            Ismail Mohamad<br>
                            Tarek Salman<br>
                            Homan Ahmed<br>
                            Musaab Khidir<br>
                            Salem Al-Hajri<br>
                            Jassem Gaber Abdulsallam
                        </div>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                            
                                if($stmt->execute()) {
                                    
                                } 
                                else {
                                    
                                }
                            } else {

                            }
                        ?>
                    </div>
                </div>
            </div>
            <h1 class="groupHeader">
                Grupo B
            </h1>
            <div class="bed">
                <div class="pagetitle">
                    Inglaterra
                    <form action="teams.php" method="POST">
                        <button class="favanchor" type="submit">
                            <h3>Seleccionar favorito</h3>
                            <img src='media/favbutton.png'>
                            <img class="selected" src='media/favselected.png'>
                        </button>
                    </form>
                </div><br><br>
                <div class="games">
                    <div class="countrylegend">
                        <h2>Bandera:</h2>
                        <img src='media/flags/inglaterra.png'>
                        <h2>Información:</h2>
                        <p>
                            Inglaterra ha alcanzado cinco veces los 2 digitos en el marcador: al vencer a Austria 11-1 en 1908, al machacar a Irlanda 13-0 y 13-2 en 1882 y 1899 y al derrotar a Portugal, en 1947 y con el mismo resultado a Estados Unidos en 1964. Como inglaterra es el pais natal del futbol moderno y Brasil ostenta el record de haber ganado cinco mundiales, los encuentros entre estos rivales se considera clásicos.
                        </p>
                    </div>
                    <div class="countryDisplay">
                        <h2>Nómina</h2>
                        <div>
                            <b>Porteros</b><br><br>
                            Meshaal Barsham<br>
                            Saad Al Sheeb<br>
                            Yousef Hassan
                        </div><hr>
                        <div>
                            <b>Medio Campo</b><br><br>
                            Karim Boudiaf<br>
                            Abdulaziz Hatem<br>
                            Assim Madibo<br>
                            Naif Al-Hadhrami<br>
                            Ali Asad
                        </div><hr>
                        <div>
                            <b>Delanteros</b><br><br>
                            Almoez Ali<br>
                            Hassan Al-Haydos<br>
                            Akram Afif<br>
                            Mohammed Muntari<br>
                            Ahmed Alaaeldin 
                        </div><hr>
                        <div>
                            <b>Defensa</b><br><br>
                            Pedro Miguel<br>
                            Abdelkarim Hassan<br>
                            Bassam Al Rawi<br>
                            Boualem Khoukhi<br>
                            Ismail Mohamad<br>
                            Tarek Salman<br>
                            Homan Ahmed<br>
                            Musaab Khidir<br>
                            Salem Al-Hajri<br>
                            Jassem Gaber Abdulsallam
                        </div>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                            
                                if($stmt->execute()) {
                                    
                                } 
                                else {
                                    
                                }
                            } else {

                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>