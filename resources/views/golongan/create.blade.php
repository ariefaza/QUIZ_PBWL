@extends('layouts.app')

@section('content')

<h2>Input Data Golongan</h2>

<form action="{{ url('/golongan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">ID</label>
        <input type="text" name="gol_id" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Kode golongan</label>
        <input type="text" name="gol_kode" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Nama golongan</label>
        <input type="text" name="gol_nama" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection