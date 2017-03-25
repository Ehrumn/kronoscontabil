function carregaUF() {
    $.ajax({
        url: '/ajax/listauf',
        dataType: 'json',

        success: function (json) {

            resetUF();
            $('#uf').append("<option class='estados' value = '0'>Selecione o estado</option>");
            if (json.uf.length > 0) {
                for (var i in json.uf) {
                    $('#uf').append("<option class='estados' value = " + json.uf[i].uf + ">" + json.uf[i].uf + "</option>");
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    });
}
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

function carregaCidades(obj) {
    var uf = $(obj);
    var urlstr = '/ajax/listaCidades/' + uf.val();

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
        document.getElementById('cpf').style.display = 'inline';
        document.getElementById('cnpj').style.display = 'none';
    } else if (pessoa == 'PESSOA JURÍDICA') {
        document.getElementById('cnpj').style.display = 'inline';
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
//Fim Mascara Input-------------------------------------