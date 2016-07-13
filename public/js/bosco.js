$(document).ready(function() {

  $('.check-on').click(function() {
    $(this).addClass('hide');
    $(this).parent().children('.check-off').removeClass('hide');
  });
  $('.check-off').click(function() {
    $(this).addClass('hide');
    $(this).parent().children('.check-on').removeClass('hide');
  });

  $('#form-report-lost .modal-form-report-menu li span').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-lost .modal-form-report-menu li span').removeClass('tab-on');
    $(this).addClass('tab-on');
    $('#form-report-lost .modal-form-report form').addClass('hide');
    $('#form-report-lost-' + tab).removeClass('hide');
  });

  $('#form-report-lost .modal-form-report .form-actions .btn-next').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-lost .modal-form-report-menu li span').removeClass('tab-on');
    $('#form-report-lost .modal-form-report-menu li span#' + tab).addClass('tab-on');
    $('#form-report-lost .modal-form-report form').addClass('hide');
    $('#form-report-lost-' + tab).removeClass('hide');
  });

  $('#form-report-founds .modal-form-report-menu li span').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-founds .modal-form-report-menu li span').removeClass('tab-on');
    $(this).addClass('tab-on');
    $('#form-report-founds .modal-form-report form').addClass('hide');
    $('#form-report-founds-' + tab).removeClass('hide');
  });

  $('#form-report-founds .modal-form-report .form-actions .btn-next').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-founds .modal-form-report-menu li span').removeClass('tab-on');
    $('#form-report-founds .modal-form-report-menu li span#' + tab).addClass('tab-on');
    $('#form-report-founds .modal-form-report form').addClass('hide');
    $('#form-report-founds-' + tab).removeClass('hide');
  });

  $('#form-user .modal-footer a').click(function() {
    var form = $(this).data('form');
    $('#form-user .form-user').addClass('hide');
    $('#' + form).removeClass('hide');
  });

  $('#datepicker').datetimepicker({
    format: "DD/MM/YYYY"
  });
  $('#timepicker').datetimepicker({
    format: "LT"
  });

});