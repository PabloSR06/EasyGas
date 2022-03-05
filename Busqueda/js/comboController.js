var comunidades;
var provincias;
var municipios;

var searchIntoJson = function (obj, column, value) {
    var results = [];
    var valueField;
    var searchField = column;
    for (var i = 0; i < obj.length; i++) {
        valueField = obj[i][searchField].toString();
        if (valueField === value) {
            results.push(obj[i]);
        }
    }
    return results;
};

$(document).ready(function () {

    loadProvincias();
    loadMunicipios();

    $.getJSON("json/provincias.json", function (data) {
        provincias = data;
        setTimeout(function () {
            if (provincias !== undefined) {
                loadProvincias();
            }
        }, 2000);
    });

    $.getJSON("json/municipio.json", function (data) {
        municipios = data;
        setTimeout(function () {
            if (municipios !== undefined) {
                loadMunicipios();
            }
        }, 2000);
    });


});



var loadProvincias = function () {
    $("#provincia").empty();
    $("#provincia").append('<option class="option" value="" selected="selected">Provincia</option>');
    $.each(provincias, function (i, valor) {
        $("#provincia").append('<option class="option" value="' + valor.IDPovincia + '">' + valor.Provincia + '</option>');
    });
};

var loadMunicipios = function () {
    $("#municipio").empty();
    $("#municipio").append('<option class="option" value="" selected="selected">Municipio</option>');
    $.each(municipios, function (i, valor) {
        $("#municipio").append('<option class="option" value="' + valor.IDMunicipio + '">' + valor.Municipio + '</option>');
    });
};