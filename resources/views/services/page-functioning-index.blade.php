@extends('layouts.base')
@section('content')

<section id="content">

  <!-- Block Works Item -->
  <div id="works-web" class="works-content works-content-left">
    <div id="block-works-item-web" class="block-works-item clearfix">
      <a href="#works" class="block-works-item-return">Regresar</a>
      <a href="#" class="block-works-item-link"></a>
      <img src="{{ asset('images/work_web.png') }}">
      <div class="block-works-item-detail">
        <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
          <h3>Web</h3>
          <ul>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-web-tag-1"></em>
                <div>
                  <p>Tipo de reporte</p>
                  <p>Selecciona el tipo de reporte a generar. Mascota perdida o mascota encontrada.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-web-tag-2"></em>
                <div>
                  <p>Datos</p>
                  <p>Llena tus datos, los de tu mascot, los detalles del reporte y publicarlo.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-web-tag-3"></em>
                <div>
                  <p>Volante al instante</p>
                  <p>Genera automaticamente un volante par aimprimir y compartir en redes sociales.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Block Works Item -->
  <div id="works-app" class="works-content works-content-right">
    <div id="block-works-item-app" class="block-works-item clearfix">
      <a href="#works" class="block-works-item-return">Regresar</a>
      <a href="#" class="block-works-item-link"></a>
      <img src="{{ asset('images/work_app.png') }}">
      <div class="block-works-item-detail">
        <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
          <h3>App</h3>
          <ul>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-app-tag-1"></em>
                <div>
                  <p>Reportar</p>
                  <p>Si tu mascot se pierde, puedes reportarla como perdida a través de la aplicación.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-app-tag-2"></em>
                <div>
                  <p>Growd GPS</p>
                  <p>Cada smartphone con el app funciona como un radar de búsqueda paraa encontrarla.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="block-works-item-tag clearfix">
                <em class="works-item-app-tag-3"></em>
                <div>
                  <p>Encontrado</p>
                  <p>Tna pronto como un usuario pase cerca de ella, te mandaremos la ubicción excta donde fue vista.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <!-- Block Works -->
    <div id="works" class="row">
      <div class="block-works clearfix">
        <div id="block-works-web" class="block-work-item col-lg-6 col-md-6 col-sm-6">
          <a href="#works-web">
            <div class="block-works-background"></div>
            <div class="block-works-detail"><h3>Web</h3></div>
            <img src="{{ asset('images/work_item_web.png') }}">
          </a>
        </div>
        <div id="block-works-app" class="block-work-item col-lg-6 col-md-6 col-sm-6">
          <a href="#works-app">
            <div class="block-works-background"></div>
            <div class="block-works-detail"><h3>App</h3></div>
            <img src="{{ asset('images/work_item_app.png') }}">
          </a>
        </div>
      </div>
    </div>

    @include('blocks.block-subscription')

  </div>
</section>

@endsection