@extends(layout())
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuário</h6>
            </div>
            <div class="card-body">          
                <div class="container">
                    <form action="{{route('admin.users.edit',$registros->id)}}"  method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put" >
                        @include('admin.users._form')
                        <div class="row form-group">
                            <div class="col-sm-10">
                                <button class="btn btn btn-primary ">Atualizar</button>
                                <a class="btn btn-secondary" href="{{route('admin.users.index')}}">Voltar</a>
                                <a class="btn btn btn-warning" href="{{route('admin.vehicles.addvehicles',$registros->id)}}">Adicionar Veiculo</a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        @if (count($vehicles)>0)
                            @include('admin.users._vehicles')
                        @endif
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection