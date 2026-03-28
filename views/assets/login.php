<?php

// 1. Inclui o teu ficheiro de configuração da base de dados
include_once("./config/database.php"); // Ajusta o caminho se necessário

if (isset($_POST['login'])) {

    // 2. Recebe os dados do formulário HTML (names: 'email' e 'password')
    $email_form = mysqli_real_escape_string($conn, $_POST['email']);
    $senha_form = $_POST['password'];

    // 3. Criptografia MD5 (para bater com o exemplo que você enviou antes)
    $senha_md5 = md5($senha_form);

    // 4. Query ajustada para a sua tabela 'user' (colunas: email e password)
    $sql = "SELECT * FROM user WHERE email = '$email_form' AND password = '$senha_md5'";
    $query = mysqli_query($conn, $sql) or die("Erro na consulta ao banco");

    // 5. Verifica se o usuário existe
    if (mysqli_num_rows($query) <= 0) {
        echo "<script>
                alert('E-mail ou senha incorretos!');
                window.location.href='../../login.html'; 
              </script>";
        die();
    } else {
        // Busca os dados do usuário para salvar no cookie
        $dados = mysqli_fetch_array($query);
        
        // Criando os cookies de sessão
        setcookie("login", $dados['email'], time() + (86400 * 30), "/");
        setcookie("nome", $dados['name'], time() + (86400 * 30), "/");
        setcookie("role", $dados['role'], time() + (86400 * 30), "/");

        // Redireciona para a index
        header("Location: ../../index.php");
        exit();
    }
}

?>