
<?php   
// include_once("config/conexao.php");
// include_once("config/constantes.php");
// include_once("func/funcoes.php");
// $conn = conectar();
$acao = filter_input(INPUT_POST,'acao',FILTER_SANITIZE_STRING);
$acaoId = filter_input(INPUT_POST,'acaoid',FILTER_SANITIZE_NUMBER_INT);
$controle = filter_input(INPUT_POST,'controle',FILTER_SANITIZE_STRING);
$controleGet = filter_input(INPUT_GET,'controleget',FILTER_SANITIZE_STRING);

switch ($acao) {
    case '':    
    }

    switch ($controle) {
        case 'listaCliente':
            include_once 'cliente.php';
            break;
            case 'listaGenero':
                include_once 'genero.php';
                break;
                case 'listaFilme':
                    include_once 'filme.php';
                    break;
    }


?>
