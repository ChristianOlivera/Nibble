<?php
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */
/** @var \App\Models\News[]|\Illuminate\Database\Eloquent\Collection $news */
?>

<x-layout>
    <x-slot:title>Novedades</x-slot:title>

    <section class="container-fluid">
        <h2 class="title-news">NOVEDADES</h2>

        <div class="container fluid d-flex justify-content-end">
            <form action="{{ route('news.index') }}" method="GET" class="mt-3">
                <div class="form-group d-flex">
                    <label for="category_id" class="text-white m-2">Categorías:</label>
                    <select id="category_id" class="form-control bg-dark text-white" name="category_id" onchange="this.form.submit()">
                        <option value="">Todo</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->category_id }}" {{ request('category_id') == $category->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>

        @auth
            @if(auth()->user()->isAdmin())
                <div class="m-4">
                    <a href="{{ route('news.create.form') }}" class="btn btn-success p-3">Crear Nuevo Artículo</a>
                </div>
            @endif
        @endauth

        @if($news->isNotEmpty())
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 g-4 mt-4">
                @foreach ($news as $news)
                    <div class="col" >
                        <div class="card-news card h-100 bg-dark d-flex flex-column">
                            <a class="text-decoration-none text-white" href="{{ route('news.view', ['id' => $news->news_id]) }}">
                                @if($news->image !== null && \Storage::exists($news->image))
                                    <img src="{{ Storage::url($news->image) }}" class="card-img-top" alt="{{$news->description_image}}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title p-1">{{$news->title}}</h5>
                                    <p class="card-text p-1">{{$news->resume}}</p>
                                </div>
                            </a>
                            <div class="mt-auto">
                                <div class="card-footer">
                                    <small class="text-white">Publicado el {{$news->created_at->format('d/m/Y')}}</small>
                                </div>
                            </div>
                            @auth
                                @if(auth()->user()->isAdmin())
                                    <div class="d-flex">
                                        <a href="{{ route('news.edit.form', ['id' => $news->news_id]) }}" class="w-50 rounded-0 btn btn-outline-warning">Editar</a>
                                        <a href="{{ route('news.delete.form', ['id' => $news->news_id]) }}" class="w-50 rounded-0 btn btn-outline-danger">Eliminar</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="empty-text">No se encuentran artículos en esta categoria actualmente.</p>
        @endif
    </section>
</x-layout>
