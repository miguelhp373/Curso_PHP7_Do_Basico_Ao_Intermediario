$("#txtCep").focusout(function () {
    if ($("#txtCep").val().length >= 5) {

        var cep = $("#txtCep").val().replace("-", "");

        var url = "http://correiosapi.apphb.com/cep/" + cep;
        console.log(url);
        $.ajax({
            url: url,
            type: "POST",
            dataType: "JSON",
            data: {},
            success: function (data) {
                console.log(data);
                if (data != null) {
                    $("#txtLogradouro").val(data.tipoDeLogradouro);
                    $("#txtRua").val(data.logradouro);
                    $("#txtBairro").val(data.bairro);
                    $("#txtCidade").val(data.cidade);
                    $("#txtEstado").val(data.estado);
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});
