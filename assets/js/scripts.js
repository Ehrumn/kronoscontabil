function carregaUF() {
    $.ajax({
        url: '/ajax/listauf',
        dataType: 'json',
        
        success: function (json) {
            
            resetUF();
            
            if (json.uf.length > 0) {
                for (var i in json.uf) {
                    $('#uf').append("<option class='estados' value = "+ json.uf[i].uf +">" + json.uf[i].uf + "</option>");
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
    $('.cidades').remove();
}


function carregaCidades(obj){
    var uf = $(obj);
    var urlstr = '/ajax/listaCidades/'+uf.val();
    
    $.ajax({
        url: urlstr,
        dataType: 'json',
        
        success: function (json) {
            
            resetCidades();
            
            if (json.cidades.length > 0) {
                for (var i in json.cidades) {
                    $('#cidade').append("<option class='cidades' value = "+ json.cidades[i].cidade +">" + json.cidades[i].cidade + "</option>");
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
        }
    });
    
}