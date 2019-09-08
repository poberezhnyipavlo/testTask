@extends('adminlte::page')

@section('content')
    <a href="{{ route('admin.users.create') }}" class="btn btn-success">Новий користувач</a>
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
           aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th>Імя</th>
            <th>Email</th>
            <th>Статус</th>
            <th>Статті</th>
            <th>Дії</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr role="row">
                <td><a href="{{ route('admin.users.edit', $user) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->articles->pluck('title')->implode(' | ') }}</td>
                <td class="text-right">
                <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.users.destroy', $user)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th colspan="3">{{ $users->links() }}</th>
        </tr>
        </tfoot>
    </table>
@endsection
