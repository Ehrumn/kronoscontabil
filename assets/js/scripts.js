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
            alert(xhr);
        }
    });

}

