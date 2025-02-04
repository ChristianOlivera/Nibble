<?php
/** @var \App\Models\News $news */
?>

<x-layout>
    <x-slot:title>Confirmación de eliminación de {{$news->title}}</x-slot:title>

    <section class="container-fluid mb-5">
        <h2 class="title-delete">Confirmación de eliminación</h2>
        <p class="text-delete">Esta por eliminar el siguiente artículo, por favor confirme su eliminación.</p>

        <div class="card mb-3">
            @if($news->image !== null && \Storage::exists($news->image))
                <img src="{{ Storage::url($news->image) }}" class="card-img-top" alt="{{$news->description_image}}">                 
            @endif
            <div class="card-body bg-dark text-white">
                <h5 class="card-title">{{$news->title}}</h5>
                <p class="card-text">{{$news->resume}}</p>
            </div>
            <form action="{{ route('news.delete.process', ['id' => $news->news_id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger rounded-0 w-100 p-3">Confirmar Eliminación</button>
            </form>
        </div>
    </section>
</x-layout>