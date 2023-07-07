@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Golongan</h3>
        <form action="{{ url('/golongan/' . $row->gol_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>ID</label>
                <input type="text" class="form-control" name="gol_id" value="{{ $row->gol_id }}"></>
            </div>
            <div class="mb-3">
                <label>Kode golongan</label>
                <input type="text" class="form-control" name="gol_kode" value="{{ $row->gol_kode }}"></>
            </div>
            <div class="mb-3">
                <label>Nama golongan</label>
                <textarea class="form-control" name="gol_nama">{{ $row->gol_nama }}</textarea>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection