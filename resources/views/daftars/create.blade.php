@extends('layouts.master')

@section('title', 'Home')

@section('title', 'Daftar')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New daftar</h2>
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
<form action="{{ route('daftars.store') }}" method="POST">
@csrf

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Lengkap:</strong>
<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jenis Kelamin:</strong>
<input class="form-control"  name="jk" placeholder="Jenis Kelamin">
</div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Tempat Tanggal Lahir:</strong>
    <input type="date" name="ttl" class="form-control" placeholder="Tempat Tanggal Lahir">
    </div>



    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Agama:</strong>
        <input type="text" name="agama" class="form-control" placeholder="Agama">
        </div>
     


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Cita-Cita:</strong>
            <input type="text" name="cita_cita" class="form-control" placeholder="Cita-Cita">
            </div>
          
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Hobi:</strong>
    <input type="text" name="hobi" class="form-control" placeholder="Hobi">
     </div>
     </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Anak Ke:</strong>
                    <input type="number" name="anak_ke" class="form-control" placeholder="Anak Ke">
                    </div>
                    </div>
                    
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>Jumlah Saudara:</strong>
                        <input type="number" name="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara">
                        </div>
                        </div>
    </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            <strong>Tinggi Badan:</strong>
                            <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
                            </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <strong>Berat Badan:</strong>
                                <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan">
                                </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <strong>Golongan Darah:</strong>
                                    <input type="text" name="golongan_darah" class="form-control" placeholder="Golongan Darah">
                                    </div>
                                    </div>
                                </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
