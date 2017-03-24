function carregaUF() {
    $.ajax({
        url: '/ajax/listauf',
        dataType: 'json',
        success: function (json) {
            
            resetUF();
            var sel = document.getElementById("uf");
            
            if (json.uf.length > 0) {
                for (var i in json.uf) {
                    $('#uf').innerHTML = "<option class='estados'>" + json.uf[i].sigla + "</option>";
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