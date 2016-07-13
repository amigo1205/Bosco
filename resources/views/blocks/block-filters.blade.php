<!-- Block Filters -->
<div class="row">
  <div class="block-filters clearfix">
    <div class="col-lg-12 col-md-12">
      <div class="filter-image"></div>
      <form class="form-inline" action="{{ url('mis-reportes') }}" method="post">
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
          <input type="submit" class="btn btn-primary" value="Reportar">
        </div>
      </form>
    </div>
  </div>
</div>