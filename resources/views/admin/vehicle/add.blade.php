@extends(layout())
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Adicionar Veículo</h6>
            </div>
            <div class="card-body">          
                <div class="container">
                    <form action="{{route('admin.vehicles.addvehicles.add',$id)}}"  method="POST" >
                        {{ csrf_field() }}
                        @include('admin.vehicle._form')
                        <div class="row form-group">
                            <div class="col-sm-10">
                                <button class="btn btn btn-primary ">Adicionar</button>
                                <a class="btn btn-dark" href="{{route('admin.users.showusers',$id)}}">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection