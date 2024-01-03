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

  const choicesTagProses = new Choices("#tag_proses", {
    removeItemButton: true,
    placeholder: true,
    placeholderValue: "Tag Proses",
  });

  choicesTagProses.setChoices(
    [
      {
        value: "Option 1",
        label: "Option 1",
        selected: true,
        disabled: false,
      },
      {
        value: "Option 2",
        label: "Option 2",
        selected: false,
      },
    ],
    "value",
    "label",
    false
  );
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
});