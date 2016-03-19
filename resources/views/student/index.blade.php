@extends('layouts.master')

@section('content')
	<div class="col-sm-6">
		<button class="btn btn-success" data-toggle="modal" data-target="#modalTambah" id="tambah_siswa">Tambah</button>
	</div>
	<div class="col-sm-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Pilihan</th>
				</tr>
			</thead>
			<tbody id="table_body">
				<?php $no = 1; ?>
				@foreach($student as $value)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $value->nis }}</td>
						<td>{{ $value->nama }}</td>
						<td>{{ $value->kelas }}</td>
						<td>
							<button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modalEdit" id="edit_siswa" onclick="editSiswa({{$value->id}})">Ubah</button>
							<button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modalDelete" onclick="hapusSiswa({{$value->id}})">Hapus</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	@include('student.modalcreate')
	@include('student.modaledit')
	@include('student.modaldelete')
@stop
