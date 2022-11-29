<?php
    session_start();
    include_once 'config.php';
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracket</title>
    <style>

        table{
            width: 100%;
        }
        td{
            text-align: center;
            width: 14%;
        }
    </style>
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
                <div class="pagetitle">
                    Clasificación
                </div><br><br>
                <div>
                    <table class="bracket">
                        <!--Encabezado -->
                        <tr>
                            <th>Round of 16</th>
                            <th>Quarterfinals</th>
                            <th>Semifinals</th>
                            <th>Final</th>
                            <th>Semifinals</th>
                            <th>Quarterfinals</th>
                            <th>Round of 16</th>
                        </tr>
                        <!--Ronda de 16 -->
                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '1'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td colspan='5'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '2'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '1'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td colspan='2'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'> 
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='2'></td>
                                ");
                                }
                                $sql = "SELECT * FROM ganador";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <h4>Ganador</h4>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo]</p>
                                    </td>
                                    <td colspan='2'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <h4>Ganador</h4>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='2'></td>
                                ");
                                }

                                $sql = "SELECT * FROM bracket WHERE id = '2'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                ");
                                }
                            ?>
                        </tr>

                        <tr>
                        <td colspan="7"></td>
                        </tr>
                        <!--Cuartos de final -->
                        <tr>
                           <?php
                                $sql = "SELECT * FROM bracket WHERE id = '9'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" <td></td>
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td colspan='3'></td>
                                    ");
                                }
                                else{
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td colspan='3'></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '10'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" 
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                ");
                                }
                            ?>
                        </tr>
                        <tr>
                        <?php
                                $sql = "SELECT * FROM bracket WHERE id = '9'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" <td></td>
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td colspan='3'></td>
                                    ");
                                }
                                else{
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td colspan='3'></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '10'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" 
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                ");
                                }
                            ?>
                        </tr>
                        <!--Ronda de 16 -->
                        <tr>
                        <td colspan="7"></td>
                        </tr>
                        <tr>
                           <?php
                                $sql = "SELECT * FROM bracket WHERE id = '3'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '13'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo1]</p>
                                            <p>$row[gol1]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '14'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo1]</p>
                                            <p>$row[gol1]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '4'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                           ?>
                        </tr>
                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '3'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td colspan='5'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '4'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                            ?>
                        <!--Semifinales y final -->
                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '15'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("td colspan='3'></td>
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo1]</p>
                                            <p>$row[gol1]</p>
                                        </td>
                                        <td colspan='3'></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td colspan='3'></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td colspan='3'></td>
                                        ");
                                }
                               
                            ?>
                        </tr>
                        <tr>
                        <?php
                                $sql = "SELECT * FROM bracket WHERE id = '15'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td colspan='3'></td>
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo2]</p>
                                            <p>$row[gol2]</p>
                                        </td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td colspan='3'></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        ");
                                }
                               
                            ?>
                        </tr>
                         <!--Ronda de 16 -->
                        <tr>
                            <?php 
                                $sql = "SELECT * FROM bracket WHERE id = '5'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td colspan='5'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                                
                                $sql = "SELECT * FROM bracket WHERE id = '6'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'> 
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                            ?>
                        </tr>

                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '5'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '13'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo2]</p>
                                            <p>$row[gol2]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '14'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo2]</p>
                                            <p>$row[gol2]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '6'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td></td>
                                ");
                                }
                            ?>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                        </tr>
                        <!--Cuartos de final -->
                        <tr>
                        <?php
                                $sql = "SELECT * FROM bracket WHERE id = '11'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" <td></td>
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td></td>
                                    <td><h4>Tercero y Cuarto</h4></td>
                                    <td></td>
                                    ");
                                }
                                else{
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        <td><h4>Tercero y Cuarto</h4></td>
                                        <td></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '12'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" 
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                ");
                                }
                            ?>
                        </tr>
                        <tr>
                        <?php
                                $sql = "SELECT * FROM bracket WHERE id = '11'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" <td></td>
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td></td>
                                    ");
                                }
                                else{
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                ");
                                }
                                $sql = "SELECT * FROM TyC";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo1]</p>
                                            <p>$row[gol1]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                
                                $sql = "SELECT * FROM bracket WHERE id = '12'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo(" 
                                <td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                ");
                                }
                            ?>
                        </tr>
                        <!--Ronda de 16-->
                        <tr>
                            <td colspan="7"></td>
                        </tr>
                        <tr>
                           <?php
                                $sql = "SELECT * FROM bracket WHERE id = '7'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    <td></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td></td>
                                ");
                                }
                                $sql = "SELECT * FROM TyC";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/$flag.png' class='flag'>
                                            <p>$row[equipo2]</p>
                                            <p>$row[gol2]</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                else{
                                    echo("<td></td>
                                    <td class='match'>
                                            <img src='./media/flags/dummy.png' class='flag'>
                                            <p>Por decidir</p>
                                        </td>
                                        <td></td>
                                        ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '8'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo1']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo1]</p>
                                        <p>$row[gol1]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                            ?>
                        </tr>
                        <tr>
                            <?php
                                $sql = "SELECT * FROM bracket WHERE id = '7'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    <td colspan='5'></td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                                $sql = "SELECT * FROM bracket WHERE id = '8'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(!empty($row)){
                                    $flag = strtolower($row['equipo2']);
                                    $flag = str_replace(' ', '', $flag);
                                echo("<td class='match'>
                                        <img src='./media/flags/$flag.png' class='flag'>
                                        <p>$row[equipo2]</p>
                                        <p>$row[gol2]</p>
                                    </td>
                                    ");
                                }
                                else{
                                    echo("<td class='match'>
                                    <img src='./media/flags/dummy.png' class='flag'>
                                        <p>Por decidir</p>
                                    </td>
                                    <td colspan='5'></td>
                                ");
                                }
                            ?>
                        </tr>
                </div>
        </div>
    </section>
</body>
</html>