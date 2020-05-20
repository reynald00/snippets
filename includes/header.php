<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/estilo.css">

    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>
            
    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>RCode</title>
</head>
<body>
    <main id='app'>
    <nav class="teal">
        <div class="nav-wrapper" v-if="menu == true">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php"><i class="material-icons">home</i></a></li>
            <li><a href="alta.php"><i class="material-icons">add</i></a></li>
            <li><a href="index.php?cat=php">PHP</a></li>
            <li><a href="index.php?cat=java">JAVA</a></li>
            <li><a href="index.php?cat=html">HTML</a></li>
            <li><a href="../login/salir.php">Salir</a></li>            
            </ul>
        </div>
    </nav>