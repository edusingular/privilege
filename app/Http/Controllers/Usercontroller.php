<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
}
