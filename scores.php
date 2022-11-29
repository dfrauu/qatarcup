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
    <title>RESULTADOS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="media/cup.png">
    <style>
        table, th ,td{
            border: 1px solid black;
            border-collapse: collapse;  
        }
        table{
            width: 95%;
            margin: 10px auto;
        }
        th, td{
            padding: 5px;
            text-align: left;
        }
    </style>
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
    }
    elseif(isset($_SESSION['username'])) {
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
    }
    elseif(isset($_SESSION['admin'])) {
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
                <?php
                    $sql = "SELECT * FROM grupos ORDER BY puntos DESC";
                    $conn =  mysqli_connect($db_host, $db_user, $db_password, $db_name);
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    $grupos = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
                    if($resultCheck > 0) {
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            if($i == 0 ) {
                                $grupoIndex = $i / 4;
                                echo("
                                <div class='pagetitle'>
                                    Grupo $grupos[$grupoIndex]
                                </div>
                                <table class='grupos'>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Puntos</th>
                                        <th>Partidos Jugados</th>
                                        <th>Partidos Ganados</th>
                                        <th>Partidos Empatados</th>
                                        <th>Partidos Perdidos</th>
                                        <th>Goles a Favor</th>
                                        <th>Goles en Contra</th>
                                        <th>Diferencia de Goles</th>
                                    </tr>
                                    <tr>
                                    <td><img class='flag' src='media/flags/$row[flag].png'> $row[pais]</td>
                                    <td>$row[puntos]</td>
                                    <td>$row[jj]</td>
                                    <td>$row[jg]</td>
                                    <td>$row[je]</td>
                                    <td>$row[jp]</td>
                                    <td>$row[ga]</td>
                                    <td>$row[gc]</td>
                                    <td>$row[dif]</td>
                                    </tr>
                                ");
                                $i++;
                            }
                            elseif($i % 4 == 0){
                                $grupoIndex = $i / 4;
                                echo("
                                </table>
                                <div class='pagetitle'>
                                    Grupo $grupos[$grupoIndex]
                                </div>
                                <table>
                                    <tr>
                                        <th>Equipo</th>
                                        <th>Puntos</th>
                                        <th>Partidos Jugados</th>
                                        <th>Partidos Ganados</th>
                                        <th>Partidos Empatados</th>
                                        <th>Partidos Perdidos</th>
                                        <th>Goles a Favor</th>
                                        <th>Goles en Contra</th>
                                        <th>Diferencia de Goles</th>
                                    </tr>
                                    <tr>
                                    <td><img class='flag' src='media/flags/$row[flag].png'> $row[pais]</td>
                                    <td>$row[puntos]</td>
                                    <td>$row[jj]</td>
                                    <td>$row[jg]</td>
                                    <td>$row[je]</td>
                                    <td>$row[jp]</td>
                                    <td>$row[ga]</td>
                                    <td>$row[gc]</td>
                                    <td>$row[dif]</td>
                                    </tr>
                                ");
                                $i++;
                            }
                            else{
                                echo("
                                <tr>
                                    <td><img class='flag' src='media/flags/$row[flag].png'> $row[pais]</td>
                                    <td>$row[puntos]</td>
                                    <td>$row[jj]</td>
                                    <td>$row[jg]</td>
                                    <td>$row[je]</td>
                                    <td>$row[jp]</td>
                                    <td>$row[ga]</td>
                                    <td>$row[gc]</td>
                                    <td>$row[dif]</td>
                                </tr>
                                ");
                                $i++;
                            }
                            }
                            
                    }

                ?>
                
                
            </div>
        </div>
    </section>
</body>
</html>