@extends('layouts.home')
@section('content')
<section id="content" class="bg-home">
  <div id="page-home" class="container-fluid">

    <!-- Block Video -->
    <div class="row">
      <div class="block-video">
        <div class="arrow-down"></div>
        <div class="block-video-content">
          <p>Un amor tan grande, no merece ser separado</p>
          <a href="#" class="btn btn-video">Ver Video</a>
        </div>
      </div>
    </div>

    <!-- Block Works -->
    <div class="row">
      <div class="block-about-us clearfix">
        <div class="block-about-us-item col-lg-4 col-md-4 col-sm-4">
          <a href="#">
            <div class="block-about-us-background"></div>
            <div class="block-about-us-detail">
              <h3>¿Quiénes somos?</h3>
              <p>Somos una comunidad creciente enfocada en encontrar mascotas perdidas.</p>
            </div>
            <img src="{{ asset('images/about_us_item_1.png') }}">
            <span class="block-about-us-line"></span>
          </a>
        </div>
        <div class="block-about-us-item col-lg-4 col-md-4 col-sm-4">
          <a href="#">
            <div class="block-about-us-background"></div>
            <div class="block-about-us-detail">
              <h3>¿Cómo lo hacemos?</h3>
              <p>Trabajando en equipo para brindar tecnología orientada al cuidado y protección de las mascotas.</p>
            </div>
            <img src="{{ asset('images/about_us_item_2.png') }}">
            <span class="block-about-us-line"></span>
          </a>
        </div>
        <div class="block-about-us-item col-lg-4 col-md-4 col-sm-4">
          <a href="#">
            <div class="block-about-us-background"></div>
            <div class="block-about-us-detail">
              <h3>¿Por qué lo hacemos?</h3>
              <p>Porque una mascota es parte de una familia y no hay nada más importante que la seguridad y protección de los que más queremos.</p>
            </div>
            <img src="{{ asset('images/about_us_item_3.png') }}">
            <span class="block-about-us-line"></span>
          </a>
        </div>
      </div>
    </div>

    <!-- Block Partners -->
    <div class="row">
      <div class="block-partners clearfix">
        <ul>
          <li><a href="#"><img src="{{ asset('images/partners/logo_startup_peru.png') }}"></a></li>
          <li><a href="#"><img src="{{ asset('images/partners/logo_pucp.png') }}"></a></li>
          <!--li><a href="#"><img src="{{ asset('images/partners/logo_universidad_delima.png') }}"></a></li-->
          <li><a href="#"><img src="{{ asset('images/partners/logo_wuf.png') }}"></a></li>
          <li><a href="#"><img src="{{ asset('images/partners/logo_voz_animal.png') }}"></a></li>
          <li><a href="#"><img src="{{ asset('images/partners/logo_sos_veterinaria.png') }}"></a></li>
        </ul>
      </div>
    </div>

    @include('blocks.block-subscription')

  </div>
</section>
@endsection