<div class="container-fluid">
    <h3 class="text-center bg-primary">CADASTRO DE CLIENTES</h3>
    <form action="index.html" neme="clientes">
        <!-- area de campos do form -->
        <div class="row">
            <!--linha01-->
            <div class="form-group col-md-6">
                <label for="nome">Nome / Razão Social</label>
                <input type="text" class="form-control" id="nome">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control " id="email">
            </div>

            <!--linha02-->
            <div class="form-group col-md-2">
                <label for="tipoPessoa">Tipo Pessoa</label>
                <select class="btn btn-primary" id="tipoPessoa">
                    <option>Pessoa Física</option>
                    <option>Pessoa Jurídica</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" name="cnpj" onKeyPress="MascaraCNPJ(clientes.cnpj);" 
                       maxlength="18" onBlur="ValidarCNPJ(clientes.cnpj);">
            </div>
            <div class="form-group col-md-3">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj">
            </div>
            <br>
            <!--linha03-->
            <div class="form-group col-md-5">
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
                <a href="#" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>