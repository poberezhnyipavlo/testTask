@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('articles.create') }}" class="btn btn-primary" style="position: fixed; display: block; width: 50px; height: 50px; bottom: 80px; right: 80px; border-radius: 50%; font-size: 36px; line-height: 36px;
    font-weight: 600; text-align: center; ">
            +
        </a>
        @forelse ($articles as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h2>
                    <p>{!! $article->description !!}</p>
                    <p>Автори: {{ $article->users->pluck('name')->implode(', ') }} | Дата створення: {{ $article->created_at }} |
                        <a href="{{ route('articles.edit', $article) }}">Редагувати</a>
                    </p>
                </div>
            </div>
        @empty
            <h2 class="text-center">Пусто</h2>
        @endforelse

        {{ $articles->links() }}
    </div>
@endsection
