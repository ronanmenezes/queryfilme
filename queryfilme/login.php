
<?php   
include_once("config/conexao.php");
include_once("config/constantes.php");
include_once("func/funcoes.php");
$conn = conectar();
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

$email = $dados['email'];
$senha = $dados['senha'];

// $retornoValidar = validarSenha('idadm, nome, email, senha', 'adm', 'email', 'senha', $email, $senha, 'ativo', 'A');
// if ($retornoValidar == 'Vazio'){
//     echo json_encode(['success'=> false,'message' => 'Não efetuado']);

// } else {
//     foreach ($retornoValidar as $itemValidar) {
//         $idadm = $itemValidar -> idadm;
//         $nome = $itemValidar -> nome;
//         $email = $itemValidar -> email;
//         $senha = $itemValidar ->senha;
//     }
//         $_SESSION['idadm'] = $idadm;
//         $_SESSION['nome'] = $nome;
//         $_SESSION['email'] = $email;
//          echo json_encode(['success' => true,'message' => 'Login efetuado com sucesso! Bora lá']);
// }

$retornoValidar = validarSenhaCript('idadm, nome, email, senha', 'adm', 'email', 'senha', $email, $senha, 'ativo', 'A');
if ($retornoValidar){
 if ($retornoValidar =='usuario') {
    echo json_encode(['success' => false, 'message' => 'Usuário Inválido.']);
 } else if ($retornoValidar == 'senha') {
    echo json_encode(['success'=> false, 'message'=> 'Senha inválida.']);
 } else {
    $_SESSION['idadm'] =$retornoValidar -> idadm;
    $_SESSION['nome'] = $retornoValidar -> nome;
    $_SESSION['email'] = $retornoValidar -> email;
     echo json_encode(['success' => true,'message' => 'Login efetuado com sucesso! Bora lá']);
    }
} else {
    echo json_encode(['success'=> false, 'message'=> 'Usuário ou senha inválidos.']);
}

?>