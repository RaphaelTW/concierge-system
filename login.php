<?php
    session_start();

    if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["password"])))) {
        print "<script>location.href='index.php'</script>";
    }

    include('config.php');

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users
    WHERE email = '{$email}'
    AND password = '{$password}'";

    $res = $conn->query($sql) or die($coon->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;
    if($qtd > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $row->name;
        $_SESSION["type"] = $row->type;
        print "<script>location.href='dashboard.php';</script>";
    } else {
        print "<script>alert('e-mail e/ou password incorreto(s)');</script>";
        print "<script>location.href='index.php';</script>";
    }
