<?php
/** @var \App\Models\User[]|\Illuminate\Database\Eloquent\Collection $users */
?>

<x-layout>
    <x-slot:title>Administrador de usuarios</x-slot:title>

    <section class="container-fluid vh-100">
        <h2 class="title-admin">Administrar Usuarios</h2>

        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $user) }}" class="btn btn-light">Ver Detalles</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
