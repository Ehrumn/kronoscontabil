<div class="container-fluid">
    <h3 class="text-center bg-primary">CADASTRO DE CLIENTES</h3>
    <form action="index.html" neme="clientes">
        <!-- area de campos do form -->
        <div class="row">
            <!--linha01-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-5">
                    <label for="nome">Nome / Razão Social</label>
                    <input type="text" class="form-control" id="nome">
                </div>

                <div class="form-group col-sm-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control " id="email">
                </div>

                <div class="form-group col-sm-1">
                    <label for="ativo">Ativo?</label>                    
                    <Select class="btn btn-primary form-control" id="ativo">
                        <option>S</option>
                        <option>N</option>
                    </select>
                </div>
            </div>

            <!--linha02-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-2">
                    <label for="tipoPessoa">Tipo Pessoa</label>
                    <select class="btn btn-primary form-control" id="tipoPessoa">
                        <option>Pessoa Física</option>
                        <option>Pessoa Jurídica</option>
                    </select>
                </div>
                <div class="form-group col-sm-3">
                    <label for="cpf">CPF</label>
                    <input class="form-control" type="text" name="cnpj" onKeyPress="MascaraCNPJ(clientes.cnpj);" 
                           maxlength="18" onBlur="ValidarCNPJ(clientes.cnpj);">
                </div>
                <div class="form-group col-sm-3">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj">
                </div>
            </div>
            <br>
            <!--linha03-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-5">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco">
                </div>
                <div class="form-group col-sm-1">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" id="numero">
                </div>
                <div class="form-group col-sm-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento">
                </div>  
                <div class="form-group col-sm-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro">
                </div>  
            </div> 
            <!--linha04-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                    <label for="uf">Estado</label>
                    <Select class="btn btn-primary form-control" id="uf" value='PR'>
                        <option>PR</option>
                        <option>SC</option>
                    </select>
                </div>
                <div class="form-group col-sm-3">
                    <label for="cidade">Cidade</label>
                    <Select class="btn btn-primary form-control" id="cidade" name="cidade" value='PR'>
                        <option>CURITIBA</option>
                        <option>SÃO JOSÉ DOS PINHAIS</option>
                    </select>
                </div>
            </div> 
            <!--linha05 contatos-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                    <label for="cel">Celular</label>
                    <input type="text" class="form-control" id="cel">
                </div>
                <div class="form-group col-sm-3">
                    <label for="fone1">Fone Principal</label>
                    <input type="text" class="form-control" id="fone1">
                </div>
                <div class="form-group col-sm-3">
                    <label for="fone2">Fone Opicional</label>
                    <input type="text" class="form-control" id="fone2">
                </div>  
            </div> 
        </div>
        <hr />
        <div id="actions" class="row">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="#" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>