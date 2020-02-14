@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kelas</div>
                <div class="card-body">
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" value="{{$kelas->kelas}}" class="form-control" readonly>
                            <label for="">Daftar Siswa</label>
                            @foreach ($kelas->siswa as $item)
                            <li>{{$item->nama}} - {{$item->nis}}</li>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
