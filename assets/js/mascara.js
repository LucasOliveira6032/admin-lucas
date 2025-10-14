$(".cpf").mask("999.999.999-99");
$(".cnpj").mask("00.000.000/0000-00");
$(".whats").mask("(99) 99999-9999");
$(".telefone").mask("(99) 9999-9999");
$(".cep").mask("99999-999");
$(".chamado").mask("99999-999999");

function maskCnpjCpf(selector) {
  var CpfCnpjMaskBehavior = function (val) {
      return val.replace(/\D/g, "").length <= 11
        ? "000.000.000-009"
        : "00.000.000/0000-00";
    },
    cpfCnpjOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
      },
    };
  $(function () {
    $(selector).bind("paste", function (e) {
      $(this).unmask();
    });
    $(selector).bind("input", function (e) {
      $(selector).mask(CpfCnpjMaskBehavior, cpfCnpjOptions);
    });
  });
}

$(".money").maskMoney({
  symbol: "", // Simbolo
  decimal: ".", // Separador do decimal
  precision: 2, // PrecisÃ£o
  thousands: "", // Separador para os milhares
  allowZero: true, // Permite que o digito 0 seja o primeiro caractere
  showSymbol: false, // Exibe/Oculta o sÃ­mbolo
});

$(".horimetro").maskMoney({
  symbol: "", // Simbolo
  decimal: ".", // Separador do decimal
  precision: 1, // PrecisÃ£o
  thousands: "", // Separador para os milhares
  allowZero: true, // Permite que o digito 0 seja o primeiro caractere
  showSymbol: false, // Exibe/Oculta o sÃ­mbolo
});

maskCnpjCpf(".cpf_cnpj");
