@extends('layout')

@section('content')
    <h1>Todo</h1>
    <a href="{{ route('todo.create') }}">Tambah Data</a>
    <br>
    <br>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Todo</th>
                <th>keterangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $t)
            <tr>
                <td><center>{{ $t->id }}</center></td>
                <td>{{ $t->todo }}</td>
                <td>{{ $t->keterangan }}</td>
                <td>
                    <a href="{{ url("/index/{$t->id}") }}">Edit</a>
                    ||
                    <form action="{{ url("/index/{$t->id}") }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection