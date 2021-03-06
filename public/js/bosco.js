$(document).ready(function() {

  $(".link-user > span").on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    }
    else {
      $('.link-user > span').removeClass('active');
      $(this).addClass('active');
    }
  });

  $(".nav li > a").on('click', function () {
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
    }
    else {
      $('.nav li > a').parent().removeClass('active');
      $(this).parent().addClass('active');
    }
  });

  $(".works-desktop #block-works-web > a").click(function(e) {
    e.preventDefault();
    $( ".works-content-left" ).animate({ "left": "0" }, "slow" );
  });

  $(".works-desktop #block-works-app > a").click(function(e) {
    e.preventDefault();
    $( ".works-content-right" ).animate({ "right": "0" }, "slow" );
  });

  $('.works-content-left .block-works-item-return').click(function(e) {
    e.preventDefault();
    $( ".works-content-left" ).animate({ "left": "-100%" }, "slow" );
  });

  $('.works-content-right .block-works-item-return').click(function(e) {
    e.preventDefault();
    $( ".works-content-right" ).animate({ "right": "-100%" }, "slow" );
  });

  $('#form-pets-filters').validate();

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
    $('#form-report-lost .modal-form-report .form-report-lost-tab').addClass('hide');
    $('#form-report-lost-' + tab).removeClass('hide');
  });

  $('#form-report-lost .modal-form-report .form-actions .btn-next').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-lost .modal-form-report-menu li span').removeClass('tab-on');
    $('#form-report-lost .modal-form-report-menu li span#' + tab).addClass('tab-on');
    $('#form-report-lost .modal-form-report .form-report-lost-tab').addClass('hide');
    $('#form-report-lost-' + tab).removeClass('hide');
  });

  $('#form-report-founds .modal-form-report-menu li span').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-founds .modal-form-report-menu li span').removeClass('tab-on');
    $(this).addClass('tab-on');
    $('#form-report-founds .modal-form-report .form-report-founds-tab').addClass('hide');
    $('#form-report-founds-' + tab).removeClass('hide');
  });

  $('#form-report-founds .modal-form-report .form-actions .btn-next').click(function() {
    var tab = $(this).data('tab');
    $('#form-report-founds .modal-form-report-menu li span').removeClass('tab-on');
    $('#form-report-founds .modal-form-report-menu li span#' + tab).addClass('tab-on');
    $('#form-report-founds .modal-form-report .form-report-founds-tab').addClass('hide');
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

  var petDetail = $('.gallery-item-hover');
  petDetail.on('click', function(e){
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
      data: { petid : $this.data('id'), status : $this.data('status') },
      success: function(data) { 
        if (data.result) {
          $('#is-owner').html(data.pet.is_owner);
          $('.pet-detail-data').find('label').html(data.pet.label);
          $('.pet-detail-image').html('<img src="' + data.path + '/images/pets/' + data.pet.pet_image + '">');
          $('.pet-detail-location').html(" "+data.pet.location_address);
          $('.owner-detail-name').html(data.pet.user_name);
          $('.owner-detail-phone').html(data.pet.user_phone);
          $('.owner-detail-email').html('<a href="mailto:' + data.pet.user_email + '">' + data.pet.user_email + '</a>');
          $('.owner-detail-reward').html('S/. ' + data.pet.owner_reward);
          $('.pet-detail-name').html(data.pet.pet_name);
          $('.pet-detail-race').html(data.pet.pet_race);
          $('.pet-detail-gender').html(data.pet.pet_gender);
          $('.pet-detail-description').html(data.pet.pet_description);
          $('.report-detail-date').html(data.pet.report_date);
          $('.report-detail-hour').html(data.pet.report_hour);
          $('.report-detail-description').html(data.pet.report_description);
          console.log(data.pet.location_latitude+','+ data.pet.location_longitude);
          google.maps.event.trigger(map, 'resize');
          map.setCenter(new google.maps.LatLng(data.pet.location_latitude, data.pet.location_longitude));
        }
      }
    });
  });

  var locationsCountry = $('#ubigeo-department');
  locationsCountry.on('change', function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "GET",
      url: window.location.origin + '/ubigeo-ciudades',
      dataType: 'json',
      cache: false,
      data: { departmentid : $this.val() },
      success: function(data) { 
        if (data.result) {
          $('#ubigeo-city').html(data.options).fadeIn();
          $('#ubigeo-district').html('<option value="" default="">Distrito</option>').fadeIn();
          $('#ubigeo-city').addClass('error');
          $('#ubigeo-district').addClass('error');
        }
      }
    });


  });

  var locationsCity = $('#ubigeo-city');
  locationsCity.on('change', function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "GET",
      url: window.location.origin + '/ubigeo-distritos',
      dataType: 'json',
      cache: false,
      data: { cityid : $this.val() },
      success: function(data) { 
        if (data.result) {
          $('#ubigeo-district').html(data.options).fadeIn();
          $('#ubigeo-district').addClass('error');
        }
      }
    });
  });

  var reportDetailLost = $('.report-detail-lost');
  reportDetailLost.on('click', function(e){
    $('.report-detail-lost-image').html('');
    $('.report-detail-lost-address').html('');
    $('.report-detail-lost-phone').html('');
    $('.report-detail-lost-name').html('');
    $('.report-detail-lost-race').html('');
    $('.report-detail-lost-gender').html('');
    $('.report-detail-lost-date').html('');
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "GET",
      url: window.location.origin + '/mis-reportes-detalle-perdido',
      dataType: 'json',
      cache: false,
      data: { reportid : $this.data('id') },
      success: function(data) { 
        if (data.result) {
          $('.report-detail-lost-image').html('<img src="' + data.path + '/images/pets/' + data.pet.image + '">');
          $('.report-detail-lost-address').html(data.pet.address);
          $('.report-detail-lost-phone').html('<a class="report-phone" href="tel:' + data.pet.phone + '">' + data.pet.phone + '</a>');
          $('.report-detail-lost-name').html(data.pet.name);
          $('.report-detail-lost-race').html(data.pet.race);
          $('.report-detail-lost-gender').html(data.pet.gender);
          $('.report-detail-lost-date').html(data.pet.date);
          $('.btn-download-lost').attr('href',data.path+'/descargar-volante/perdido/?reportid='+$this.data('id'));
        }
      }
    });
  });

  var reportDetailFound = $('.report-detail-found');
  reportDetailFound.on('click', function(e){
    $('.report-detail-found-image').html('');
    $('.report-detail-found-address').html('');
    $('.report-detail-found-phone').html('');
    $('.report-detail-found-date').html('');
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "GET",
      url: window.location.origin + '/mis-reportes-detalle-encontrado',
      dataType: 'json',
      cache: false,
      data: { reportid : $this.data('id') },
      success: function(data) { 
        if (data.result) {
          $('.report-detail-found-image').html('<img src="' + data.path + '/images/pets/' + data.pet.image + '">');
          $('.report-detail-found-address').html(data.pet.address);
          $('.report-detail-found-phone').html('<a class="report-phone" href="tel:' + data.pet.phone + '">' + data.pet.phone + '</a>');
          $('.report-detail-found-date').html(data.pet.date);
          $('.btn-download-found').attr('href',data.path+'/descargar-volante/encontrado/?reportid='+$this.data('id'));
        }
      }
    });
  });

  var submitReport = $('.btn-submit-report');
  submitReport.on('click', function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "POST",
      url: window.location.origin + '/mis-reportes-registrar',
      dataType: 'json',
      cache: false,
      data: $('#form-report-lost').serialize(),
      success: function(data) {
        if (data.result) {
          $('#form-report-lost').each(function(){
            this.reset();
          });
        }
      }
    });
  });

  var submitSubscription = $('#form-subscriptions');
  submitSubscription.submit(function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "POST",
      url: $this.attr('action'),
      dataType: 'json',
      cache: false,
      data: submitSubscription.serialize(),
      success: function(data) {
        $('#subscription-message').show();
        if (data.status) {
          $('#subscription-message').html(data.message);
        }else{
          $('#subscription-message').html(data.errors.join('<br>'));
        }
      }
    });
  });

  var submitRegister = $('#form-user-register').find('form');
  submitRegister.submit(function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "POST",
      url: $this.attr('action'),
      dataType: 'json',
      cache: false,
      data: submitRegister.serialize(),
      success: function(data) {
        $('#register-message').show();
        if (data.status) {
          $('#register-message').html(data.message);
        }else{
          $('#register-message').html(data.errors.join('<br>'));
        }
      }
    });
  });

  var submitLogin = $('#form-user-login').find('form');
  submitLogin.submit(function(e){
    e.preventDefault();
    var $this = $(this);
    $.ajax({
      type: "POST",
      url: $this.attr('action'),
      dataType: 'json',
      cache: false,
      data: submitLogin.serialize(),
      success: function(data) {
        $('#login-message').show();
        if (data.status) {
          $('#login-message').html(data.message);
          $(location).attr('href', data.url);
        }else{
          $('#login-message').html(data.errors.join('<br>'));
        }
      }
    });
  });
});

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('pet-detail-map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8,
    mapTypeControl: true,
  });
}

function loadPets() {
  $.ajax({
    type: "GET",
    url: $(this).parent().parent().attr('actions'),
    data: { department : $this.val(), province: $('#ubigeo-city').val(), district: $('#ubigeo-district').val() },
    success: function(data) {
      if (data.status) {

      }
    }
  });
}