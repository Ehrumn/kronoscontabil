<html>
    <head>
        <meta charset="UTF-8">
        <title>KRONOS</title>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body class="master-all">
        <script src="assets/js/bootstrap.min.js"></script>
        <img class="back-img" src="assets/images/icone_1000x1000.png">
        <div class="all">
            <div class="top">
                <div class="top-top">
                    <div class="top-top-logo"></div>
                    <div class="top-top-logged"></div>
                </div>
                <div class="top-menu">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cadastros <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Socios</a></li>
                            <li><a href="#">Clientes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">links Uteis</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mid">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
            <footer class="botton"></footer>
        </div>
    </body>
</html>

