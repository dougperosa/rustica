<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './cabecalho.php';
?>

<body style="background-color: #00995D;">
    <div style="height: 100%">

        <figure id="home" align="center" style="width: 100%; margin-left: 0px">
            <img src="img/Banner-Principal.png"> 
        </figure>
        
        <?php
        include './informacoes.php';
        include './regulamento.php';
        include './trajeto.php';
        include './dicas.php';
        ?>

    </div>

    <div align="center" style="height: 110px;">
        <br>
        <img src="img/Logo-Unimed.png" width="90" height="35">
        <br>
        <spam style="color: #ffffff">Direitos autorais 2016 Unimed Erechim | Todos os direitos reservados.</spam>
    </div>

</body>