<div class="container-fluid">
    <h3 class="text-center bg-primary">CADASTRO DE USUARIOS</h3>
    <form action="index.html">
        <!-- area de campos do form -->
        <div class="row">
            <div class="form-group col-md-6">
                <label for="campo1">Nome / Razão Social</label>
                <input type="text" class="form-control" id="nome">
            </div>

            <div class="form-group col-md-6">
                <label for="campo2">Email</label>
                <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group col-md-4">
                <label for="campo3">Endereço</label>
                <input type="text" class="form-control" id="endereco">
            </div>
            <div class="form-group col-md-1">
                <label for="campo4">Número</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="form-group col-md-2">
                <label for="campo5">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>            
            <div class="form-group col-md-2">
                <label for="campo6">UF</label>
                <input type="text" class="form-control" id="bairro">
            </div>
        </div>
        <hr />
        <div id="actions" class="row">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/sisadm" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>