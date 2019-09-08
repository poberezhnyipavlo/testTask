@extends('adminlte::page')

@section('content')
    <form action="{{ route('admin.users.store') }}" role="form" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.users.form.form')
    </form>
@endsection
