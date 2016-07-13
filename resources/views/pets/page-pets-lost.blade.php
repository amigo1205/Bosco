@extends('layouts.base')
@section('content')

<!-- Header Content -->
<div class="header-content">
  <div class="container-fluid">

    <!-- Block Buttons -->
    <div class="row">
      <div class="block-buttons">
        <div class="col-md-12 col-lg-12 text-center">
          <a href="{{url('/mascotas/perdidos')}}" class="btn btn-lg {{ (Request::is('mascotas') || Request::is('mascotas/perdidos')) ? 'btn-primary' : 'btn-default' }}">Perdidos</a>
          <a href="{{url('/mascotas/encontrados')}}" class="btn btn-lg {{ (Request::is('mascotas/encontrados')) ? 'btn-primary' : 'btn-default' }}">Encontrados</a>
        </div>
      </div>
    </div>

  </div>
</div>

<section id="content">
  <div class="container">

    @include('blocks.block-filters')

    <!-- Block Images -->
    <div class="row">
      <div id="block-gallery-lost" class="block-gallery clearfix">
        <div class="view-content">
          <ul class="text-center">
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
            <li>
              <a data-toggle="modal" href="#dog-detail">
                <img src="{{ asset('images/gallery_item.png') }}" />
                <div class="gallery-item-hover">
                  <p>Lana se escapó de mi casa por la noche, cerca de la avenida arboleda.</p>
                  <p>Porfavor si alguien tiene alguna información, contactenos de inmediato, estamos muy preocupados.</p>
                </div>
                <div class="gallery-item-detail">
                  <h2>Aita</h2>
                  <p class="gallery-item-birthday">30 Marzo 2016</p>
                  <p class="gallery-item-location">Las Copaibas, La Molina</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>

@include('modals.modal-pets-detail')

@endsection