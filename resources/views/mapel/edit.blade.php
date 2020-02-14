@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mata Pelajaran</div>
                <div class="card-body">
                        <div class="form-group">
                            <form action="{{route('mapel.update',$mapel->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                            <label>Mata Pelajaran</label>
                            <input type="text" name="nama" value="{{$mapel->nama}}" class="form-control" autofocus>                        </div>
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
