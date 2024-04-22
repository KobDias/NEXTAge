<?php
    include "topo.php";
?>

<?php
    if (isset($_GET['p'])){
        $p = $_GET['p']; 
    } else {
        $p = 'default'; // Defina a página padrão aqui, se nenhum valor for passado pelo $_GET
    }
    // Determina qual página incluir com base no valor de $p
    switch ($p) {
        case '1':
            include require_once "index.php";
            break;
        case '2':
            include require_once "titulos.php";
            break;
        case '3':
            include require_once "sobre.php";
            break;
        case '4':
            include require_once "login.php";
            break;
        case '15':
            include require_once "cadastro.php";
            break;
        case '5':
            include require_once "snes.php";
            break;
        case '6':
            include require_once "gameboy.php";
            break;
        case '7':
           include require_once "nintendo64.php";
            break;
       case '8':
            include require_once "wii.php";
            break;
        case '9':
            include require_once "megadrive.php";
            break;
        case '10':
            include require_once "xbox.php";
            break;
        case '11':
            include require_once "playstation.php";
            break;
        default:
            include require_once "meio.php"; // Página padrão se $p não corresponder a nenhum caso

            //Vá incluindo mais casos se for necessário
    }
?>

<?php
    include "rodape.php";
?>
