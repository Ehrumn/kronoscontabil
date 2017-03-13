<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>KRONOS</title>
        <link href="assets/css/style.css" rel="stylesheet"/>
        <!--link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script-->
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
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
                        <a href="login"><button class="btn btn-primary btn-sm">Acessar Sistema</button></a>
                        </form>
                    </div>
                </div>
                <div class="middle"><br><br><br><br><br><br><br><br><center><h1>Site em Desenvolvimento</h1></center></div>
            </div>
            <div class="right-all">
                <div class="mid-rig-top"><h2>Links Úteis:</h2></div>
                <div class="mid-rig-links">
                    <?php
                    $links = new Home();
                    $categorias = $links->getCategoria();

                    foreach ($links->getCategoria() as $categoria) {

                        echo "<div class='btn-tit'><strong>" . $categoria['tipo'] . "</strong></div>";

                        foreach ($links->getLinks($categoria['tipo']) as $key) {
                            //echo '<div class="btn-links">';
                            echo '<a href=' . $key['link'] . '><div class="btn-links">' . $key['descricao'] . '</div></a>';
                        }
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
