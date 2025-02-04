<x-layout>
    <x-slot:title>Registrarse</x-slot:title>

    <section id="register" class="container-fluid">
        <h2 class="title-register">Registrarse</h2>

        <div class="register-container">
            <form action="{{ route('auth.register.process') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label text-white fs-4">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-control bg-dark text-white p-2 mb-2" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label text-white fs-4">Email:</label>
                    <input type="email" id="email" name="email" class="form-control bg-dark text-white p-2 mb-2" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white fs-4">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control bg-dark text-white p-2 mb-2">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success w-100 fs-4 mt-4">Registrarse</button>
            </form>
        </div>
    </section>
</x-layout>
