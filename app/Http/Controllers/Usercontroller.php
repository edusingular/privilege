<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Apenas imagens até 2MB
        ]);

        $user = Auth::user();

        // Caminho da pasta public/assets/usuarios
        $uploadPath = public_path('assets/usuarios');

        // Certifica-se de que a pasta existe
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Apaga a foto antiga, se existir
        if ($user->photo && File::exists($uploadPath . '/' . $user->photo)) {
            File::delete($uploadPath . '/' . $user->photo);
        }

        // Salva a nova foto
        $photoName = time() . '.' . $request->photo->extension();
        $request->photo->move($uploadPath, $photoName);

        // Atualiza o campo no banco de dados
        $user->photo = $photoName;
        $user->save();

        return back()->with('success', 'Foto atualizada com sucesso!');
    }


    public function edit()
    {
        $user = Auth::user();
        return view('dashboard.Usuario.usuarios', compact('user'));
    }

    /**
     * Atualiza os dados do usuário
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'password' => 'nullable|min:6',

        ]);

        // Atualiza os dados
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->instagram = $request->instagram;
        $user->facebook = $request->facebook;

        // Atualiza a senha se for informada
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Upload da foto


        $user->save();

        return redirect()->route('user.edit')->with('success', 'Perfil atualizado com sucesso!');

    }
}
