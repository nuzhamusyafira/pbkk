@extends('app')
@section('title')
Data Mata Kuliah
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-book"></i> Daftar Mata Kuliah</h4>
		<hr>
		<div class=row>
			<div class="col-md-6">
				<a href="/matkul/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4"></div>
		</div>
		<br>
		@if($matkul->count())
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover table-condensed tfix">
				<thead align="center">
					<tr>
						<td><b>Kode</b></td>
						<td><b>Nama Mata Kuliah</b></td>
						<td><b>SKS</b></td>
						<td colspan="2"><b>MENU</b></td>
					</tr>
				</thead>
				@foreach($matkul as $m)
				<tr>
					<td>{{ $m->kode_mk }}</td>
					<td>{{ $m->nama_mk }}</td>
					<td align="center">{{ $m->sks }}</td>
					<td align="center" width="30px">
						<a href="/matkul/{{$m->kode_mk}}/edit" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
					</td>
					<td align="center" width="30px">
						{!! Form::open(array('route' => array('matkul.destroy', $m->kode_mk),'method' => 'delete','style' => 'display:inline')) !!}
						<button class='btn btn-sm btn-danger delete-btn' type='submit'><i class='fa fa-times-circle'></i> Delete </button>
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		@else
		<div class="alert alert-warning">
			<i class="fa fa-exclamation-triangle"></i> Data Mata Kuliah tidak Ada
		</div>
		@endif
	</div>
</div>
@endsection