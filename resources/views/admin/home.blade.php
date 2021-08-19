@extends(layout())
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <h1> Seja bem vindo {{ Auth::user()->name }} </h1>
      </div>
  </div>
</div>

@endsection