<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <meta charset="utf-8"/>
    </head>

    <?php
    include "./conectorBD.php";

    $conecta = new conexao();
    $conecta->conecta();

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $sangue = $_POST['sangue'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $telefone_urgencia = $_POST['urgencia'];
    $camiseta = $_POST['camiseta'];
    $email = $_POST['email'];

    $sqlcount = "Select count(*) from `rustica_jisu`";
    $resultsetcount = mysql_query($sqlcount);
    $rowcount = mysql_fetch_row($resultsetcount);

    $numero = $rowcount[0] + 1;

    $sql = "insert into `rustica_jisu` (`nome`, `cpf`, `data_nascimento`, `sangue`, `sexo`, `cidade`, `uf`, `telefone`, `telefone_urgencia`, `email`, `confirmado`, `numero`, `camiseta`) values"
            . "('" . $nome . "','" . $cpf . "','" . $data . "','" . $sangue . "','" . $sexo . "','" . $cidade . "','" . $uf . "','" . $telefone . "','" . $telefone_urgencia . "','" . $email . "','N','" . $numero . "','" . $camiseta . "')";

    if ($resultset = mysql_query($sql)) {

        $conecta->desconecta();

        if (!empty($email)) {
            include './email.php';
        }

        include './msgsucesso.php';
    } else {
        include './msgerro.php';
    }
    ?>

</html>