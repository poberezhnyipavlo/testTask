@extends('adminlte::page')

@section('content')
    <form action="{{ route('admin.articles.update', $article) }}" role="form" method="post"
          enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.articles.form.form')
    </form>
@endsection
