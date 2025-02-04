<?php
/** @var \App\Models\News $news */
?>

<x-layout>
    <x-slot:title>{{$news->title}}</x-slot:title>

    <section class="container-fluid">
        <div class="news-view">
            <h2 class="title-view">{{ $news->title }}</h2>
            <div class="img-view">
                <img src="{{ Storage::url($news->image) }}" class="img-fluid" alt="{{$news->description_image}}">
            </div>
            <p>{{$news->content}}</p>
        </div>
    </section>
</x-layout>