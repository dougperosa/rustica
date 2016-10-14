<div style="background-color: white; text-align: left; border-radius: 15px; height: 100%;" class="container navbar-wrapper">
    <div style="margin-left: 25px; margin-right: 25px">
        <br><br>
        <form method="post" action="" onsubmit="return habilitaBusca()">
            <b>Nome: </b>
            <input type="text" name="nomeinscrito" id="nomeinscrito" style="width: 350px; margin-top: 8px">
            <b>Cidade: </b>
            <input type="text" name="cidadeinscrito" id="cidadeinscrito" style="width: 200px; margin-top: 8px">
            <input type="submit" value="Buscar" id="buscainscritos" class="btn btn-info">
        </form>

        <div class="alert alert-info">
            Nesse formulário de consulta consta apenas os inscritos que já efetuaram o pagamento.
        </div>

        <?php
        include "./conectorBD.php";

        $conecta = new conexao();
        $conecta->conecta();

        $sqlcount = "SELECT COUNT(*) FROM ciclismo_supervolta";
        $resultsetcount = mysql_query($sqlcount);
        $rowcount = mysql_fetch_row($resultsetcount);
        ?>

        <div class="alert">
            Total de inscritos: <?php echo $rowcount[0]; ?>
        </div>

        <?php
        $sqlcountconfirmados = "SELECT COUNT(*) FROM ciclismo_supervolta WHERE confirmado = 'S'";
        $resultsetcountconfirmados = mysql_query($sqlcountconfirmados);
        $rowcountconfirmados = mysql_fetch_row($resultsetcountconfirmados);
        ?>

        <div class="alert">
            Total de inscritos Confirmados: <?php echo $rowcountconfirmados[0]; ?>
        </div>

        <?php
        $where = null;

        if (!empty($_POST['nomeinscrito'])) {
            $where = " AND nome like '%" . $_POST['nomeinscrito'] . "%' ";
        }

        if (!empty($_POST['cidadeinscrito'])) {
            $where .= " AND cidade like '%" . $_POST['cidadeinscrito'] . "%' ";
        }

        $sql = "SELECT * FROM ciclismo_supervolta WHERE confirmado = 'S' " . $where;

        $sql .= " ORDER BY NUMERO ASC";

        $sql1 = $sql . " LIMIT 0,25";
        $sql2 = $sql . " LIMIT 25,25";
        $sql3 = $sql . " LIMIT 50,25";
        $sql4 = $sql . " LIMIT 75,25";
        $sql5 = $sql . " LIMIT 100,25";
        $sql6 = $sql . " LIMIT 125,25";
        $sql7 = $sql . " LIMIT 150,25";
        $sql8 = $sql . " LIMIT 175,25";
        $sql9 = $sql . " LIMIT 200,25";
        $sql10 = $sql . " LIMIT 225,25";
        $sql11 = $sql . " LIMIT 250,25";
        $sql12 = $sql . " LIMIT 275,25";
        
        $resultset1 = mysql_query($sql1);
        $resultset2 = mysql_query($sql2);
        $resultset3 = mysql_query($sql3);
        $resultset4 = mysql_query($sql4);
        $resultset5 = mysql_query($sql5);
        $resultset6 = mysql_query($sql6);
        $resultset7 = mysql_query($sql7);
        $resultset8 = mysql_query($sql8);
        $resultset9 = mysql_query($sql9);
        $resultset10 = mysql_query($sql10);
        $resultset11 = mysql_query($sql11);
        $resultset12 = mysql_query($sql12);

        echo '<table class="table table-hover" id="pag1">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row1 = mysql_fetch_row($resultset1)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row1[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row1[13]) . '</td>';
            echo '<td>' . utf8_encode($row1[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row1[7]) . ' - ' . $row1[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        echo '<table class="table table-hover" id="pag2" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row2 = mysql_fetch_row($resultset2)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row2[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row2[13]) . '</td>';
            echo '<td>' . utf8_encode($row2[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row2[7]) . ' - ' . $row2[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        echo '<table class="table table-hover" id="pag3" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row3 = mysql_fetch_row($resultset3)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row3[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row3[13]) . '</td>';
            echo '<td>' . utf8_encode($row3[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row3[7]) . ' - ' . $row3[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        echo '<table class="table table-hover" id="pag4" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row4 = mysql_fetch_row($resultset4)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row4[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row4[13]) . '</td>';
            echo '<td>' . utf8_encode($row4[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row4[7]) . ' - ' . $row4[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';

        echo '<table class="table table-hover" id="pag5" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row5 = mysql_fetch_row($resultset5)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row5[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row5[13]) . '</td>';
            echo '<td>' . utf8_encode($row5[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row5[7]) . ' - ' . $row5[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag6" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row6 = mysql_fetch_row($resultset6)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row6[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row6[13]) . '</td>';
            echo '<td>' . utf8_encode($row6[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row6[7]) . ' - ' . $row6[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag7" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row7 = mysql_fetch_row($resultset7)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row7[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row7[13]) . '</td>';
            echo '<td>' . utf8_encode($row7[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row7[7]) . ' - ' . $row7[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag8" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row8 = mysql_fetch_row($resultset8)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row8[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row8[13]) . '</td>';
            echo '<td>' . utf8_encode($row8[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row8[7]) . ' - ' . $row8[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag9" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row9 = mysql_fetch_row($resultset9)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row9[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row9[13]) . '</td>';
            echo '<td>' . utf8_encode($row9[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row9[7]) . ' - ' . $row9[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag10" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row10 = mysql_fetch_row($resultset10)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row10[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row10[13]) . '</td>';
            echo '<td>' . utf8_encode($row10[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row10[7]) . ' - ' . $row10[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag11" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row11 = mysql_fetch_row($resultset11)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row11[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row11[13]) . '</td>';
            echo '<td>' . utf8_encode($row11[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row11[7]) . ' - ' . $row11[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        
        echo '<table class="table table-hover" id="pag12" style="display: none">';
        echo '<tr><td><b>#</b></td><td><b>Nome</b></td><td><b>Categoria</b></td><td><b>Cidade/UF</b></td></tr>';
        while ($row12 = mysql_fetch_row($resultset12)) {
            /* if ($row[12] == 'S') {
              echo '<tr>';
              echo '<td><b>' . utf8_encode($row[13]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[1]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[11]) . '</b></td>';
              echo '<td><b>' . utf8_encode($row[7]) . ' - ' . $row[8] . '</b></td>';
              echo '</tr>';
              } else { */
            $categoria = null;
            if ($row12[2] == 'S') {
                $categoria = 'Super Volta';
            } else {
                $categoria = 'Volta';
            }
            echo '<tr>';
            echo '<td>' . utf8_encode($row12[13]) . '</td>';
            echo '<td>' . utf8_encode($row12[1]) . '</td>';
            echo '<td>' . $categoria . '</td>';
            echo '<td>' . utf8_encode($row12[7]) . ' - ' . $row12[8] . '</td>';
            echo '</tr>';

            //}
        }
        echo '</table>';
        ?>
        
        <div style="text-align: center">
            <div class="pagination">
                <ul>
                    <li onclick="paginacao('1')"><a style="color: #00995D">Primeira</a></li>
                    <li onclick="paginacao('1')"><a id="botaopag1" style="color: white; background-color: #B1D34B">1</a></li>
                    <li onclick="paginacao('2')"><a id="botaopag2" style="color: #00995D">2</a></li>
                    <li onclick="paginacao('3')"><a id="botaopag3" style="color: #00995D">3</a></li>
                    <li onclick="paginacao('4')"><a id="botaopag4" style="color: #00995D">4</a></li>
                    <li onclick="paginacao('5')"><a id="botaopag5" style="color: #00995D">5</a></li>
                    <li onclick="paginacao('6')"><a id="botaopag6" style="color: #00995D">6</a></li>
                    <li onclick="paginacao('7')"><a id="botaopag7" style="color: #00995D">7</a></li>
                    <li onclick="paginacao('8')"><a id="botaopag8" style="color: #00995D">8</a></li>
                    <li onclick="paginacao('9')"><a id="botaopag9" style="color: #00995D">9</a></li>
                    <li onclick="paginacao('10')"><a id="botaopag10" style="color: #00995D">10</a></li>
                    <li onclick="paginacao('11')"><a id="botaopag11" style="color: #00995D">11</a></li>
                    <li onclick="paginacao('12')"><a id="botaopag12" style="color: #00995D">12</a></li>
                    <li onclick="paginacao('12')"><a style="color: #00995D">Última</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>    
