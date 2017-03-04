<html>
    <head>
        <meta charset="UTF-8">
        <title>KRONOS</title>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </head>
    <body>
        <img class="back" src="assets/images/icone_1000x1000.png">
        <div class="all">
            <div class="top">
                <div class="top-top">
                    <div class="topo-logo"></div>
                    <div clas="logged"></div>
                </div>
                <div class="menus">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CADASTROS
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>

                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>

                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
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

