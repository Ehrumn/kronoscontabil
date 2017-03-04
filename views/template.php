<html>
    <head>
        <meta charset="UTF-8">
        <title>KRONOS</title>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <!--link href="assets/css/bootstrap.css" rel="stylesheet" media="screen"/-->
    </head>
    <body>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <img class="back-img" src="assets/images/icone_1000x1000.png">
        <div class="all">
            <div class="top">
                <div class="top-top">
                    <div class="top-top-logo"></div>
                    <div class="top-top-logged"></div>
                </div>
                <div class="top-menu">
                </div>
            </div>
            <div class="mid">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
            <footer class="botton"></footer>
        </div>
    </body>
</html>

