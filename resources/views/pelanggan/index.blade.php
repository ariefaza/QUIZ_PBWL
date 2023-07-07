@extends('layouts.app')

@section('content')
    <h2>Data Pelanggan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>ID PELANGGAN</th>
            <th>NAMA PELANGGAN</th>
            <th>ALAMAT PELANGGAN</th>
            <th>NOMOR HP PELANGGAN</th>
            <th>KTP PELANGGAN</th>
            <th>SERI PELANGGAN</th>
            <th>METERAN PELANGGAN</th>
            <th>USER ID PELANGGAN</th>
            <th>TANGGAL PENAMBAHAN</th>
            <th>TANGGAL PERUBAHAN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->golongan->gol_nama }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->user->name }}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            
            <td><a class="btn btn-primary btn-sm float-none" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></td>
            <td>
                    <form action="{{url('pelanggan/' . $row->pel_id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
        </tr>
        @endforeach
    </table>

@endsection