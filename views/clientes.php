<div class="container-fluid" >
    <script>carregaUF()</script>
    <h3 class="text-center bg-primary">CADASTRO DE CLIENTES</h3>
    <form action="index.html" neme="clientes" >
        <!-- area de campos do form -->
        <div class="row">
            <!--linha01-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-5">
                    <label for="nome">Nome / Razão Social</label>
                    <input type="text" class="form-control text-uppercase" id="nome" required>
                </div>

                <div class="form-group col-sm-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control text-lowercase" id="email" required>
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
                    <select class="btn btn-primary form-control" id="tipoPessoa" onchange="alteraPessoa(this)" required>      
                        <option></option>
                        <option>PESSOA FÍSICA</option>
                        <option>PESSOA JURÍDICA</option>    
                    </select>
                </div>
                <div class="form-group col-sm-3" id="cnpj" style="display:none;">
                    <label for="cnpj" id="lbl-cnpj">CNPJ</label>
                    <input class="form-control" id="inp-cnpj" type="text" name="cnpj" onkeyup="maskIt(this, event, '##.###.###/####-##')">
                </div>
                <div class="form-group col-sm-3" id="cpf" style="display:none;">
                    <label for="cpf" id="lbl-cpf" >CPF</label>
                    <input class="form-control" id="inp-cpf" type="text" name="cpf" onkeyup="maskIt(this, event, '###.###.###-##')">
                </div>
            </div>
            <br>
            <!--linha03-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-2">
                    <label for="cep" id="lbl-cep">CEP</label>
                    <input class="form-control" id="inp-cep" type="text" name="cep" onkeyup="maskIt(this, event, '##.###-###')" onblur="carregaDadosCEP(this.value)">
                </div>
                <div class="form-group col-sm-3">
                    <label for="uf">Estado</label>
                    <select class="btn-primary form-control text-uppercase" id="uf" onchange="carregaCidades(this.value)">
                        <option class='estados' value = '0'>Selecione o estado</option>
                    </select>
                </div>
                <div class="form-group col-sm-3">
                    <label for="cidade">Cidade</label>
                    <Select class="btn-primary form-control text-uppercase" id="cidade">
                        <option class='cities' value = '0'>Selecione a cidade</option>
                    </select>
                </div>
            </div> 
            <!--linha04-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-5">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control text-uppercase" id="endereco">
                </div>
                <div class="form-group col-sm-1">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" id="numero">
                </div>
                <div class="form-group col-sm-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control text-uppercase" id="complemento">
                </div>  
                <div class="form-group col-sm-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control text-uppercase" id="bairro">
                </div>  
            </div> 
            <!--linha05 contatos-->
            <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                    <label for="cel">Celular</label>
                    <input type="text" class="form-control" id="cel" onkeyup="maskIt(this, event, '(##) ####-#####')">
                </div>
                <div class="form-group col-sm-3">
                    <label for="fone1">Fone Principal</label>
                    <input type="text" class="form-control" id="fone1" onkeyup="maskIt(this, event, '(##) ####-#####')">
                </div>
                <div class="form-group col-sm-3">
                    <label for="fone2">Fone Opcional</label>
                    <input type="text" class="form-control" id="fone2" onkeyup="maskIt(this, event, '(##) ####-#####')">
                </div>  
            </div> 
        </div>
        <hr />
        <div id="actions" class="row">
            <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="javascript:window.history.go(-1);" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form>
</div>
