@extends('adminlte::page')

@section('content')
    <a href="{{ route('admin.articles.create') }}" class="btn btn-success">Новий стаття</a>
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
           aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th>Назва статті</th>
            <th>Автори</th>
            <th>Стаття</th>
            <th>Статус</th>
            <th>Дії</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr role="row">
                <td><a href="{{ route('admin.articles.edit', $article) }}">{{ $article->title }}</a></td>
                <td>{{ $article->users->pluck('name')->implode(', ') }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->status }}</td>
                <td class="text-right">
                <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.articles.destroy', $article)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th colspan="3">{{ $articles->links() }}</th>
        </tr>
        </tfoot>
    </table>
@endsection
