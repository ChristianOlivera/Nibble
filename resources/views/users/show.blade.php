<?php
/** @var \App\Models\User[]|\Illuminate\Database\Eloquent\Collection $users */
?>

<x-layout>
    <x-slot:title>Detalle Usuario</x-slot:title>

    <section class="container-fluid vh-100">
        <h2 class="title-admin">Detalle de Usuario</h2>

        <div class="table-responsive">
            @if($reservations->isEmpty())
                <p class="empty-reservation">No tiene reservaciones.</p>
            @else
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Celular</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->reserved_at }}</td>
                            <td>{{ $reservation->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>
</x-layout>
