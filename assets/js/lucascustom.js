function criaAlert(tipo, mensagem){
    Messenger({
        extraClasses: 'messenger-fixed messenger-on-right messenger-on-top',
        theme: 'flat'
    }).post({
        message: mensagem,
        type: tipo,
        showCloseButton: true
    });
}

$(document).on("click", ".remove-btn", function (e) {
  var caminho = $(this).attr("data-del");
  var id = $(this).attr("data-id");

  var attr = $(this).attr("data-titulo");
  if (attr == undefined) {
    attr = "Confirma a exclusão?";
  }

  var texto = $(this).attr("data-texto");
  if (texto == undefined) {
    texto = "Atenção: não será possível desfazer a ação!";
  }

  Swal.fire({
    title: attr,
    text: texto,
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#5cb85c",
    confirmButtonText: '<i class="fa fa-thumbs-up"></i> Sim, confirmo!',
    cancelButtonText: "Não, não quero",
    showLoaderOnConfirm: true,
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = caminho + "?id=" + id;
    }
  });
});

$(window).on("load", function () {
    console.log("TESTE");   

    const mensagem = $(".aviso-lucas").attr("data-mensagem");
    const tipo = $(".aviso-lucas").attr("data-tipo");

    console.log(mensagem);
    console.log(tipo);

    if(mensagem !== undefined && tipo !== undefined && mensagem !== '' && tipo !== ''){
        criaAlert(tipo, mensagem);
    }
});
