
function resetUF() {
    $('.estados').remove();
}

function resetCidades() {
    $('.cities').remove();
}

function IsEmail(email) {
    var exclude = /[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    var check = /@[w-]+./;
    var checkend = /.[a-zA-Z]{2,3}$/;
    if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
        return false;
    } else {
        return true;
    }
}

function carregaCidades(uf) {
    var urlstr = '/ajax/listaCidades/' + uf;

    $.ajax({
        url: urlstr,
        dataType: 'json',
        success: function (json) {

            resetCidades();

            $('#cidade').append("<option class='cities' value = '0'>Selecione a cidade</option>");
            if (json.cidades.length > 0) {
                for (var i in json.cidades) {
                    $('#cidade').append("<option class='cities' value = " + json.cidades[i].cidade + ">" + json.cidades[i].cidade + "</option>");
                }
            }
        },
        error: function (xhr, er) {
            //alert(xhr);
        }
    });
}

function alteraPessoa(obj) {
    var pessoa = $(obj).val();

    if (pessoa == 'PESSOA FÍSICA') {
        document.getElementById('cpf').style.display = 'block';
        document.getElementById('cnpj').style.display = 'none';
    } else if (pessoa == 'PESSOA JURÍDICA') {
        document.getElementById('cnpj').style.display = 'block';
        document.getElementById('cpf').style.display = 'none';
    } else {
        document.getElementById('cnpj').style.display = 'none';
        document.getElementById('cpf').style.display = 'none';
    }
}

// Mascara Input ---------------------------------------------------- (Fernando 24/03/17 - fer.oliveira88@gmail.com)
function maskIt(w, e, m, r, a) {

// Cancela se o evento for Backspace

    if (!e)
        var e = window.event

    if (e.keyCode)
        code = e.keyCode;

    else if (e.which)
        code = e.which;

// Variáveis da função

    var txt = (!r) ? w.value.replace(/[^\d]+/gi, '') : w.value.replace(/[^\d]+/gi, '').reverse();

    var mask = (!r) ? m : m.reverse();

    var pre = (a) ? a.pre : "";

    var pos = (a) ? a.pos : "";

    var ret = "";


    if (code == 9 || code == 8 || txt.length == mask.replace(/[^#]+/g, '').length)
        return false;

// Loop na máscara para aplicar os caracteres

    for (var x = 0, y = 0, z = mask.length; x < z && y < txt.length; ) {

        if (mask.charAt(x) != '#') {

            ret += mask.charAt(x);
            x++;

        } else {

            ret += txt.charAt(y);
            y++;
            x++;

        }

    }

// Retorno da função

    ret = (!r) ? ret : ret.reverse()

    w.value = pre + ret + pos;

}

// Novo método para o objeto 'String'

String.prototype.reverse = function () {

    return this.split('').reverse().join('');

};
// Fim Mascara Input-------------------------------------


function carregaDadosCEP(cep) {
    cep = cep.replace(/\.|\-/g, '');
    var strUrl = 'https://viacep.com.br/ws/' + cep + '/json/';
    $.ajax({

        url: strUrl,
        dataType: 'json',
        success: function (json) {
            resetCidades();
            resetUF();
            $.ajax({
                url: '/ajax/getEstado/' + json.uf,
                dataType: 'json',
                success: function (est) {
                    $('#uf').append("<option class='estados' value = '" + json.uf + "'>" + est.estado + "</option>");
                }
            });
            document.getElementById('endereco').value = json.logradouro;
            document.getElementById('bairro').value = json.bairro;

            $('#cidade').append("<option class='cities' value = '" + json.localidade + "'>" + json.localidade + "</option>");
        },
        error: function (xhr, er) {
        }
    });
}
function carregaUF() {
    $.ajax({
        url: '/ajax/listaUF',
        cache: false,
        dataType: 'json',
        success: function (json) {
            resetUF();
            $('#uf').append("<option class='estados' value = ''>SELECIONE O ESTADO</option>");
            for (var i in json.uf) {
                $('#uf').append("<option class='estados' value = '" + json.uf[i].uf + "'>" + json.uf[i].estado + "</option>");
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
        }
    });

}

function carregaClientes() {
    $.ajax({
        url: 'listaClientes/listarClientes',
        cache: false,
        dataType: 'json',
        success: function (json) {
            for (var i in json.clientes) {
                $('#corpo-tabela').append("<tr><td>" + json.clientes[i].id + "</td><td>" + json.clientes[i].nome + 
                        "</td><td>" + json.clientes[i].email + "</td><td>" + json.clientes[i].cnpj + 
                        "</td><td>" + json.clientes[i].cpf + "</td><td>" + json.clientes[i].cel + "</td><td>"+json.clientes[i].fone1+
                        "</td><td>"+json.clientes[i].fone2+"</td><td>"+json.clientes[i].endereco+"</td><td>"+json.clientes[i].numero+
                        "</td><td>"+json.clientes[i].complemento+"</td><td>"+json.clientes[i].bairro+"</td><td>"+json.clientes[i].cidade+
                        "</td><td>"+json.clientes[i].uf+"</td><td>"+json.clientes[i].responsavel+"</td><td>"+json.clientes[i].tem_honorario+
                        "</td><td>"+json.clientes[i].val_honorario+"</td><td>"+json.clientes[i].ativo+"</td></tr>");
            }
        }
    });
}