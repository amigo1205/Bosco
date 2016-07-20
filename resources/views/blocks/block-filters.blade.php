<!-- Block Filters -->
<div class="row">
  <div class="block-filters clearfix">
    <div class="col-lg-12 col-md-12">
      <div class="filter-image"></div>
      <form class="form-inline" action="" method="get">
        <div class="form-group">
          <select id="locations-country" class="form-control">
            <option value="" default>País</option>
            <option value="1">Perú</option>
            <option value="2">Argentina</option>
            <option value="3">Uruguay</option>
          </select>
        </div>
        <div class="form-group">
          <select id="locations-city" class="form-control">
            <option default>Ciudad</option>
          </select>
        </div>
        <div class="form-group">
          <select id="locations-district" class="form-control">
            <option default>Distrito</option>
          </select>
        </div>
        <div class="form-group form-actions">
          <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
        <div class="form-group form-actions pull-right">
          <a href="{{ url('mis-reportes') }}" class="btn btn-primary">Reportar</a>
        </div>
      </form>
    </div>
  </div>
</div>