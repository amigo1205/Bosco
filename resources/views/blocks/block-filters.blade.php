<!-- Block Filters -->
<div class="row">
  <div class="block-filters clearfix">
    <div class="col-lg-12 col-md-12">
      <div class="filter-image"></div>
      <form class="form-inline" action="#" method="get">
        <div class="form-group">
          <select class="form-control">
            <option default>País</option>
            <option>Perú</option>
            <option>Argentina</option>
            <option>Uruguay</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control">
            <option default>Ciudad</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control">
            <option default>Distrito</option>
          </select>
        </div>
        <div class="form-group form-actions">
          <a href="{{ url('mis-reportes') }}" class="btn btn-primary">Reportar</a>
        </div>
      </form>
    </div>
  </div>
</div>