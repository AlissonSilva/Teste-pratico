<div class="row form-group">

  <div class="col-sm-3">
      <label for="" class="label">Placa: </label>
      <input type="text" name="plate" class="form-control form-control" value="{{isset($registros->plate)?$registros->plate:''}}" maxlength="7" minlength="7" required>
  </div>

  <div class="col-sm-3">
      <label for="" class="label">Renavam: </label>
      <input type="number" name="renown" class="form-control form-control" value="{{isset($registros->renown)?$registros->renown:''}}" required>
  </div>
  <div class="col-sm-4">
    <label for="" class="label">Modelo: </label>
    <input type="text" name="model_car" class="form-control form-control" value="{{isset($registros->model_car)?$registros->model_car:''}}" required>
  </div>
</div>

<div class="row form-group">
  <div class="col-sm-5">
      <label for="" class="label">Marca: </label>
      <input type="text" name="brand_car" class="form-control form-control" value="{{isset($registros->brand_car)?$registros->brand_car:''}}" required>
  </div>

  <div class="col-sm-5">
      <label for="" class="label">Ano: </label>
      <input type="number" name="year" class="form-control form-control" value="{{isset($registros->year)?$registros->year:''}}" maxlength="4" minlength="4" required>
  </div>
  <input type="number" name="id_owner" class="form-control form-control" value="{{isset($registros->id_owner)?$registros->id_owner:$id}}" style="display: none" required>

</div>

@if ($message = Session::get('success'))
<div class="alert alert-info alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('warning'))
<div class="alert alert-info alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if($errors->all())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif