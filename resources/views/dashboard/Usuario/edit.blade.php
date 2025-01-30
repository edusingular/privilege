@extends('dashboard.layout.layout')
@section('css')

@section('content')
<div class="container">
    <h2>Editar Perfil</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="url" class="form-control" name="instagram" value="{{ old('instagram', $user->instagram) }}">
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="url" class="form-control" name="facebook" value="{{ old('facebook', $user->facebook) }}">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Nova Senha (deixe em branco para não alterar)</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto de Perfil</label>
            <input type="file" class="form-control" name="photo">
            @if($user->photo)
                <img src="{{ asset('storage/'.$user->photo) }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
