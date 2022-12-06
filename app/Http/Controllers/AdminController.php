<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function ver_usuarios(){
        $users = User::orderByDesc('id')->get();
        return view('admin.usuarios', compact('users'));
    }

    public function crear_usuarios(){
        return view('admin.usuarios_create');
    }

    public function guardar_usuarios(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role'      => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password', 'role']));
        return redirect()->to('admin_u/listar');
    }

    public function edit_u(User $id)
    {
        return view('admin.usuarios_edit', compact('id'));
    }

    public function update_u(Request $request, User $id)
    {
        // dd($request->all());
        $id->name=$request->name;
        $id->email=$request->email;
        $id->password=$request->password;
        $id->role=$request->role;
        $id->save();
        return redirect()->route('admin.usuarios');
    }

    public function destroy_u(User $id)
    {
        $id->delete();
        return back()->with('succes', 'Usuario Eliminado');
    }
}
