@extends('app')
@section('title')
Tambah Data Mahasiswa
@endsection

@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-plus-square"></i> TAMBAH Mahasiswa</h4>
		<hr>
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item active"><i class="fa fa-cogs"></i> MENU Mahasiswa  </a>
					<a href="/mhs" class="list-group-item"><i class="fa fa-refresh"></i> Tampilkan Semua</a>
					<a href="/" class="list-group-item"><i class="fa fa-home"></i> Home</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::open(array('url' => '/mhs')) !!}
						<div class="form-group">
							{!! Form::label('nrp', 'NRP') !!}
							{!! Form::text('nrp',null, array('class' => 'form-control','placeholder'=>'NRP')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('nama', 'Nama Mahasiswa') !!}
							{!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Mahasiswa')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('nipdosenwali', 'Dosen Wali') !!}
							{!! Form::select('nipdosenwali', $dsn, null, array('class' => 'form-control')) !!}
						</div>
						{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
						{!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
						{!! Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
