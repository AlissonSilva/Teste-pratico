  <div class="container">
  <table class="table" style="margin-top: 25px">
    <thead>
      <tr>
        <th>Placa</th>
        <th>Renavam</th>
        <th>Modelo</th>
        <th>Marcar</th>
        <th>Ano</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>    
        @foreach ($vehicles as $vehicle)
          <tr>
            <td>{{$vehicle->plate}}</td>
            <td>{{$vehicle->renown}}</td>
            <td>{{$vehicle->model_car}}</td>
            <td>{{$vehicle->brand_car}}</td>
            <td>{{$vehicle->year}}</td>
            <td>
              <a href="{{route('admin.vehicles.editVehicles',$vehicle->id)}}" class="btn btn-warning">Editar</a>  
              <a href="{{route('admin.vehicles.destroy',$vehicle->id)}}" class="btn btn-danger">Excluir</a>  
            </td>
          </tr>
        
        @endforeach
    </tbody>
  </table>
</div>