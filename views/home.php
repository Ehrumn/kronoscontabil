<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>KRONOS</title>
        <link href="assets/css/style.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="body_all">
            <div class="left-all">
                Left-All
            </div>
            <div class="meddle-all">
                <div class="cabecalho"> 
                    <div class="cab-logo">
                        <img class="img-logo" src="assets/images/logo_1000x258.png" height="120px">
                    </div>
                    <div class="cab-login">
                        <form method="POST">
                            <table>
                                <tr>
                                    <td><input class="inp-email" type="email" name="email" placeholder="Digite seu e-mail" required></td>
                                </tr>
                                <tr>
                                    <td><input class="inp-pass" type="password" name="passwd" placeholder="Digite sua senha" required>
                                        <input class="inp_subm" type="button" value="OK" onclick="alert('Esta área está em construção!')"></td>
                                </tr>
                            </table>   
                        </form>
                    </div>
                </div>
                <div class="middle"><br><br><br><br><br><br><br><br><center><h1>Site em Desenvolvimento</h1></center></div>
            </div>
            <div class="right-all">
                <div class="mid-rig-top"><h2>Links Úteis:</h2></div>
                <div class="mid-rig-links">
                    <?php
                    try {
                        $sqll = "SELECT tipo FROM tb_links_uteis GROUP BY tipo ORDER BY tipo";
                        $sqll = $pdo->query($sqll);
                        foreach ($sqll->fetchAll() as $value) {

                            $tipo = $value['tipo']; //variavel tipo

                            echo "<div class='btn-tit'><strong>" . $tipo . "</strong></div>";

                            $sql = "SELECT * FROM tb_links_uteis WHERE ativo = 'S' and tipo = '$tipo'";
                            $sql = $pdo->query($sql);

                            if ($sql->rowCount() > 0) {
                                foreach ($sql->fetchAll() as $key) {
                                    //echo '<div class="btn-links">';
                                    echo '<a href=' . $key['link'] . '><div class="btn-links">' . $key['descricao'] . '</div></a>';
                                }
                            } else {
                                echo "Não hà links disponiveis";
                            }
                        }
                    } catch (PDOException $e) {
                        echo "falhou" . $e->getMessage();
                    }
                    ?><br><br>
                </div>
            </div>
            <footer class="footer">

                <div class="footer-left"><center>left</center></div>
                <div class="footer-meddle"><center>meddle</center></div>
                <div class="footer-right"><center>right</center></div>
                <div class="powered">Powered by Bel. Rafael C. Dresch & Tecg.º Fernando Oliveira</div>

            </footer>
        </div>
    </body>
</html>