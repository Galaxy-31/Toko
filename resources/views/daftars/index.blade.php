@extends('layouts.master')

@section('title', 'Home')

@section('title', 'Daftar')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Pendaftaran</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('daftars.create') }}"> Create New daftar</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Jenis Kelamin</th>
<th>Tanggal Lahir</th>
<th>Agama</th>
<th>Cita-Cita</th>
<th>Hobi</th>
<th>Anak Ke</th>
<th>Jumlah Saudara</th>
<th>Tinggi Badan</th>
<th>Berat Badan</th>
<th>Golongan Darah</th>

<th width="280px">Action</th>
</tr>




@foreach ($daftars as $daftar)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $daftar->nama_lengkap}}</td>
<td>{{ $daftar->jk }}</td>
<td>{{ $daftar->ttl }}</td>
<td>{{ $daftar->agama }}</td>
<td>{{ $daftar->cita_cita }}</td>
<td>{{ $daftar->hobi }}</td>
<td>{{ $daftar->anak_ke }}</td>
<td>{{ $daftar->jumlah_saudara }}</td>
<td>{{ $daftar->tinggi_badan }}</td>
<td>{{ $daftar->berat_badan }}</td>
<td>{{ $daftar->golongan_darah }}</td>
<td>
<form action="{{ route('daftars.destroy',$daftar->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('daftars.show',$daftar->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('daftars.edit',$daftar->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"  onclick="return confirm('apakah anda yakin menghapus? {{ $daftar->nama_lengkap }}')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{{-- {!! $daftars->links() !!} --}}
@endsection
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('mereks.index') }}",
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "nama_lengkap",
                    name: "nama_lengkap"
                },
                {
                    data: "jk",
                    name: "jk"
                },
                {
                    data: "ttl",
                    name: "ttl"
                },
                {
                    data: "agama",
                    name: "agama"
                },
                {
                    data: "cita_cita",
                    name: "cita_cita"
                },
                {
                    data: "hobi",
                    name: "hobi"
                },
                {
                    data: "anak_ke",
                    name: "anak_ke"
                },
                {
                    data: "tinggi_badan",
                    name: "tinggi_badan"
                },
                {
                    data: "berat_badan",
                    name: "berat_badan"
                },
                {
                    data: "golongan_darah",
                    name: "golongan_darah"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });
    });
</script>
@endsection