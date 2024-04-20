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
            include "index.php";
            break;
        case '2':
            include "titulos.php";
            break;
        case '3':
            include "sobre.php";
            break;
        case '4':
            include "login.php";
            break;
        case '15':
            include "cadastro.php";
            break;
        case '5':
            include "snes.php";
            break;
        case '6':
            include "gameboy.php";
            break;
        case '7':
           include "nintendo64.php";
            break;
       case '8':
            include "wii.php";
            break;
        case '9':
            include "megadrive.php";
            break;
        case '10':
            include "xbox.php";
            break;
        case '11':
            include "playstation.php";
            break;
        default:
            include "meio.php"; // Página padrão se $p não corresponder a nenhum caso

            //Vá incluindo mais casos se for necessário
    }
?>

<?php
    include "rodape.php";
?>
