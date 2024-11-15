<?php
    session_start();

    // Verifica se os dados foram enviados
    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["password"])))) {
        print "<script>location.href='index.php'</script>";
    }

    // Inclui o arquivo de configuração para a conexão com o banco de dados
    include('config.php');

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta para encontrar o usuário com o e-mail informado
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = $con->query($sql) or die($con->error);

    // Verifica se o usuário existe
    $qtd = $res->num_rows;
    if($qtd > 0) {
        $row = $res->fetch_object();

        // Verifica a senha usando bcrypt
        if (password_verify($password, $row->password)) {
            // Senha correta, inicia a sessão
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $row->name;
            $_SESSION["type"] = $row->type;

            // Redireciona para o dashboard
            print "<script>location.href='dashboard.php';</script>";
        } else {
            // Senha incorreta
            print "<script>alert('E-mail e/ou senha incorreto(s)');</script>";
            print "<script>location.href='index.php';</script>";
        }
    } else {
        // Usuário não encontrado
        print "<script>alert('E-mail e/ou senha incorreto(s)');</script>";
        print "<script>location.href='index.php';</script>";
    }
?>
