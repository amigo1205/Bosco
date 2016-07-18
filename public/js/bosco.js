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

  var dogDetail = $('.gallery-item-hover');
  dogDetail.on('click', function(e){
    $('.pet-detail-image').html('');
    $('.pet-detail-location').html('');
    $('.owner-detail-name').html('');
    $('.owner-detail-phone').html('');
    $('.owner-detail-email a').html('');
    $('.owner-detail-reward').html('');
    $('.pet-detail-name').html('');
    $('.pet-detail-race').html('');
    $('.pet-detail-gender').html('');
    $('.pet-detail-description').html('');
    $('.report-detail-date').html('');
    $('.report-detail-hour').html('');
    $('.report-detail-description').html('');
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "GET",
      url: window.location.origin + '/mascotas-detalle',
      dataType: 'json',
      cache: false,
      data: { petid : $this.data('id') },
      success: function(data) { 
        if (data.result) {
          $('.pet-detail-image').html('<img src="' + data.path + '/images/pets/' + data.pet[0].pet_image + '">');
          $('.pet-detail-location').html(data.pet[0].location_address);
          $('.owner-detail-name').html(data.pet[0].owner_name);
          $('.owner-detail-phone').html(data.pet[0].owner_phone);
          $('.owner-detail-email').html('<a href="mailto:' + data.pet[0].owner_email + '">' + data.pet[0].owner_email + '</a>');
          $('.owner-detail-reward').html('S/.' + data.pet[0].owner_reward);
          $('.pet-detail-name').html(data.pet[0].pet_name);
          $('.pet-detail-race').html(data.pet[0].pet_race);
          $('.pet-detail-gender').html(data.pet[0].pet_gender);
          $('.pet-detail-description').html(data.pet[0].pet_description);
          $('.report-detail-date').html(data.pet[0].report_date);
          $('.report-detail-hour').html(data.pet[0].report_hour);
          $('.report-detail-description').html(data.pet[0].report_description);
          console.log(data.pet[0].location_latitude+','+ data.pet[0].location_longitude);
          google.maps.event.trigger(map, 'resize');
          map.setCenter(new google.maps.LatLng(data.pet[0].location_latitude, data.pet[0].location_longitude));
        }
      }
    });
  });
});

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('pet-detail-map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}