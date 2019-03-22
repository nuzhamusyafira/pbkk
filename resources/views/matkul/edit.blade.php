@extends('app')
@section('title')
Edit Mata Kuliah
@endsection
@section('content')
<div class="panel panel-default">
	<div class="panel-body">
		<h4><i class="fa fa-check-square"></i> EDIT DATA MATA KULIAH</h4>
		<hr>
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="#" class="list-group-item active"><i class="fa fa-cogs"></i> MENU MATA KULIAH</a>
					<a href="/matkul" class="list-group-item"><i class="fa fa-refresh"></i> Tampilkan Semua</a>
					<a href="/" class="list-group-item"><i class="fa fa-home"></i> Home</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						{!! Form::model($mk,['method'=>'PATCH','action'=>['MatkulController@update',$mk->kode_mk]]) !!}
						<div class="form-group">
							{!! Form::label('kode_mk', 'Kode') !!}
							{!! Form::text('kode_mk',null, array('class' => 'form-control','placeholder'=>'Kode')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('nama_mk', 'Nama Mata Kuliah') !!}
							{!! Form::text('nama_mk', null, array('class' => 'form-control','placeholder'=>'Nama Mata Kuliah')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('sks', 'SKS') !!}
							{!! Form::number('sks', null, array('class' => 'form-control','placeholder'=>'SKS')) !!}
						</div>
						{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
						{!! Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
