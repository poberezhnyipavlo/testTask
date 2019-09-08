@extends('adminlte::page')

@section('content')
    <form action="{{ route('admin.articles.store') }}" role="form" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.articles.form.form')
    </form>
@endsection
