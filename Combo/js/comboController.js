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

    $.getJSON("json/comunidad.json", function (data) {
        comunidades = data;
    });

    $.getJSON("json/provincias.json", function (data) {
        provincias = data;

    });

    $.getJSON("json/municipio.json", function (data) {
        municipios = data;
        setTimeout(function () {
            if (municipios !== undefined) {
                loadComunidades();
            }
        }, 2000);
    });

    $("#comunidad").change(function () { 
        loadProvincias($("#comunidad").val());
    });

    $("#provincia").change(function () {
        loadMunicipios($("#provincia").val());
    });
});


var loadComunidades = function () {
    $("#comunidad").empty();
    $("#comunidad").append('<option class="option" value="" selected="selected">Comunidad Autonoma</option>');
    $.each(comunidades, function (i, valor) {
        $("#comunidad").append("<option class='option' value='" + valor.IDCCAA + "'>" + valor.CCAA + "</option>");
    });
};

var loadProvincias = function (comunidadID) {
    var provinciasComunidad = searchIntoJson(provincias, "IDCCAA", comunidadID);
    $("#provincia").empty();
    $("#provincia").append('<option class="option" value="" selected="selected">Provincia</option>');
    $.each(provinciasComunidad, function (i, valor) {
        $("#provincia").append('<option class="option" value="' + valor.IDPovincia + '">' + valor.Provincia + '</option>');
    });
};

var loadMunicipios = function (departamentoId) {
    var ciudadesDepto = searchIntoJson(municipios, "IDProvincia", departamentoId);
    $("#municipio").empty();
    $("#municipio").append('<option class="option" value="" selected="selected">Municipio</option>');
    $.each(ciudadesDepto, function (i, valor) {
        $("#municipio").append('<option class="option" value="' + valor.IDMunicipio + '">' + valor.Municipio + '</option>');
    });
};