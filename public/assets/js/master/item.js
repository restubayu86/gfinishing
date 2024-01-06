$(document).ready(function () {
  function setTwoNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(2);
  }

  var frag = $(location).prop("hash").substr(1);

  if (frag == "desain") {
    $("#desain-tab").addClass("active");
    $("#formulasi-tab").removeClass("active");
    $("#kimiabaku-tab").removeClass("active");
    $("#tab-desain").addClass("active show");
    $("#tab-formulasi").removeClass("active show");
    $("#tab-kimiabaku").removeClass("active show");

    $(".last-breadcumb").html("Desain");
  } else if (frag == "formulasi") {
    $("#formulasi-tab").addClass("active");
    $("#desain-tab").removeClass("active");
    $("#kimiabaku-tab").removeClass("active");
    $("#tab-formulasi").addClass("active show");
    $("#tab-desain").removeClass("active show");
    $("#tab-kimiabaku").removeClass("active show");

    $(".last-breadcumb").html("Formulasi");
  } else {
    $("#kimiabaku-tab").addClass("active");
    $("#formulasi-tab").removeClass("active");
    $("#desain-tab").removeClass("active");
    $("#tab-kimiabaku").addClass("active show");
    $("#tab-formulasi").removeClass("active show");
    $("#tab-desain").removeClass("active show");

    $(".last-breadcumb").html("Kimia Baku");
  }

  $('a[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
    // $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();

    var target = $(e.target).attr("href");
    switch (target) {
      case "#tab-desain":
        window.location.hash = "desain";
        $(".last-breadcumb").html("Desain");
        // $(".table-chemicals-all").DataTable().ajax.reload();
        break;
      case "#tab-formulasi":
        window.location.hash = "formulasi";
        $(".last-breadcumb").html("Formulasi");
        // $(".table-chemicals-removed").DataTable().ajax.reload();
        break;
      case "#tab-kimiabaku":
        window.location.hash = "kimia-baku";
        $(".last-breadcumb").html("Kimia Baku");
        // $(".table-variants-all").DataTable().ajax.reload();
        break;
    }
  });

  var tb_kimiabaku = $(".table-item-kimiabaku").DataTable({
    dom:
      "<'row mb-5'<'col-lg-6 col-md-6'B><'col-lg-6 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'i><'col-sm-12 col-md-4'p>>",
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    // fixedHeader: {
    //     header: !0,
    //     headerOffset: $(".header-navbar").outerHeight()
    // },
    search: {
      regex: true,
    },
    processing: true,
    serverSide: true,
    ajax: {
      url: base_url + "/api/master/kimia",
    },
    columns: [
      {
        data: "id",
        class:
          "text-center align-middle white-space-nowrap pe-0 ps-4 btn-reveal-trigger",
        width: "5%",
        render: function (data, type, row) {
          if (row.deleted_at == null) {
            var menu =
              '<div class="font-sans-serif btn-reveal-trigger position-static">' +
              '<button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">' +
              '<span class="fas fa-ellipsis-h fs--2"></span>' +
              "</button>" +
              '<div class="dropdown-menu dropdown-menu-end py-2">' +
              '<a class="dropdown-item" href="javascript:void(0)">View</a>' +
              '<a class="dropdown-item" data-bs-toggle="offcanvas" href="#formulasiOffcanvas" role="button" aria-controls="formulasiOffcanvas">Edit</a>' +
              '<a class="dropdown-item" data-bs-toggle="offcanvas" href="#resepOffcanvas" role="button" aria-controls="resepOffcanvas">Resep</a>' +
              '<div class="dropdown-divider"></div>' +
              '<a class="dropdown-item text-danger" href="javascript:void(0)">Remove</a>' +
              "</div>" +
              "</div>";
          }
          return menu;
        },
      },
      {
        data: "no",
        width: "5%",
      },
      {
        data: "id",
        visible: false,
        width: "10%",
      },
      {
        data: "nama",
        width: "30%",
      },
      {
        data: "deskripsi",
      },
      {
        data: "tag_proses",
        width: "15%",
        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
          if (sData) {
            var arr = sData.split(",");

            var tag = "";
            for (let i = 0; i < arr.length; i++) {
              switch (arr[i]) {
                case "DIP":
                  color = "success";
                  break;

                case "COAT":
                  color = "warning";
                  break;
              }
              tag +=
                '<span class="badge badge-phoenix badge-phoenix-' +
                color +
                '">' +
                arr[i] +
                "</span> ";
            }
            return $(nTd).html(tag);
          }
          return false;
        },
      },
      {
        data: "alur_stok",
        class: "text-center",
        width: "10%",
        render: function (data, type, row) {
          if (data == "Y") {
            var status = '<i class="fa fa-check text-success"></i>';
          } else {
            var status = '<i class="fa fa-times text-danger"></i>';
          }
          return status;
        },
      },
    ],
    buttons: [
      {
        text: "<i class='fa fa-plus'></i> Tambah Kimia",
        className: "btn-sm me-1  btn-phoenix-primary",
        attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#kimiaOffcanvas",
          "aria-controls": "kimiaOffcanvas",
        },
        action: function (e, dt, node, config) {},
      },
      {
        extend: "print",
        text: "",
        tag: "span",
        className: "fa fa-print",
        exportOptions: {
          stripHtml: false,
          // columns: [1, 2, 3]
          columns: [":visible"],
        },
        orientation: "landscape",
        pageSize: "LEGAL",
        autoPrint: false,
        customize: function (win) {
          $(win.document.body).css("font-size", "10pt");

          $(win.document.body)
            .find("table")
            .addClass("compact")
            .css("font-size", "inherit");

          var last = null;
          var current = null;
          var bod = [];

          var css = "@page { size: landscape; }",
            head =
              win.document.head || win.document.getElementsByTagName("head")[0],
            style = win.document.createElement("style");

          style.type = "text/css";
          style.media = "print";

          if (style.styleSheet) {
            style.styleSheet.cssText = css;
          } else {
            style.appendChild(win.document.createTextNode(css));
          }

          head.appendChild(style);
        },
      },
      {
        extend: "colvis",
        text: "",
        tag: "span",
        className: "fa fa-eye-slash",
      },
    ],
  });
  var tb_var_kimia = $(".table-variasi-kimia").DataTable({
    dom:
      "<'row mb-5'<'col-lg-6 col-md-6'B><'col-lg-6 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'i><'col-sm-12 col-md-4'p>>",
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    search: {
      regex: true,
    },
  });

  var tb_formulasi = $(".table-item-formulasi").DataTable({
    dom:
      "<'row mb-5'<'col-lg-6 col-md-6'B><'col-lg-6 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'i><'col-sm-12 col-md-4'p>>",
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    // fixedHeader: {
    //     header: !0,
    //     headerOffset: $(".header-navbar").outerHeight()
    // },
    search: {
      regex: true,
    },
    buttons: [
      {
        text: "<i class='fa fa-plus'></i> Tambah Formulasi",
        className: "btn-sm me-1  btn-phoenix-primary",
        attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#formulasiOffcanvas",
          "aria-controls": "formulasiOffcanvas",
        },
        action: function (e, dt, node, config) {},
      },
      {
        extend: "print",
        text: "",
        tag: "span",
        className: "fa fa-print",
        exportOptions: {
          stripHtml: false,
          // columns: [1, 2, 3]
          columns: [":visible"],
        },
        orientation: "landscape",
        pageSize: "LEGAL",
        autoPrint: false,
        customize: function (win) {
          $(win.document.body).css("font-size", "10pt");

          $(win.document.body)
            .find("table")
            .addClass("compact")
            .css("font-size", "inherit");

          var last = null;
          var current = null;
          var bod = [];

          var css = "@page { size: landscape; }",
            head =
              win.document.head || win.document.getElementsByTagName("head")[0],
            style = win.document.createElement("style");

          style.type = "text/css";
          style.media = "print";

          if (style.styleSheet) {
            style.styleSheet.cssText = css;
          } else {
            style.appendChild(win.document.createTextNode(css));
          }

          head.appendChild(style);
        },
      },
      {
        extend: "colvis",
        text: "",
        tag: "span",
        className: "fa fa-eye-slash",
      },
    ],
  });
  var tb_desain = $(".table-desain").DataTable({
    dom:
      "<'row mb-5'<'col-lg-6 col-md-6'B><'col-lg-6 col-md-6'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'i><'col-sm-12 col-md-4'p>>",
    lengthMenu: [
      [10, 25, 50, -1],
      [10, 25, 50, "All"],
    ],
    // fixedHeader: {
    //     header: !0,
    //     headerOffset: $(".header-navbar").outerHeight()
    // },
    search: {
      regex: true,
    },
    buttons: [
      {
        text: "<i class='fa fa-plus'></i> Tambah Desain",
        className: "btn-sm me-1  btn-phoenix-primary",
        attr: {
          "data-bs-toggle": "offcanvas",
          "data-bs-target": "#desainOffcanvas",
          "aria-controls": "desainOffcanvas",
        },
        action: function (e, dt, node, config) {},
      },
      {
        extend: "print",
        text: "",
        tag: "span",
        className: "fa fa-print",
        exportOptions: {
          stripHtml: false,
          // columns: [1, 2, 3]
          columns: [":visible"],
        },
        orientation: "landscape",
        pageSize: "LEGAL",
        autoPrint: false,
        customize: function (win) {
          $(win.document.body).css("font-size", "10pt");

          $(win.document.body)
            .find("table")
            .addClass("compact")
            .css("font-size", "inherit");

          var last = null;
          var current = null;
          var bod = [];

          var css = "@page { size: landscape; }",
            head =
              win.document.head || win.document.getElementsByTagName("head")[0],
            style = win.document.createElement("style");

          style.type = "text/css";
          style.media = "print";

          if (style.styleSheet) {
            style.styleSheet.cssText = css;
          } else {
            style.appendChild(win.document.createTextNode(css));
          }

          head.appendChild(style);
        },
      },
      {
        extend: "colvis",
        text: "",
        tag: "span",
        className: "fa fa-eye-slash",
      },
    ],
  });

  const choicesTagProses = new Choices("#tag_proses", {
    removeItemButton: true,
    placeholder: true,
    placeholderValue: "Tag Proses",
  });

  function formReset() {
    var form = $("#form-kimiabaku");
    form.find(":input").val(null);
    choicesTagProses.removeActiveItems();
    form.find("#alur_stok").prop("checked", false);
  }

  $("#kimiaOffcanvas").on("hidden.bs.offcanvas", function () {
    formReset();
  });
  $("#batal").click(function () {
    $("#kimiaOffcanvas").offcanvas("hide");
  });

  //SUBMIT
  $("#form-kimiabaku").on("submit", function (e) {
    e.preventDefault();
    var form = $(this);
    var btn_text = form.find(":submit").text();
    var id = $(form).find("#id").val();
    var data = form.serialize();

    switch (btn_text) {
      case "Update":
        var api_url = base_url + "/api/master/kimia/" + id;
        var typeAjax = "PUT";
        break;

      default:
        var api_url = base_url + "/api/master/kimia";
        var typeAjax = "POST";
        break;
    }

    $.ajax({
      url: api_url,
      type: typeAjax,
      dataType: "JSON",
      data: data,
      success: function (data, status) {
        $(form).find(".invalid-feedback").removeClass("invalid-feedback");
        if (data.errors === null) {
          $(form)[0].reset();
          tb_kimiabaku.ajax.reload(null, false);
          $(form).find("#id").val(data.new_id);
          $(form).find(":submit").text("Save");
          $(form).find("#nama").focus();
          // toastr["success"](data.messages.success, status);
        }
      },
      error: function (xhr, status) {
        $(form).find(".invalid-feedback").removeClass("invalid-feedback");
        $.each(xhr.responseJSON.messages, function (prefix, val) {
          $(form)
            .find("#" + prefix)
            .addClass("is-invalid");
          $(form)
            .find(".inv-" + prefix + "")
            .text(val);
        });
      },
    });
  });
});
