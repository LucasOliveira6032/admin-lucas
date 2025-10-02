/*DataTable Init*/

$(document).ready(function () {
  ("use strict");

  $(".datatable").each(function () {
    var dataTable = $(this).DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      bInfo: true,
      info: false,
      dom: "Blfrtip",
      order: [[0, "desc"]],
      columnDefs: [
        { orderable: false, targets: 0 },
        { orderable: false, targets: -1 },
      ],

      buttons: [
        {
          extend: "excelHtml5",
          className: "botao-datatable",
          text: "EXCEL",
          exportOptions: { columns: ":visible", modifier: { selected: true } },
        },
        { extend: "pdfHtml5", className: "botao-datatable", text: "PDF" },
      ],
      language: {
        lengthMenu: "_MENU_ registros por página",
        zeroRecords: "Nenhum registro encontrado!",
        info: "Exibindo página _PAGE_ de _PAGES_ (Filtrando _TOTAL_ de _MAX_ resultados)",
        infoEmpty: "Nenhum resultado encontrado",
        infoFiltered: "",
        search: "Pesquisa:",
        processing: "Processando resultados...",
        paginate: {
          next: "Próximo",
          previous: "Anterior",
        },
      },

      lengthMenu: [
        [20, 50, 100, -1],
        [20, 50, 100, "TODOS"],
      ],
      pageLength: 100,
      ajax: {
        url: $(this).attr("data-action"),
        data: (data) => {
          var id = $(this).attr("data-id");
          data.id = id;
          return data;
        },
        type: "post",
      },
    });
  });

  $(".datatable-sem-ajax").each(function () {
    var dataTableB = $(this).DataTable({
      responsive: true,
      processing: true,
      bInfo: true,
      info: false,
      dom: "Bfrtip",
      order: [[0, "desc"]],
      columnDefs: [
        { orderable: false, targets: 0 },
        { orderable: false, targets: -1 },
      ],

      buttons: [
        {
          extend: "excelHtml5",
          className: "botao-datatable",
          text: "EXCEL",
          exportOptions: { columns: ":visible", modifier: { selected: true } },
        },
        { extend: "pdfHtml5", className: "botao-datatable", text: "PDF" },
      ],
      language: {
        lengthMenu: "_MENU_ registros por página",
        zeroRecords: "Nenhum registro encontrado!",
        info: "Exibindo página _PAGE_ de _PAGES_ (Filtrando _TOTAL_ de _MAX_ resultados)",
        infoEmpty: "Nenhum resultado encontrado",
        infoFiltered: "",
        search: "Pesquisa:",
        processing: "Processando resultados...",
      },

      lengthMenu: [
        [20, 50, 100, -1],
        [20, 50, 100, "TODOS"],
      ],
      pageLength: 100,
      paging: true,
    });
  });
});
