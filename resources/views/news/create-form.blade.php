<?php
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Publicar Novedad</x-slot:title>

    <div class="position-absolute bot-0 end-0">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                Hay errores en los datos del formulario. Por favor, revisa y vuelve a intentar.
                <button type="button" class="btn-close fs-6" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <section class="container-fluid mb-5">
        <h2 class="title-create">Publicar Artículo</h2>
        <div class="form-container">
            <form action="{{ route('news.create.process') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label text-white fs-5">Título:</label>
                    <input type="text" class="form-control bg-dark text-white" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="resume" class="form-label text-white fs-5">Resumen:</label>
                    <textarea id="resume" class="form-control bg-dark text-white" name="resume" rows="5">{{ old('resume') }}</textarea>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="content" class="form-label text-white fs-5">Contenido:</label>
                    <textarea id="content" class="form-control bg-dark text-white" name="content" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="category_id" class="form-label text-white fs-5">Categoría:</label>
                    <select id="category_id" class="form-control bg-dark text-white" name="category_id">
                        <option value=""></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}" {{ old('category_id') == $category->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label text-white fs-5">Imagen:</label>
                    <input type="file" class="form-control bg-dark text-white" id="image" name="image">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description_image" class="form-label text-white fs-5">Descripción de la imagen:</label>
                    <input type="text" class="form-control bg-dark text-white" id="description_image" name="description_image" value="{{ old('description_image') }}">
                    @error('description_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="url" class="form-label text-white fs-5">URL relacionada (opcional):</label>
                    <input type="url" class="form-control bg-dark text-white" id="url" name="url" value="{{ old('url') }}">
                    @error('url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success w-100 fs-4">Publicar</button>
            </form>
        </div>
    </section>
</x-layout>