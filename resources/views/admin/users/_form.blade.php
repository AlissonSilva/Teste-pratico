<div class="row form-group">
    <div class="col-sm-5">
        <label for="" class="label">Nome: </label>
        <input type="text" name="name" class="form-control form-control-user" value="{!!$registros->name!!}" required>
    </div>

    <div class="col-sm-5">
        <label for="" class="label">CPF: </label>
        <input type="number" name="cpf" class="form-control form-control-user" value="{!!$registros->cpf!!}" required>
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-5">
        <label for="" class="label">E-mail: </label>
        <input type="text" name="email" class="form-control form-control-user" value="{!!$registros->email!!}" required>
    </div>
    <div class="col-sm-3">
        <label for="" class="label">Telefone: </label>
        <input type="text" name="phone" class="form-control form-control-user" value="{!!$registros->phone!!}" required>
    </div>
    <div class="col-sm-2">
        <label for="" class="label">Grupo: </label>
        <select name="role" id="role" class="form-control form-control">
            <option value="1" {!!$registros->role == 1 ? 'selected' : '' !!} selected>Usuario</option>
            <option value="2" {!!$registros->role == 2 ? 'selected' : '' !!}>Administrador</option>
        </select>
    </div>
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