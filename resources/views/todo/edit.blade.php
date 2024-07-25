@extends('layout')

@section('content')
    <h1>Edit Data</h1>

    <form action="{{ route('todo.update', $todo->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="todo">Todo</label>
            <!-- <input type="hidden" value="{{ $todo->id }}" name="id"> -->
            <input type="text" id="todo" name="todo" placeholder="Aktifitas" value="{{ $todo->todo }}" required>
        </div>
        <br>
        <div>
            <label for="todo">keterangan</label>
            <textarea name="keterangan" id="keterangan" placelholder="Keterangan Aktifitas" required>{{ $todo->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection