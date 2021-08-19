<?php

namespace App\Http\Controllers;

use App\model\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
    

    public function addVehicles($id)
    {
        return view('admin.vehicle.add',compact('id'));
    }

    public function destroy($id)
    {
        Vehicle::destroy($id);
        return back()->with('destroy', 'Usuário excluído com sucesso.');
    }

    public function editVehicles($id_vehicle)
    {
        $registros = Vehicle::where('id','=',$id_vehicle)->first();
        return view('admin.vehicle.edit',compact('registros'));
    }

    public function edit(VehicleRequest $request, $id_vehicle)
    {
        
        $request->validate($rules, $messages);

        try {
            $dados = $request->all();
            unset($dados['_token']);
            unset($dados['_method']);
            Vehicle::where('id','=',$id_vehicle)->update($dados);
            return back()->with('success','Veículo atualizado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('warning','Erro ao atualizar o veículo.'.$th->getMessage());
        }        
    }

    public function add(VehicleRequest $request)
    {   
        //$request->validate($rules, $messages);
        try {
            $dados = $request->all();
            unset($dados['_token']);
            Vehicle::create($dados);
            return back()->with('success','Veículo cadastrado com sucesso.');
        } catch (\Throwable $th) {
            return back()->with('warning','Erro ao salvar o veículo.'.$th->getMessage());
        }
    }
}
