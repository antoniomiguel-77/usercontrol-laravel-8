<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use PDF;

class UserController extends Controller
{
    /**view principal */
    public function index(){

        $action = "/novo";

        return view('/form',['action'=>$action]);
    }
        /**metodo de cadastro */
    public function store(UserRequest $request){

       $input = $request->all();

       if($request->hasFile('photo')){
        
        $destination = "/public/photo";
        $photo = $request->file('photo');
        $extension = $photo->extension();
        $name_photo = md5($photo->getClientOriginalName()).strtotime('now').'.'.$extension;
        $request->file('photo')->storeAs($destination,$name_photo);

        $input['photo'] = $name_photo;

       }
       


        $user = User::create($input);
        $user->address()->create($request->all());
        $user->contact()->create($request->all());

        
         

    return redirect('/listar')->with('msg','Usuário Adicionado...');
    }
    /** metodo que devolve o formularo de edicao */
    public function edit(Request $request){
        $userEdit = User::with(['address','contact'])->findOrFail($request->id);
            $action ='/usuario.update';
            
        return view('/form',['action'=>$action,'userEdit'=>$userEdit]);
    }
    /**metodo de eliminar registro */
    public function destroy(Request $request){
        $id = $request->id;
            User::findOrFail($id)->delete();
        return redirect('/listar')->with('msg','Usuário Deletado');
    }
        /**Metodo para actualizar registro */
    public function update(Request $request){

        
             $inputs = $request->all();

             if($request->hasFile('photo')){
                 $destination = "/public/photo";
                 $photo = $request->file('photo');
                 $extension = $photo->extension();
                 $name_photo = md5($photo).strtotime('now').'.'.$extension;
                 $request->file('photo')->storeAs($destination,$name_photo);

                 $inputs['photo'] = $name_photo;

            }
          
            $userUpdate = User::findOrFail($request->id);
            $userUpdate->update($inputs);
            $userUpdate->address->update($inputs);
            $userUpdate->contact->update($inputs);


            return redirect('/listar')->with('msg','Usuário Editado');


    }
    /**Metodo para mostrar mais detalhes do usuario */
    public function show(Request $request){
            $findUSer = User::findOrFail($request->id);

        return view('/show',['find'=>$findUSer]);
    }

    /**Lista de Usuarios */
    public function list(){

        $users = User::all();
        return view('/list',['users'=>$users]);
    }
    
}
