/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/tagging_virtual.js ***!
  \*****************************************/
$(document).ready(function () {
  table_surat();

  function table_surat() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var table_surat = $('#table-list').dataTable({
      "processing": true,
      "serverSide": true,
      "order": [[3, "desc"]],
      "ajax": {
        "url": "filter_list",
        "dataType": "json",
        "type": "POST",
        "data": {
          _token: CSRF_TOKEN
        }
      },
      "columns": [{
        "data": "no"
      }, {
        "data": "no_tagging"
      }, {
        "data": "keterangan_kks"
      }, {
        "data": "created_at"
      }, {
        "data": "status"
      }, {
        "data": "Action"
      }]
    });
  }

  window.delete_surat = function (id) {
    var no_tagging = $('#remove' + id).attr('data-tagging');
    var id = $('#remove' + id).attr('data-id');
    swal({
      title: "Are you sure delete " + no_tagging + "?",
      text: "Once deleted, you will not be able to recover this data !",
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then(function (willDelete) {
      if (willDelete) {
        swal("Poof! PPWI request has been deleted!", {
          icon: "success"
        }).then(function () {
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
            url: "delete_surat",
            type: "get",
            dataType: "json",
            data: {
              id: id,
              _token: CSRF_TOKEN
            },
            success: function success(dataResult) {
              // $('#tr-'+id).hide('slow');
              $('#message').addClass('alert-success');
              $('#message').html('Delete ' + no_tagging + ' Success ');
              $('#message').show('slow');
              $('#table-list').DataTable().destroy();
              table_surat();
            }
          });
        });
      }
    });
  };

  window.view = function (id) {
    $("#surat_view")[0].reset();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url: "get_surat",
      type: "get",
      dataType: "json",
      data: {
        id: id,
        _token: CSRF_TOKEN
      },
      success: function success(dataResult) {
        $('#no_tagging1').val(dataResult['surat'][0].no_tagging.charAt(0));
        $('#no_tagging2').val(dataResult['surat'][0].no_tagging.charAt(1));
        $('#no_tagging3').val(dataResult['surat'][0].no_tagging.charAt(2));
        $('#no_tagging4').val(dataResult['surat'][0].no_tagging.charAt(4));
        $('#no_tagging5').val(dataResult['surat'][0].no_tagging.charAt(5));
        $('#no_tagging6').val(dataResult['surat'][0].no_tagging.charAt(6));
        $('#no_tagging7').val(dataResult['surat'][0].no_tagging.charAt(8));
        $('#no_tagging8').val(dataResult['surat'][0].no_tagging.charAt(9));
        $('#no_wo').val(dataResult['surat'][0].no_wo);
        $('#no_kks').val(dataResult['surat'][0].no_kks);
        $('#keterangan_kks').val(dataResult['surat'][0].keterangan_kks);
        $("#ijinKerja_" + dataResult['surat'][0].surat_ijin_kerja).prop("checked", true);
        $("#tegangan_" + dataResult['surat'][0].tegangan).prop("checked", true);
        $("#grounding_" + dataResult['surat'][0].grounding).prop("checked", true);
        $("#pengaman_" + dataResult['surat'][0].pengaman).prop("checked", true);
        $('#jumlah_pekerja').html(dataResult['surat'][0].jml_pekerja + " orang");

        try {
          $('#tgl_diajukan').val(dataResult['surat'][0].date.substring(0, 10));
          $('#jam_diajukan').val(dataResult['surat'][0].date.substring(11, 16));
          $('#by_diajukan').val(dataResult['surat'][0].created_by);
          $('#tgl_dilaksanakan').val(dataResult['surat'][1].date.substring(0, 10));
          $('#jam_dilaksanakan').val(dataResult['surat'][1].date.substring(11, 16));
          $('#by_dilaksanakan').val(dataResult['surat'][1].created_by);
          $('#tgl_rencana_selesai').val(dataResult['surat'][2].date.substring(0, 10));
          $('#jam_rencana_selesai').val(dataResult['surat'][2].date.substring(11, 16));
          $('#by_rencana_selesai').val(dataResult['surat'][2].created_by);
          $('#tgl_rev1_rencana_selesai').val(dataResult['surat'][3].date.substring(0, 10));
          $('#jam_rev1_rencana_selesai').val(dataResult['surat'][3].date.substring(11, 16));
          $('#by_rev1_rencana_selesai').val(dataResult['surat'][3].created_by);
          $('#tgl_rev2_rencana_selesai').val(dataResult['surat'][4].date.substring(0, 10));
          $('#jam_rev2_rencana_selesai').val(dataResult['surat'][4].date.substring(11, 16));
          $('#by_rev2_rencana_selesai').val(dataResult['surat'][4].created_by);
        } catch (e) {
          console.log('no data rev1 dan rev2');
        }

        for (i = 1; i <= dataResult['peralatan_surat'].length; i++) {
          $('#peralatan_' + i).val(dataResult['peralatan_surat'][i - 1].name);
          $('#kks_number_' + i).val(dataResult['peralatan_surat'][i - 1].kks_number);
          $('#status_' + i).val(dataResult['peralatan_surat'][i - 1].status);
        }

        $('#id_print').val(dataResult['surat'][0].id_surat);
        $("#realease").attr('onclick', 'realesed_form(' + dataResult['surat'][0].id_surat + ')');

        if (dataResult['surat'][0].status == 'Selesai') {
          $("#realease").removeClass();
          $("#realease").html('View Released');
          $("#realease").addClass('btn btn-info');
        } else {
          $("#realease").removeClass();
          $("#realease").html('Release');
          $("#realease").addClass('btn btn-success');
        }
      }
    });
  };

  window.realesed_form = function (id) {
    $("#surat_release")[0].reset();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url: "get_surat",
      type: "get",
      dataType: "json",
      data: {
        id: id,
        _token: CSRF_TOKEN
      },
      success: function success(dataResult) {
        $('#no_tagging_realesed1').val(dataResult['surat'][0].no_tagging.charAt(0));
        $('#no_tagging_realesed2').val(dataResult['surat'][0].no_tagging.charAt(1));
        $('#no_tagging_realesed3').val(dataResult['surat'][0].no_tagging.charAt(2));
        $('#no_tagging_realesed4').val(dataResult['surat'][0].no_tagging.charAt(4));
        $('#no_tagging_realesed5').val(dataResult['surat'][0].no_tagging.charAt(5));
        $('#no_tagging_realesed6').val(dataResult['surat'][0].no_tagging.charAt(6));
        $('#no_tagging_realesed7').val(dataResult['surat'][0].no_tagging.charAt(8));
        $('#no_tagging_realesed8').val(dataResult['surat'][0].no_tagging.charAt(9));
        $('#no_wo_realesed').val(dataResult['surat'][0].no_wo);
        $('#no_kks_released').val(dataResult['surat'][0].no_kks);
        $('#keterangan_kks_released').val(dataResult['surat'][0].keterangan_kks);
        $("#siap_dioperasikan_" + dataResult['surat'][0].siap_dioperasikan).prop("checked", true);
        $("#dipindahkan_" + dataResult['surat'][0].dipindahkan).prop("checked", true);
        $("#grounding_released_" + dataResult['surat'][0].grounding).prop("checked", true);
        $("#bersih_" + dataResult['surat'][0].bersih).prop("checked", true);
        $('#jumlah_pekerja_released').html(dataResult['surat'][0].jml_pekerja + " orang");

        try {
          $('#tgl_diajukan_released').val(dataResult['surat'][0].date.substring(0, 10));
          $('#jam_diajukan_released').val(dataResult['surat'][0].date.substring(11, 16));
          $('#by_diajukan_released').val(dataResult['surat'][0].created_by);
          $('#tgl_dilaksanakan_released').val(dataResult['surat'][1].date.substring(0, 10));
          $('#jam_dilaksanakan_released').val(dataResult['surat'][1].date.substring(11, 16));
          $('#by_dilaksanakan_released').val(dataResult['surat'][1].created_by);
          $('#tgl_rencana_selesai_released').val(dataResult['surat'][2].date.substring(0, 10));
          $('#jam_rencana_selesai_released').val(dataResult['surat'][2].date.substring(11, 16));
          $('#by_rencana_selesai_released').val(dataResult['surat'][2].created_by);
          $('#tgl_rev1_rencana_selesai_released').val(dataResult['surat'][3].date.substring(0, 10));
          $('#jam_rev1_rencana_selesai_released').val(dataResult['surat'][3].date.substring(11, 16));
          $('#by_rev1_rencana_selesai_released').val(dataResult['surat'][3].created_by);
          $('#tgl_rev2_rencana_selesai_released').val(dataResult['surat'][4].date.substring(0, 10));
          $('#jam_rev2_rencana_selesai_released').val(dataResult['surat'][4].date.substring(11, 16));
          $('#by_rev2_rencana_selesai_released').val(dataResult['surat'][4].created_by);
        } catch (e) {
          console.log('no data rev1 dan rev2');
        }

        for (i = 1; i <= dataResult['peralatan_surat'].length; i++) {
          $('#peralatan_released_' + i).val(dataResult['peralatan_surat'][i - 1].name);
          $('#kks_number_released_' + i).val(dataResult['peralatan_surat'][i - 1].kks_number);
          $('#status_released_' + i).val(dataResult['peralatan_surat'][i - 1].status_realeased);
        }

        $('#id_print_released').val(dataResult['surat'][0].id_surat);
        console.log(dataResult['surat'][0].status);

        if (dataResult['surat'][0].status == 'Selesai') {
          $('#submit_released').hide();
          $('#form-print').show();
        } else {
          $('#submit_released').show();
          $('#form-print').hide();
        }

        $('#surat_view_div').hide('slow');
        $('#surat_release_div').show('slow');
      }
    });
  };

  window.print_page = function (id) {
    $('#form-print').submit();
  };

  window.filter_list = function (u) {
    $('#table-list').DataTable().destroy();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#table-list').DataTable({
      "processing": true,
      "serverSide": true,
      "order": [[3, "desc"]],
      "ajax": {
        "url": "filter_list",
        "dataType": "json",
        "type": "POST",
        "data": {
          _token: CSRF_TOKEN,
          filter: u
        }
      },
      "columns": [{
        "data": "no"
      }, {
        "data": "no_tagging"
      }, {
        "data": "keterangan_kks"
      }, {
        "data": "created_at"
      }, {
        "data": "status"
      }, {
        "data": "Action"
      }]
    });
  };

  $('#view_surat_modal').on('hidden.bs.modal', function (e) {
    $('#surat_view_div').show();
    $('#surat_release_div').hide();
  });
  $('a#btn-back-view').on('click', function () {
    $('#surat_view_div').show('slow');
    $('#surat_release_div').hide('slow');
  }); // ---------------------PERALATAN----------------------------

  window.kategori_baru = function () {
    $('#kategori').hide('slow');
    $('#kategori').val('');
    $('#kategori_baru').show('slow');
    $('#kategori_baru').val('');
    $('#btn_plus').hide('slow');
    $('#btn_min').show('slow');
  };

  window.kategori_baru_close = function () {
    $('#kategori_baru').hide('slow');
    $('#kategori_baru').val('');
    $('#kategori').show('slow');
    $('#kategori').val('');
    $('#btn_min').hide('slow');
    $('#btn_plus').show('slow');
  };

  $('#table-list-peralatans').dataTable({
    responsive: true,
    "aaSorting": []
  });
});
/******/ })()
;