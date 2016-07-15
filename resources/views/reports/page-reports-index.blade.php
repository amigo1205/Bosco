@extends('layouts.base')
@section('content')

<section id="content">
  <div class="container">

    <!-- Block Works -->
    <div class="row">
      <div class="page-content clearfix">
        <div id="contact-us" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
          <h3>Mis reportes</h3>
        </div>
      </div>
    </div>

    <!-- Block Reports -->
    <div class="row">
      <div class="block-reports-content col-lg-12">
        <div id="block-reports-lost" class="block-reports clearfix">
          <div class="view-content">
          @if(!empty($reports['lost']['data']))
            <ul class="text-left">
            @foreach($reports['lost']['data'] as $item)
              <li>
                <div class="report-item-content">
                  <img src="{{ asset('images/pets/' . $item['image']) }}" />
                  <div class="report-item-detail">
                    <h2>{{ $item['name'] }}</h2>
                    <p class="report-item-birthday">{{ $item['date'] }}</p>
                    <p class="report-item-location">{{ $item['address'] }}</p>
                  </div>
                </div>
                <div class="report-buttons">
                  <a data-toggle="modal" href="#report-detail-lost" class="btn btn-primary btn-block">Generar volante</a>
                  <a data-toggle="modal" href="#" class="btn btn-primary btn-green btn-block">Encontrado</a>
                </div>
              </li>
              @endforeach
              <li>
                <a data-toggle="modal" href="#form-report-lost" class="report-add">
                  <em>+</em>
                  <p>Reportar encontrado</p>
                </a>
              </li>
            </ul>
            @endif
          </div>
        </div>
        <div class="report-line"></div>
        <div id="block-reports-founds" class="block-reports clearfix">
          <div class="view-content">
          @if(!empty($reports['founds']['data']))
            <ul class="text-left">
            @foreach($reports['founds']['data'] as $item)
              <li>
                <div class="report-item-content">
                  <img src="{{ asset('images/pets/' . $item['image']) }}" />
                  <div class="report-item-detail">
                    <h2>{{ $item['name'] }}</h2>
                    <p class="report-item-birthday">{{ $item['date'] }}</p>
                    <p class="report-item-location">{{ $item['address'] }}</p>
                  </div>
                </div>
                <div class="report-buttons">
                  <a data-toggle="modal" href="#report-detail-founds" class="btn btn-primary btn-block">Generar volante</a>
                </div>
              </li>
              @endforeach
              <li>
                <a data-toggle="modal" href="#form-report-founds" class="report-add">
                  <em>+</em>
                  <p>Reportar encontrado</p>
                </a>
              </li>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('modals.modal-reports-detail-lost')
@include('modals.modal-reports-detail-founds')
@include('modals.modal-form-report-lost')
@include('modals.modal-form-report-founds')

@endsection