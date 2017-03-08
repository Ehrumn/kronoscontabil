<html>
    <head>
        <meta charset="UTF-8">
        <title>KRONOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    </head>
    <body class="master-all">
        <div class="container-fluid">
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
                                Cadastro<span class="caret"></span>                  
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sócios</a></li>
                                <li><a href="#">Clientes</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">links Úteis</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Razão<span class="caret"></span>                  
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sócios</a></li>
                                <li><a href="#">Clientes</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">links Úteis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mid">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                </div>
                <footer class="botton"></footer>
            </div>
        </div>
    </body>
</html>

