<html>
    <head>
        <meta charset="UTF-8">
        <title>KRONOS</title>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

    </head>
    <body>
        <img class="back" src="assets/images/icone_1000x1000.png">
        <div class="all">
            <div class="top">
                <div class="dropdown">
                    <ul class="dropdown-menu" role="menu">
                        
                    </ul>
                </div>
            </div>
            <div class="mid">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
            <footer class="botton"></footer>
        </div>
    </body>
</html>

