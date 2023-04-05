@extends('layouts.master')

@section('title', 'Home')

@section('title', 'Daftar')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Daftar Siswa</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('daftars.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('daftars.update',$daftar->id) }}" method="POST">
@csrf
@method('PUT')

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Lengkap:</strong>
<input type="text" name="nama_lengkap" value="{{ $daftar->nama_lengkap }}" class="form-control" placeholder="Name">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jenis Kelamin:</strong>
<input class="form-control"  name="jk" placeholder="Jenis Kelamin">{{ $daftar->jk }}</input>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Tempat Tanggal Lahir:</strong>
    <input type="carbon" class="form-control" style="height:150px" value="{{$daftar->detail }}" name="ttl" placeholder="Detail"></input>
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Agama :</strong>
        <textarea class="form-control" style="height:150px" name="agama" placeholder="Agama">{{ $daftar->agama }}</textarea>
        </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Cita-Cita:</strong>
            <textarea class="form-control" style="height:150px" name="cita_cita" placeholder="Cita-Cita">{{ $daftar->cita_cita }}</textarea>
            </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Hobi:</strong>
                <textarea class="form-control" style="height:150px" name="hobi" placeholder="Hobi">{{ $daftar->hobi }}</textarea>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Anak Ke:</strong>
                    <textarea class="form-control" style="height:150px" name="anak_ke" placeholder="Anak Ke">{{ $daftar->anak_ke }}</textarea>
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Jumlah Saudara:</strong>
                        <textarea class="form-control" style="height:150px" name="jumlah_saudara" placeholder="Jumlah Saudara">{{ $daftar->jumlah_saudara }}</textarea>
                        </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            <strong>Tinggi Badan:</strong>
                            <textarea class="form-control" style="height:150px" name="tinggi_badan" placeholder="Tinggi Badan">{{ $daftar->tinggi_badan }}</textarea>
                            </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Berat Badan:</strong>
                                <textarea class="form-control" style="height:150px" name="berat_badan" placeholder="Berat Badan">{{ $daftar->Berat_badan }}</textarea>
                                </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Golongan Darah:</strong>
                                    <textarea class="form-control" style="height:150px" name="golongan_darah" placeholder="Golongan Darah">{{ $daftar->golongan_darah }}</textarea>
                                    </div>
                                    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection