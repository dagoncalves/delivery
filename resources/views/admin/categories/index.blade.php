@extends('app')

@section('content')
    <div class="container">
        <h3>Categorias</h3>
        <p>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-default">Nova Categoria</a>
        </p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->id  }}</td>
                <td>{{ $cat->name  }}</td>
                <td></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {!! $categories->render() !!}

    </div>

@endsection