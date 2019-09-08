@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.store') }}" role="form" method="post" enctype="multipart/form-data">
            @csrf
            @include('articles.form.form')
        </form>
    </div>
@endsection
