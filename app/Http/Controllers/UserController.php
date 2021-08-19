<?php

namespace App\Http\Controllers;

use App\model\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Notifications\EditNotification;
use Notification;

use App\User;

class UserController extends Controller
{
    public function index(){
        $dados = User::simplePaginate(10);
        return view('admin.users.index', compact('dados'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('destroy', 'Usuário excluído com sucesso.');
    }

    public function showUsers($id)
    {
        $registros = User::where('id','=',$id)->first();
        $vehicles = Vehicle::where('id_owner','=',$id)->get();        
        return view('admin.users.edit',compact('registros','vehicles'));
    }

    public function add(Request $request){
    }

    public function edit(UserRequest $request, $id){
        $dados = $request->all();
        
        unset($dados['_token']);
        unset($dados['_method']);
        try {
            User::where('id','=',$id)->update($dados);
            $userData = [
                'subject' => 'Alteração no cadastro do usuário',
                'body' => 'Houve alteração no seu cadastro.',
                'thanks' => 'Thank you',
                'text' => 'Houve alteração no seu cadastro.',
                'offer' => url('/teste'),
                'id' => 007
            ];

            // Notification::send($userData, new EditNotification($userData));
            Notification::route('mail', $dados['email'])->notify(new EditNotification($userData));
            return back()->with('success','Usuário atualizado com sucesso');
        } catch (\Throwable $th) {
            return back()->with('warning','Erro ao atualizar o usuário '.$th->getMessage());
        }
    }
}
