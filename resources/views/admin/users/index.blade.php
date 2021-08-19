@extends(layout())
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
        @if ($message = Session::get('destroy'))
            <div class="alert alert-info alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
        <table class="table">
            <thead>
              <tr>
                <th>
                  Id
                </th>
                <th>
                  Nome
                </th>
                <th>
                  Telefone
                </th>
                <th>
                  CPF
                </th>
                <th>
                  E-mail
                </th>
                <th>
                  Tipo
                </th>
                <th>
                  Ação
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dados as $dado)
              <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->name}}</td>
                <td>{{$dado->telefone}}</td>
                <td>{{$dado->cpf}}</td>
                <td>{{$dado->email}}</td>
                <td>{{$dado->rule == 1? 'Admin':'User'}}</td>
                <td>
                  <a href="{{route('admin.users.showusers',$dado->id)}}" class="btn btn-success">Editar</a>
                  <a href="{{route('admin.users.destroy',$dado->id)}}" class="btn btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="pagination">
            {!! $dados->render() !!}
          </div>
      </div>
  </div>
</div>

@endsection