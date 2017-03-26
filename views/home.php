<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>KRONOS</title>
        <link href="assets/css/style.css" rel="stylesheet"/>        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="body_all">
            <div class="left-all">
               <?php include 'noticias.php';?>
            </div>
            <div class="meddle-all">
                <div class="cabecalho"> 
                    <div class="cab-logo">
                        <img class="img-logo" src="assets/images/logo_1000x258.png">
                    </div>
                    <div class="cab-login">
                        <a href="login"><button class="btn btn-primary btn-sm">Acessar Sistema</button></a>
                        </form>
                    </div>
                </div>
                <div><img src="assets/images/icone_1000x1000.png" class="back-img"></div>
                <div class="middle">

                    <br><br><br><br><br><br><br><br><center><h1>Site em Desenvolvimento</h1></center>
                </div>
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
                <div class="footer-left"><center><img  width="32px"></center></div>
                <div class="footer-meddle"><center><a href="#"><img src="/assets/img/fb.png" width="32px;"></a></center></div>
                <div class="footer-right"><center><img  width="32px"></center></div>
            </footer>
            <div class="powered">Powered by Bel. Rafael C. Dresch & Tecg.º Fernando Oliveira.</div>
        </div>
    </body>
</html>
