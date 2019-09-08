@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <p>{!! $article->description !!}}</p>
        <p>Автори: {{ $article->users->pluck('name')->implode(', ') }} | Дата створення: {{ $article->created_at }} |
            <a href="{{ route('articles.edit', $article) }}">Редагувати</a>
        </p>
    </div>
@endsection
