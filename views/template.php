<html>
    <head>
        <title>KRONOS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link type="text/css" rel="stylesheet" href="assets/css/template.css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </head>
    <body class="master-all" id="bodyTemplate" onload="carregaUF()">
        <div class="container-fluid">
            <img src="assets/images/icone_1000x1000.png" class="back-img">
            <div class="top">
                <div class="row">
                    <div class="form-group col-md-3">
                        <img src="assets/images/logo_1000x258.png" class="img-responsive"> 
                    </div>
                    <div class="form-group col-md-3">
                    </div>
                    <div class="form-group col-md-4" style='margin-top: 5px'>
                        <?php
                        if (isset($_SESSION['usrName']) && !empty($_SESSION['usrName'])) {
                            echo "<h5 class='text-primary text-right'>Seja bem vindo: ";
                            echo $_SESSION['usrName'];
                            echo "</h5>";
                            ?>
                        </div>
                        <div class="form-group col-md-2 ">
                            <a href="/login/logoff" style="text-decoration: none; color:#FFF;"><button  class="btn btn-primary btn-sm" style="margin: 10px auto;">Logout</button></a> 
                        <?php } ?> 
                    </div>
                </div>
            </div>
            <div clas="mid">
                <div class="row">
                    <div class="form-group col-md-12">
                        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

