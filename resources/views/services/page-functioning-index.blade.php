@extends('layouts.base')
@section('content')

<section id="content">
  <div class="container-fluid">

    <!-- Block Works -->
    <div class="row">
      <div class="block-works clearfix">
        <div id="block-works-web" class="block-work-item col-lg-6 col-md-6 col-sm-6">
          <a href="{{ url('como-funciona/web') }}">
            <div class="block-works-background"></div>
            <div class="block-works-detail"><h3>Web</h3></div>
            <img src="{{ asset('images/work_item_web.png') }}">
          </a>
        </div>
        <div id="block-works-app" class="block-work-item col-lg-6 col-md-6 col-sm-6">
          <a href="{{ url('como-funciona/app') }}">
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