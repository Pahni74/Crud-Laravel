@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>
                <div class="card-body">
                        <div class="form-group">
                            <form action="{{route('kelas.update',$kelas->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                            <label>Kelas</label>
                            <input type="text" name="nama" value="{{$kelas->nama}}" class="form-control">                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
