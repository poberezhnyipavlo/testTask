@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.update', $article) }}" role="form" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('articles.form.form')
        </form>
    </div>
@endsection
