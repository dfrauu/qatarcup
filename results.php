<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
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
            <div class="bed">
                <div class="pagetitle">
                    Juegos
                </div><br><br>
                <div class="games">
                    <div class="datepicker">
                        <form action="results.php" method="post">
                            <?php
                                if ($_POST) {
                                    echo '<input type="date" name="gameDate" type="date" min="2022-11-20" max="2022-12-31" value="'.$_POST['gameDate'].'" required>';
                                } else {
                                    echo '<input type="date" name="gameDate" type="date" min="2022-11-20" max="2022-12-31" value="2022-11-20" required>';
                                }
                            ?>
                            <br><br> <hr> <br>
                            <input type="submit" value="Elegir Fecha">
                        </form>
                    </div>
                    <div class="dateDisplay">
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
                            
                                if($stmt->execute()) {
                                    
                                } 
                                else {
                                    
                                }
                            } else {
                                echo "<h2>No se ha seleccionado una fecha</h2>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>