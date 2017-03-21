<div class="login-frm" >
    <center>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class='panel-title'><strong>ENTRE COM SUA CONTA</strong></h1>
            </div>
            <div class="panel-body" id="panel-login">
                <form method="POST" class="login" action="/login/logar">
                    <div class="input-group">
                        <input type="email" class="form-control" 
                               placeholder="Digite seu Email" name="email"
                               aria-describedby="basic-addon2" required>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" 
                               aria-describedby="basic-addon2" name="pass" 
                               placeholder="Digite sua senha" required/>
                    </div>
                    <a class="text-primary" data-toggle="modal" data-target=".bs-example-modal-lg" href="#">Esqueceu a senha?</a>

                    <br><br>
                    <input type="submit" class="btn btn-lg btn-primary" value="ENTRAR"> 
                </form> 
            </div>

            <!-- Large modal -->
            <div class="modal fade bs-example-modal-lg " style="padding-top: 12%;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" >
                        <div class="panel panel-primary" style="margin-bottom: -10px;">
                            <div class="panel-heading">
                                <h2 class="text-center panel-title">Recuperar Senha</h2>
                            </div>
                            <div class="panel-body" id="panel-login">

                                <form method="POST" action="/login/trocaSenha">
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email" placeholder="Digite seu email" required>
                                    </div>
                                    <hr>
                                    <div id="actions" class="row" >
                                        <div class="col-md-12 text-meddle">
                                            <input type="submit" class="btn btn-primary" value="Enviar">
                                            <a href="/login" class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
