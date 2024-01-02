$(document).ready(function () {
  var frag = $(location).prop("hash").substr(1);

  if (frag == "period") {
    $("#period-tab").addClass("active");
    $("#proses-tab").removeClass("active");
    $("#segmentasi-tab").removeClass("active");
    $("#tab-period").addClass("active show");
    $("#tab-proses").removeClass("active show");
    $("#tab-segmentasi").removeClass("active show");

    $(".last-breadcumb").html("Period");
  } else if (frag == "proses") {
    $("#proses-tab").addClass("active");
    $("#period-tab").removeClass("active");
    $("#segmentasi-tab").removeClass("active");
    $("#tab-proses").addClass("active show");
    $("#tab-period").removeClass("active show");
    $("#tab-segmentasi").removeClass("active show");

    $(".last-breadcumb").html("Proses");
  } else {
    $("#segmentasi-tab").addClass("active");
    $("#proses-tab").removeClass("active");
    $("#period-tab").removeClass("active");
    $("#tab-segmentasi").addClass("active show");
    $("#tab-proses").removeClass("active show");
    $("#tab-period").removeClass("active show");

    $(".last-breadcumb").html("Segmentasi");
  }

  $('a[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
    // $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();

    var target = $(e.target).attr("href");
    switch (target) {
      case "#tab-period":
        window.location.hash = "period";
        $(".last-breadcumb").html("Period");
        // $(".table-chemicals-all").DataTable().ajax.reload();
        break;
      case "#tab-proses":
        window.location.hash = "proses";
        $(".last-breadcumb").html("Proses");
        // $(".table-chemicals-removed").DataTable().ajax.reload();
        break;
      case "#tab-segmentasi":
        window.location.hash = "segmentasi";
        $(".last-breadcumb").html("Segmentasi");
        // $(".table-variants-all").DataTable().ajax.reload();
        break;
    }
  });
});
