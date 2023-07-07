@extends('layouts.app')

@section('content')
    <h2>Data Golongan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>kode golongan</th>
            <th>nama golongan</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a class="btn btn-primary btn-sm float-none" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a></td>
            <td>
                    <form action="{{url('golongan/' . $row->gol_id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
        </tr>
        @endforeach
    </table>

@endsection