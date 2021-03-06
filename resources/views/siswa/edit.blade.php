@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Daftar Siswa Siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nis</label>
                            <input type="text" name="nis"  class="form-control"value="{{$siswa->nis}}" required autofocus>
                            <label>Nama</label>
                            <input type="text" name="nama"  class="form-control" value="{{$siswa->nama}}" required>
                            <label>Alamat</label>
                            <textarea name="alamat"  class="form-control" cols="10" rows="5"  required>{{$siswa->alamat}}</textarea>
                            <label>Kelas</label>
                                @foreach ($kelas as $data)
                                <option value="{{$data->id}}" {{$data->id == $siswa->id_kelas ? 'selected' : ''}}>{{$data->kelas}}</option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="">Mata Pelajaran</label>
                                <select name="mapel[]" class="form-control" multiple>
                                    @foreach ($mapel as $data)
                                        <option value="{{$data->id}}" {{(in_array($data->id,$selected)) ? 'selected="selected"' : ''}}>{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
