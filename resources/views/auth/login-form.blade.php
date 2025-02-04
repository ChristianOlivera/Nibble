<x-layout>
    <x-slot:title>Iniciar Sesión</x-slot:title>

    <section id="login" class="container-fluid">
        <h2 class="title-login">Ingresar a mi Cuenta</h2>

        <div class="login-container">
            <form action="{{ route('auth.login.process') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label text-white fs-4">Email:</label>
                    <input type="email" id="email" name="email" class="form-control bg-dark text-white p-2 mb-4" value="{{ old('email') }}">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-white fs-4">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control bg-dark text-white p-2 mb-5">
                </div>
                <button type="submit" class="btn btn-primary w-100 fs-4">Ingresar</button>
            </form>
        </div>
    </section>
</x-layout>
