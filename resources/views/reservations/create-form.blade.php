<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Reservaciones</x-slot:title>

    <div class="position-absolute bot-0 end-0">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                Hay errores en los datos del formulario. Por favor, revisa y vuelve a intentar.
                <button type="button" class="btn-close fs-6" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <section class="container-fluid mb-5">
        <h2 class="title-create">Reservaciones</h2>
        <div class="form-container">
            <form action="{{ route('reservations.create.process') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label text-white fs-5">Nombre y Apellido:</label>
                    <input type="text" class="form-control bg-dark text-white" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label text-white fs-5">Celular:</label>
                    <input type="text" class="form-control bg-dark text-white" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="reserved_at" class="form-label text-white fs-5">Fecha:</label>
                    <input type="date" class="form-control bg-dark text-white" id="reserved_at" name="reserved_at" value="{{ old('reserved_at') }}">
                    @error('reserved_at')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="people" class="form-label text-white fs-5">Cantidad de Personas:</label>
                    <input type="text" class="form-control bg-dark text-white" id="people" name="people" value="{{ old('people') }}">
                    @error('people')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 fs-4">Reservar</button>
            </form>
        </div>
    </section>
</x-layout>