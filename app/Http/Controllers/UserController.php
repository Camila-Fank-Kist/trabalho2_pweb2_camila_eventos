<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('pedido','avaliacao')->get();
        //dd($users); 

        return view('user.list')->with(['users'=> $users]);
    }

    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $users = User::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $users = User::all();
        }

        return view('user.list')->with(['users'=> $users]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('user')->with('success', "Removido com sucesso!");
    }
}
