@extends('adminlte::page')

@section('content')
    <form action="{{ route('admin.users.update', $user) }}" role="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admin.users.form.form')
    </form>
@endsection
