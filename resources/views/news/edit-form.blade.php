<?php
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\News $news */
?>

<x-layout>
    <x-slot:title>Editar "{{ $news->title }}"</x-slot:title>

    <div class="position-absolute bot-0 end-0">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                Hay errores en los datos del formulario. Por favor, revisa y vuelve a intentar.
                <button type="button" class="btn-close fs-6" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <section class="container-fluid mb-5">
        <h2 class="title-create">Editar Artículo</h2>
        <div class="form-container">
            <form action="{{ route('news.edit.process', ['id' => $news->news_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="form-label text-white fs-5">Título:</label>
                    <input type="text" class="form-control bg-dark text-white" id="title" name="title" value="{{ old('title', $news->title) }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="resume" class="form-label text-white fs-5">Resumen:</label>
                    <textarea id="resume" class="form-control bg-dark text-white" name="resume" rows="5">{{ old('resume', $news->resume) }}</textarea>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="content" class="form-label text-white fs-5">Contenido:</label>
                    <textarea id="content" class="form-control bg-dark text-white" name="content" rows="10">{{ old('content', $news->content) }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="category_id" class="form-label text-white fs-5">Categoría:</label>
                    <select id="category_id" class="form-control bg-dark text-white" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}" {{ old('category_id', $news->category_id) == $category->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="currentImage" class="form-label text-white fs-5">Imagen Actual:</label>
                    @if($news->image !== null && \Storage::exists($news->image))
                        <img src="{{ \Storage::url($news->image) }}" alt="{{$news->description_image}}" id="currentImage" class="form-control bg-dark ">
                    @endif
                    @error('currentImage')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label text-white fs-5">Nueva Imagen (Seleccionar solo si desea cambiar la imagen actual) :</label>
                    <input type="file" class="form-control bg-dark text-white" id="image" name="image">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description_image" class="form-label text-white fs-5">Descripción de la imagen:</label>
                    <input type="text" class="form-control bg-dark text-white" id="description_image" name="description_image" value="{{ old('description_image', $news->description_image) }}">
                    @error('description_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="url" class="form-label text-white fs-5">URL relacionada (opcional):</label>
                    <input type="url" class="form-control bg-dark text-white" id="url" name="url" value="{{ old('url', $news->url) }}">
                    @error('url')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning w-100 fs-4">Editar</button>
            </form>
        </div>
    </section>
</x-layout>