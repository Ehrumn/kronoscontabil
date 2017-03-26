<div class="container-fluid">
    <h3 class="text-center bg-primary">CADASTRO DE USUARIOS</h3>
    <form method="POST" action="/cadUsuario/salvarUsuario">
        <!-- area de campos do form -->
        <div class="row">
            <div class="form-group col-md-4">
                <label for="campo1">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="form-group col-md-4">
                <label for="campo2">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-2">
                <label for="campo3">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="form-group col-md-2">
                <label for="campo4">Confirmar Senha</label>
                <input type="password" class="form-control" name="conf_senha">
            </div>
            <div class="form-group col-md-2">
                <label for="campo5">Tipo de Usuario</label>
                <select class="form-control" name="tipo">
                    <option value=""></option>
                    <option value="ADMIN">Administrador</option>
                    <option value="CLIENTE">Cliente</option>
                </select>
            </div>            
        </div>
        <hr />
        <div id="actions" class="row">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="javascript:window.history.go(-1);" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>